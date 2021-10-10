<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
  use HasFactory;
  protected $guarded = ['id'];
  public $timestamps = true;

  public function dokter()
  {
    return $this->belongsTo(Dokter::class);
  }
  public function obats()
  {
    return $this->hasMany(Obat::class);
  }
}
