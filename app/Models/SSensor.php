<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SSensor extends Model
{
    use HasFactory;

    protected $table = 'sensor_simpan';
    protected $primaryKey = 'bacaansimpan_id';
    protected $fillable = ['mpus_accelerationx', 'mpus_accelerationy', 'mpus_accelerationz', 'mpus_gyrox', 'mpus_gyroy', 'mpus_gyroz', 'rains_curah', 'rains_tip', 'statuss_siaga', 'statuss_mpu', 'statuss_hujan','created_at', 'updated_at'];
}
