<?php

namespace App\Http\Requests\Dokter;

use Illuminate\Foundation\Http\FormRequest;

class DokterRequest extends FormRequest
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
      'nama_dokter' => 'required',
      'spesialisasi_dokter' => 'required',
      'alamat_dokter' => 'required',
    ];
  }
}
