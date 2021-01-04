<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Login extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $table = 'login';
    protected $primaryKey = 'kd_user';
    
    // public $timestamps = false; # created_at && updated_at ???
    protected $fillable = ['username','password','level']; //whitelist
    // protected $guarded = ['kd_user', 'created_at','updated_at']; //blacklist
}
