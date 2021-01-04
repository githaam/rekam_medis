<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Poli extends Model
{
  protected $table = 'poliklinik';
  protected $primaryKey = 'kd_poli';

  public $timestamps = false;
  protected $guarded = ['kd_poli'];

  public function dokter()
    {
        return $this->hasMany(Dokter::class, 'kd_poli');
    }
}
