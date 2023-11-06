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
    height: 400px;
    font-weight: bold;
  }
  a {
    font-size: 15px;
    color: #fd5d14;
    text-decoration: none;
  }
</style>
</head>
<body>
  <div class="container">
    <div class="header">
      <img src="data:image/webp;base64,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" alt="Museum Pos Indonesia" style="display: block; margin: 0 auto; height: auto;">
    </div>
    <div class="content">
      <h2 style="color: #fd5d14">MUSEUM POS INDONESIA</h2>
      <p>Reservasi Anda telah berhasil. Berikut adalah detail reservasi Anda:</p>
      <h5 style="color: #fd5d14">Kode Reservasi : VRIa1693040270</h3>
      <table>
        <tr>
          <td>Nama</td>
          <td>:</td>
          <td>Muhammad Rizqi</td>
        </tr>
        <tr>
          <td>Tanggal</td>
          <td>:</td>
          <td>25 August 2023</td>
        </tr>
        <tr>
          <td>Waktu</td>
          <td>:</td>
          <td>10:00 WIB</td>
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
      @php
        echo '<div class="barcode"><img src="data:image/png;base64,' . DNS2D::getBarcodePNG('123456789', 'QRCODE') . '"   alt="barcode" width="100px"/></div>'
      @endphp
      <p>Terima kasih telah melakukan reservasi dengan kami!</p>
    </div>
    <div class="footer">
      <p>Hubungi kami di museumposindonesia@gmail.com</p>
    </div>
  </div>
</body>
</html>