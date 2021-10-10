<?php

namespace App\Http\Requests\Pasien;

use Illuminate\Foundation\Http\FormRequest;

class PasienRequest extends FormRequest
{
  /**
   * Determine if the user is authorized to make this request.
   *
   * @return bool
   */
  public function authorize()
  {
    return true;
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array
   */
  public function rules()
  {
    return [
      'nama_pasien' => 'required',
      'alamat_pasien' => 'required',
      'keluhan_pasien' => 'required',
      'no_telp' => 'required',
      'dokter_id' => 'required',
      // 'nama_obat' => 'required'
    ];
  }
}
