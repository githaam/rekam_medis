<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    // use SoftDeletes;

    // protected $dates = ['deleted_at'];
    protected $table = 'dokter';
    protected $primaryKey = 'kd_dokter';
    
    public $timestamps = false; # created_at && updated_at ???
    // protected $fillable = ['username','password','level']; //whitelist
    protected $guarded = ['kd_dokter']; //blacklist

    public function polikliniks()
    {
        return $this->belongsTo(Poli::class, 'kd_poli');
    }
}
