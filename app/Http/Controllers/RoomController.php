<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Session;

class RoomController extends Controller
{
    public function index(){

        $ruangan = Room::all();

        return view ('pages.admin.ruangan',[
            'title' => 'Ruangan | Meseum POS',
            'ruangan' => $ruangan,
        ]);
    }

    public function tambah(){
        return view ('pages.admin.addRuangan',[
            'title' => 'Tambah ruangan | Meseum POS',
        ]);
    }

    public function store(Request $request){
        
        $credential = $request->only('heading','slug','thumbnail','content');
        $validated = $request->validate([
            'heading' => 'required|unique:articles',
            'image' => 'required|image|mimes:jpeg,png,jpg',
            'content' => 'required'
        ]);

        if ($request->file('image')) {
            $filename = $validated['image']->getClientOriginalName();
            $validated['image']->storeAs('photos/2/Thumbnails', $filename, 'public');
        } else {
            $filename = "default.png";
        }

        $ruangan = Room::create([
            'heading' => $validated['heading'],
            'slug' => Str::slug($validated['heading']),
            'thumbnail' => $filename,
            'content' => $validated['content'],
        ]);


        if($ruangan){
            Session::flash('status','success');
            Session::flash('message','Ruangan berhasil ditambahkan');
        }

        return redirect('/dashboard/ruangan');
    }


    public function detail($id){
        $ruangan = Room::findOrFail($id);
        return view('pages.admin.editRuangan',[
            'title' => 'Edit ruangan | Meseum POS',
            'data' => $ruangan,
        ]);
    }

    public function edit(Request $request, $id){
        $ruangan = Room::findOrFail($id);
        $credential =  $request->only('heading','image','content');
        $validated = $request->validate([
            'heading' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg',
            'content' => 'required'
        ]);

        if ($request->file('image')) {
            $filename = $validated['image']->getClientOriginalName();
            $validated['image']->storeAs('photos/2/Thumbnails', $filename, 'public');
        } else {
            $filename = $ruangan -> thumbnail;
        }
       
        $ruangan->update([
            'heading' => $validated['heading'],
            'slug' => Str::slug($validated['heading']),
            'thumbnail' => $filename,
            'content' => $validated['content'],
        ]);

        if($ruangan){
            Session::flash('status','success');
            Session::flash('message','Ruangan berhasil diubah');
        }

        return redirect('/dashboard/ruangan');
        
    }

    public function delete($id){
        $ruangan = Room::where('id',$id);
        $ruangan->forceDelete();
        if($ruangan){
            Session::flash('status','success');
            Session::flash('message','Ruangan berhasil dihapus');
        }
        return redirect('/dashboard/ruangan');
    }

    public function arsip($id){
        $ruangan = Room::where('id',$id);
        $ruangan->delete();
        if($ruangan){
            Session::flash('status','success');
            Session::flash('message','Ruangan berhasil diarsipkan');
        }
        return redirect('/dashboard/ruangan');
    }

    public function dataarsip()
    {
        $archivedRuangan = Room::onlyTrashed()->get();
        if($archivedRuangan){
            Session::flash('status','success');
            Session::flash('message','Ruangan berhasil direstore');
        }
        return view('pages.admin.arsipRuangan',[
            'title' => 'POS | Arsip',
            'ruangan' => $archivedRuangan
        ]);
    }

    public function restore($id){
        $archivedRuangan = Room::withTrashed()->where('id', $id)->restore();
        return redirect('/dashboard/ruangan');
    }

    public function content($slug){
        
        $ruangan = Room::where('slug', $slug)->first();
        if($ruangan){
            $date = Carbon::createFromFormat('Y-m-d H:i:s', $ruangan->created_at)->locale('id');
            $formattedDate = $date->format('l, j F Y');
        
            return view ('content',[
                "title" => "Ruangan",
                "content" => $ruangan,
                "posted" => $formattedDate
            ]);
        }else{
            abort(404);
        }
    }
}