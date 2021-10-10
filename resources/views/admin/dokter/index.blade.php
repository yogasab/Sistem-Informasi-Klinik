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

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h5 class="font-weight-bold text-primary">Daftar Dokter
          <span>
            <a href="{{ route('admin-dokter.create') }}" class="btn ml-4 btn-primary font-weight-bold">
              + Tambah Dokter
            </a>
          </span>
        </h5>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Nama Dokter</th>
                <th>Spesialisasi</th>
                <th>Alamat</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>Nama Dokter</th>
                <th>Spesialisasi</th>
                <th>Alamat</th>
                <th>Actions</th>
              </tr>
            </tfoot>
            <tbody>
              @foreach ($dokters as $dokter)
              <tr>
                <td>{{ $dokter->nama_dokter }}</td>
                <td>{{ $dokter->spesialisasi_dokter }}</td>
                <td>{{ $dokter->alamat_dokter }}</td>
                <td>
                  <span><a href="{{ route('admin-dokter.edit', $dokter->id) }}" class="btn btn-warning">Edit</a></span>
                  <span>
                    <form action="{{ route('admin-dokter.destroy', $dokter->id) }}" method="post">
                      @method('delete')
                      @csrf
                      <span><button onclick="return confirm('Are you sure?')" class="btn btn-danger d-block"
                          type="submit">Hapus</button></span>
                    </form>
                  </span>
                </td>
              </tr>
              @endforeach
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