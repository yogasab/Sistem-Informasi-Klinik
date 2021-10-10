@extends('layouts.main')

@section('content')
<!-- Main Content -->
<div id="content">
  <!-- Topbar -->
  <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
    <!-- Sidebar Toggle (Topbar) -->
    <form class="form-inline">
      <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
      </button>
    </form>
    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">
      <div class="topbar-divider d-none d-sm-block"></div>
      <!-- Nav Item - User Information -->
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
          <img class="img-profile rounded-circle" src="{{ asset('img/undraw_profile.svg') }}">
        </a>
        <!-- Dropdown - User Information -->
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
          </form>
        </div>
      </li>
    </ul>
  </nav>
  <!-- End of Topbar -->
  <!-- Begin Page Content -->
  <div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-3 text-gray-800">Buat perjanjian dengan dokter kamu</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-body">
        <form method="POST" action="{{ route('perjanjian.store') }}" enctype="multipart/form-data">
          @csrf
          <input type="hidden" name="pasien_id" value="{{ Auth::user()->id }}">
          <div class="form-group">
            <label for="nama_pasien">Nama Pasien</label>
            <input type="text" class="form-control @error('nama_pasien') is-invalid @enderror" id="nama_pasien"
              name="nama_pasien" placeholder="Nama Pasien" value="{{ old('nama_pasien') }}">
            @error('nama_pasien')
            <span class="invalid-feedback">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div class="form-group">
            <label for="nama_dokter">Nama Dokter</label>
            <select class="form-control" id="nama_dokter" name="nama_dokter">
              <option> Pilih salah satu</option>
              @foreach ($dokters as $dokter)
              <option value="{{ $dokter->nama_dokter  }}">
                {{ $dokter->nama_dokter }}
              </option>
              @endforeach
            </select>
          </div>
          <div class="form-gr oup">
            <label for="spesialiasi_dokter">Spesialisasi Dokter</label>
            <select class="form-control" id="spesialiasi_dokter" name="spesialiasi_dokter">
              <option> Pilih salah satu</option>
              @foreach ($dokters as $dokter)
              <option value="{{ $dokter->spesialisasi_dokter }}">{{ $dokter->spesialisasi_dokter }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="waktu_perjanjian">Waktu Perjanjian</label>
            <select name="waktu_perjanjian" class="form-control" id="waktu_perjanjian">
              <option value="Pagi (08:00)">Pagi (08:00)</option>
              <option value="Siang (14:00)">Siang (14:00)</option>
              <option value="Sore (17:00)">Sore (17:00)</option>
            </select>
          </div>
          <button type="submit" class="btn btn-info">Buat Perjanjian</button>
        </form>
      </div>
    </div>
  </div>
  <!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
@endsection