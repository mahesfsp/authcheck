<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class API extends Model
{
    use HasFactory;
    protected $table='a_p_i_s';
    protected $fillable = [
        'name', 'email', 'password',
    ];
        /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
  
}
