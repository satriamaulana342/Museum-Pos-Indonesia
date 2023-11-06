<?php

namespace App\Http\Controllers;

use App\Models\Reservations;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Session;
use Milon\Barcode\Facades\DNS2DFacade as DNS2D;
use Illuminate\Support\Facades\Mail;
use App\Mail\ReservationMail;
use Illuminate\Support\Facades\Storage;
use Dompdf\Dompdf;
use Illuminate\Support\Facades\View;
use Intervention\Image\Facades\Image;

class ReservationController extends Controller
{

  public function checkReservation(Request $request) {
    $date = Carbon::parse($request->query('date'));
    $data = Reservations::where('tanggal', $date->format('Y-m-d'))->where('jenis_reservasi', 'Rombongan')->get('jam');
    $time = [];
    // check date is weekend or not
    $dayOfWeek = $date->dayOfWeek;

    if($dayOfWeek == 6 ){
      // cek waktu apakah sudah di reservasi atau belum
      $time = ['09:00','09:30','10:00','10:30','11:00','11:30','12:00','12:30','13:00'];  
      foreach($data as $d){
        $time = array_diff($time, [substr($d->jam, 0, 5)]);
      }
    }else if ($dayOfWeek == 1 || $dayOfWeek == 2 || $dayOfWeek == 3 || $dayOfWeek == 4 || $dayOfWeek == 5){
      // time from 09:00 to 15:00
      $time = ['09:00','09:30','10:00','10:30','11:00','11:30','12:00','12:30','13:00','13:30','14:00','14:30','15:00'];
      foreach($data as $d){        
        $time = array_diff($time, [substr($d->jam, 0, 5)]);
      }
    }

    return response()->json([
      'time' => $time
    ]);
  }
  
  public function index(){
    return view('reservasi/index');
  }

  public function store(Request $request) {
    try{
      $barcode = Str::random(4).Carbon::now()->timestamp;
      $data = Reservations::create([
        'nama' => $request->nama,
        'jumlah_pengunjung' => $request->jumlah_pengunjung,
        'instansi' => $request->instansi != null ? $request->instansi : 'Non Instansi',
        'email' => $request->email,
        'no_telp' => $request->no_telp,
        'jenis_reservasi' => $request->jenis_reservasi,
        'kewarganegaraan' => $request->kewarganegaraan,
        'tanggal' => $request->tanggal,
        'jam' => $request->jam,
        'kelompok' => $request->kelompok,
        'jenjang' => $request->jenjang,
        'barcode' => $barcode
      ]);
      
      $url = url('/cek-barcode/' . $data->barcode);
      $barcode = DNS2D::getBarcodePNG($url, 'QRCODE', 5, 5);

      // $dompdf = new Dompdf();
      // $imagePath = public_path('asset/pos.png');
      // $html = view('pdf.reservation', ['data' => $data, 'barcode' => $barcode, 'imagePath' => $imagePath]);

      // $dompdf->loadHtml($html);
  
      // $dompdf->setPaper('A4', 'landscape');
  
      // $dompdf->render();
      
      // Storage::disk('public')->put('barcode/' . 'reservasi-'. $data->id . '.pdf', $dompdf->output());
      
      // put storage barcode

      $imageData = base64_decode($barcode); // Your base64 image data
      $destinationPath = 'public/barcode/reservasi-' . $data->id . '.png';
      
      // Create an Intervention Image instance
      $image = Image::make($imageData);
      
      // Set a white background
      $image->resize(200, 200); // Resize the image
      $image->resizeCanvas(200, 200, 'center', false, '#ffffff'); // Resize the canvas
      
      // Save the image
      Storage::put($destinationPath, $image->encode('png'));

      $mailData = [
        'data' => $data,        
      ];

      Mail::to($request->email)->send(new ReservationMail($mailData));
      return response()->json([
        'message' => 'Reservasi Berhasil Silahkan Cek Email',
        'status_code' => '200',
        'data' => $data
      ]);

    }catch(Exception $e) {
      return response()->json([
        'message' => $e->getMessage(),
        'status_code' => '500'
      ]);
    }
  }

  public function checkBarcode($id){
    $data = Reservations::where('barcode', $id)->first();
    $date = Carbon::parse($data->tanggal)->translatedFormat('d F Y');
    $time = substr($data->jam, 0, 5);
    $data->tanggal = $date;
    $data->jam = $time;
    return view('reservasi/cek-barcode', ['data' => $data]);
  }

}