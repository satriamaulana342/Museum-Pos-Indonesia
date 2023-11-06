<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Reservasi Museum Pos Indonesia</title>
<style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
  }
  .container {
    width: 100%;
    max-width: 600px;
    margin: 0 auto;
    background-color: #ffffff;
    padding: 20px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  }
  .header {
    text-align: center;
    padding: 10px;
    color: #ffffff;
  }
  .content {
    padding: 20px;
  }
  .barcode {
    text-align: center;
    margin-top: 20px;
  }
  .barcode img {
    max-width: 100%;
    height: auto;
  }
  .footer {
    text-align: center;
    padding: 10px;
    background-color: #f4f4f4;
    color: #333;
  }
  ul {
    list-style-type: none;
  }
  map {
    display: block;
    margin: 0 auto;
    width: 100%;
  }
  a {
    font-size: 12px;
    text-decoration: none;
  }
</style>
</head>
<body>
  <div class="container">
    <div class="header">
      <img src="{{ $message->embed($pathLogo) }}" alt="Museum Pos Indonesia" style="display: block; margin: 0 auto; width:120px; height: auto;">
    </div>
    <div class="content">
      <h2 style="color: #fd5d14">MUSEUM POS INDONESIA</h2>
      <p>Reservasi Anda telah berhasil. Berikut adalah detail reservasi Anda:</p>
      <h5 style="color: #fd5d14">Kode Reservasi : {{$mailData['data']->barcode}} </h5>
      <table>
        <tr>
          <td>{{ $mailData['data']->jenis_reservasi == 'Perorangan' ? 'Nama' : 'Nama Rombongan' }}</td>
          <td>:</td>
          <td>{{ $mailData['data']->nama }}</td>
        </tr>
        @if ($mailData['data']->jenis_reservasi != 'Perorangan')
        <tr>
          <td>Nama Instansi</td>
          <td>:</td>
          <td>{{ $mailData['data']->instansi }}</td>
        </tr>
        @endif
        <tr>
          <td>{{ $mailData['data']->jenis_reservasi == 'Perorangan' ? 'Jumlah Pengunjung' : 'Jumlah Rombongan' }}</td>
          <td>:</td>
          <td>{{ $mailData['data']->jumlah_pengunjung }}</td>
        <tr>
          <td>Tanggal</td>
          <td>:</td>
          <td>{{ date('d F Y', strtotime($mailData['data']->tanggal)) }}</td>
        </tr>
        <tr>
          <td>Waktu</td>
          <td>:</td>
          <td>{{ substr($mailData['data']->jam, 0, 5) }} WIB</td>
        </tr>
        <tr>
          <td>Lokasi</td>
          <td>:</td>
          <td>Museum Pos Indonesia, Jalan Cilaki No.73, Bandung 40115.</td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td><a href="https://goo.gl/maps/rL8mq5LWkgijaKGc8" class="map">Lihat Di Map</a></td>
        </tr>
      </table>
      <div class="barcode">
        <img src="{{ $message->embed($pathImage) }}" alt="Barcode" width="100">
      </div>
      <p>Terima kasih telah melakukan reservasi dengan kami!</p>
    </div>
    <div class="footer">
      <p>Hubungi kami di museumposindonesia@gmail.com</p>
    </div>
  </div>
</body>
</html>