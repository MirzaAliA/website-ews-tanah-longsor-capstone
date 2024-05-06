<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RSensor extends Model
{
    use HasFactory;

    protected $table = 'realtime_sensor';
    protected $primaryKey = 'bacaan_id';
    protected $fillable = ['mpu_accelerationx', 'mpu_accelerationy', 'mpu_accelerationz', 'mpu_gyrox', 'mpu_gyroy', 'mpu_gyroxz', 'rain_curah', 'rain_tip', 'status_siaga', 'status_mpu', 'status_hujan', 'created_at', 'updated_at'];
}
