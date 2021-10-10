@extends('layouts.main')

@section('content')
<!-- Main Content -->
<div id="content">
  <!-- End of Topbar -->
  <!-- Begin Page Content -->
  <div class="container-fluid mt-5">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Rekam Pasien</h1>
    <p class="mb-4">Rekam Medis Sdr {{ $pasien->nama_pasien }}</p>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <span>
          <a href="{{ route('dokter.index') }}" class="btn btn-primary font-weight-bold">
            Kembali </a> </span> <span>
          <a href="{{ route('generatePDF', $pasien->id ) }}" class="btn btn-success font-weight-bold">
            Cetak Rekam Pasien
          </a>
        </span>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Nama Pasien</th>
                <th>Alamat Pasien</th>
                <th>Tanggal Berobat</th>
                <th>Keluhan</th>
                <th>Nama Dokter</th>
                <th>Obat</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>Nama Pasien</th>
                <th>Alamat Pasien</th>
                <th>Tanggal Berobat</th>
                <th>Keluhan</th>
                <th>Nama Dokter</th>
                <th>Obat</th>
              </tr>
            </tfoot>
            <tbody>
              <tr>
                <td>{{ $pasien->nama_pasien }}</td>
                <td>{{ $pasien->alamat_pasien }}</td>
                <td>{{ $pasien->tgl_datang }}</td>
                <td>{{ $pasien->keluhan_pasien }}</td>
                <td>{{ $pasien->dokter->nama_dokter }}</td>
                <td>{{ $pasien->nama_obat }}</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
@endsection