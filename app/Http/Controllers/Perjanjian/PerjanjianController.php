<?php

namespace App\Http\Controllers\Perjanjian;

use App\Models\Perjanjian;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Perjanjian\PerjanjianRequest;

class PerjanjianController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    //
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    //
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(PerjanjianRequest $request)
  {
    $validdatedData = $request->all();
    $perjanjian = Perjanjian::create($validdatedData);
    return redirect()->route('pasien.index');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Perjanjian  $perjanjian
   * @return \Illuminate\Http\Response
   */
  public function show(Perjanjian $perjanjian)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Perjanjian  $perjanjian
   * @return \Illuminate\Http\Response
   */
  public function edit(Perjanjian $perjanjian)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Perjanjian  $perjanjian
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Perjanjian $perjanjian)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Perjanjian  $perjanjian
   * @return \Illuminate\Http\Response
   */
  public function destroy(Perjanjian $perjanjian)
  {
    //
  }
}
