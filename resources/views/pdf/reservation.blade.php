<!DOCTYPE html>
<html>
<head>
    <title>Tiket Reservasi Museum Pos Indonesia</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .page {
            width: 210mm;
            height: 297mm;
            margin: 0 auto;
            padding: 20mm; /* Adjust as needed */
            box-sizing: border-box;
            border: 1px solid #ccc;
        }
        .logo {
            text-align: center;
            margin-bottom: 20px;
        }
        .logo img {
            width: 120px;
        }
        .ticket {
            padding: 20px;
            color: black;
            margin: 0 auto;
        }
        .event-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .ticket-info span {
            display: block;
            margin-bottom: 5px;
        }
        .barcode {
            text-align: center;
            margin-top: 20px;
        }
        .barcode img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
    <div class="page">
        <div class="ticket" style="display:flex">
            <div class="event-title">Reservasi Museum Pos Indonesia</div>
            <div class="ticket-info">
                <span>Nama: {{ $data->nama }} </span>
                <span>Tanggal: {{ $data->tanggal }} </span>
                <span>Jam: {{ $data->jam }} WIB</span>
                <span>Location: Jalan Cilaki No.73 Bandung 40115.</span>
            </div>
            <div class="barcode">
                <img src="data:image/png;base64, {{ $barcode }}" alt="Barcode" width="100">
            </div>
        </div>
    </div>
</body>
</html>