<?php

namespace App\Http\Controllers\Dokter;

use App\Models\Obat;
use App\Models\Dokter;
use App\Models\Pasien;
use App\Models\Perjanjian;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DokterController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    // $pasien = Pasien::with(['dokter'])->get();
    $pasien = Dokter::with('pasiens')->where('nama_dokter', Auth::user()->name)->get()->collect();
    $obat = Obat::with('pasien')->get();
    $data = [
      'pasiens' => $pasien,
      'obats' => $obat
    ];
    return view('dokter.index', $data);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $dokters = Dokter::all();
    $obats = Obat::all();
    $perjanjian = Perjanjian::where('nama_dokter', Auth::user()->name)->get();
    $data = [
      'dokters' => $dokters,
      'perjanjians' => $perjanjian,
      'obats' => $obats
    ];
    return view('dokter.create', $data);
  }
  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    //
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Dokter  $dokter
   * @return \Illuminate\Http\Response
   */
  public function show(Dokter $dokter)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Dokter  $dokter
   * @return \Illuminate\Http\Response
   */
  public function edit(Dokter $dokter)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Dokter  $dokter
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Dokter $dokter)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Dokter  $dokter
   * @return \Illuminate\Http\Response
   */
  public function destroy(Dokter $dokter)
  {
    //
  }
}
