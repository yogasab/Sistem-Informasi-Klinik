<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Data Pasien</title>
  {{-- <link rel="stylesheet" href="{{ asset('css/style.css') }}" media="all" /> --}}
  {{-- <style>
    .clearfix:after {
      content: "";
      display: table;
      clear: both;
    }

    a {
      color: #5D6975;
      text-decoration: underline;
    }

    body {
      position: relative;
      width: 21cm;
      height: 29.7cm;
      margin: 0 auto;
      color: #001028;
      background: #FFFFFF;
      font-family: Arial, sans-serif;
      font-size: 12px;
      font-family: Arial;
    }

    header {
      padding: 10px 0;
      margin-bottom: 30px;
    }

    #logo {
      text-align: center;
      margin-bottom: 10px;
    }

    #logo img {
      width: 90px;
    }

    h1 {
      border-top: 1px solid #5D6975;
      border-bottom: 1px solid #5D6975;
      color: #5D6975;
      font-size: 2.4em;
      line-height: 1.4em;
      font-weight: normal;
      text-align: center;
      margin: 0 0 20px 0;
      background: url(dimension.png);
    }

    #project {
      float: left;
    }

    #project span {
      color: #5D6975;
      text-align: right;
      width: 52px;
      margin-right: 10px;
      display: inline-block;
      font-size: 0.8em;
    }

    #company {
      float: right;
      text-align: right;
    }

    #project div,
    #company div {
      white-space: nowrap;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      border-spacing: 0;
      margin-bottom: 20px;
    }

    table tr:nth-child(2n-1) td {
      background: #F5F5F5;
    }

    table th,
    table td {
      text-align: center;
    }

    table th {
      padding: 5px 20px;
      color: #5D6975;
      border-bottom: 1px solid #C1CED9;
      white-space: nowrap;
      font-weight: normal;
    }

    table .service,
    table .desc {
      text-align: left;
    }

    table td {
      padding: 20px;
      text-align: right;
    }

    table td.service,
    table td.desc {
      vertical-align: top;
    }

    table td.unit,
    table td.qty,
    table td.total {
      font-size: 1.2em;
    }

    table td.grand {
      border-top: 1px solid #5D6975;
      ;
    }

    #notices .notice {
      color: #5D6975;
      font-size: 1.2em;
    }

    footer {
      color: #5D6975;
      width: 100%;
      height: 30px;
      position: absolute;
      bottom: 0;
      border-top: 1px solid #C1CED9;
      padding: 8px 0;
      text-align: center;
    }
  </style> --}}
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <header class="clearfix">
    <h1>E-Klinik</h1>
    <div id="company" class="clearfix">
      <div>Rekam Medis</div>
      <div>Jalan Asia Afrika 12</div>
      <div>(602) 519-0450</div>
      <div><a>e-klinik@email.com</a></div>
    </div>
    <br>
  </header>
  <main>
    <table class="table">
      <thead class="thead-light">
        <tr>
          <th scope="col">Nama Pasien</th>
          <th scope="col">Alamat Pasien</th>
          <th scope="col">Tanggal Berobat</th>
          <th scope="col">Keluhan</th>
          <th scope="col">Nama Dokter</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($pasiens as $pasien)
        <tr>
          <td>{{ $pasien->nama_pasien }}</td>
          <td>{{ $pasien->alamat_pasien }}</td>
          <td>{{ $pasien->tgl_datang }}</td>
          <td>{{ $pasien->keluhan_pasien }}</td>
          <td>{{ $pasien->dokter->nama_dokter }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
    <div id="notices">
      <div>PERHATIAN:</div>
      <div class="notice">
        <strong>Segera menebus obat ke apoteker sesuai resep dokter</strong>
      </div>
    </div>
  </main>
  <footer>
    <h2>Semoga Lekas Sembuh</h2>
  </footer>
</body>

</html>