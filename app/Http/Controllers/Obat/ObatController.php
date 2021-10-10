<?php

namespace App\Http\Controllers\Obat;

use App\Models\Obat;
use App\Models\Pasien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests\Obat\ObatRequest;

class ObatController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $obat = Obat::all();
    $data = [
      'obats' => $obat
    ];
    if (Auth::user()->role == 'admin') {
      return view('admin.obat.index', $data);
    }
    return view('obat.index', $data);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('admin.obat.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(ObatRequest $request)
  {
    $validatedData = $request->all();
    Obat::create($validatedData);
    return redirect()->route('obat.index');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Pasien  $pasien
   * @return \Illuminate\Http\Response
   */
  public function show(Pasien $pasien)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Pasien  $pasien
   * @return \Illuminate\Http\Response
   */
  public function edit(Obat $obat, Request $request)
  {
    $data = [
      'obat' => $obat
    ];
    return view('admin.obat.edit', $data);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Pasien  $pasien
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Obat $obat)
  {
    $validatedData = $request->all();
    $obat->update($validatedData);
    return redirect()->route('obat.index');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Pasien  $pasien
   * @return \Illuminate\Http\Response
   */
  public function destroy(Obat $obat)
  {
    $obat->delete();
    return redirect()->route('obat.index');
  }
}
