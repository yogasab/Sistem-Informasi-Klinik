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
    <h1 class="h3 mb-3 text-gray-800">Dokter</h1>
    <p>Edit biodata dokter</p>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-body">
        <form method="POST" action="{{ route('admin-dokter.update', $dokter->id) }}" enctype="multipart/form-data">
          @method('put')
          @csrf
          {{-- <input type="hidden" name="{{ $users->id }}" value="{{ $users->id }}"> --}}
          <div class="form-group">
            <label for="nama_dokter">Nama Dokter</label>
            <input type="text" class="form-control" id="nama_dokter" name="nama_dokter" placeholder="Nama Dokter"
              value="{{ $dokter->nama_dokter }}">
          </div>
          <div class="form-group">
            <label for="alamat_dokter">Alamat</label>
            <textarea name="alamat_dokter" class="form-control" id="exampleFormControlTextarea1"
              rows="3">{{ $dokter->alamat_dokter }}</textarea>
          </div>
          <div class="form-group">
            <label for="spesialisasi_dokter">Spesialisasi</label>
            <select name="spesialisasi_dokter" class="form-control" id="spesialisasi_dokter">
              <option value="Poli Umum" {{($dokter->spesialisasi_dokter === 'Poli Umum') ? 'Selected' : ''}}>Poli
                Umum
              </option>
              <option value="Poli Anak" {{($dokter->spesialisasi_dokter === 'Poli Anak') ? 'Selected' : ''}}>Poli
                Anak
              </option>
              <option value="Poli Lansia" {{($dokter->spesialisasi_dokter === 'Poli Lansia') ? 'Selected' : ''}}>
                Poli
                Lansia
              </option>
            </select>
          </div>
          <button type="submit" class="btn btn-info">Update</button>
        </form>
      </div>
    </div>

  </div>
  <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
@endsection