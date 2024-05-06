<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RSensor;

class RealtimeSensor extends Controller
{
    public function bacaSensorMpuAccX()
    {
        //baca nilai /isi tabel realtime sensor dan ambil nilai accx
        $rsensor = RSensor::select('*')->get();
        //kirim ke tampilan bacampuaccx
        // return view('bacampu_accx', ['nilaisensor' => $rsensor]);
        return view('bacampu_accx')->with('nilaisensor', $rsensor);
    }

    public function bacaSensorMpuAccY()
    {
        //baca nilai /isi tabel realtime sensor dan ambil nilai accy
        $rsensor = RSensor::select('*')->get();
        //kirim ke tampilan bacampuaccy
        return view('bacampu_accy', ['nilaisensor' => $rsensor]);
    }

    public function bacaSensorMpuAccZ()
    {
        //baca nilai /isi tabel realtime sensor dan ambil nilai accz
        $rsensor = RSensor::select('*')->get();
        //kirim ke tampilan bacampuaccz
        return view('bacampu_accz', ['nilaisensor' => $rsensor]);
    }

    public function bacaSensorMpuGyroX()
    {
        //baca nilai /isi tabel realtime sensor dan ambil nilai gyrox
        $rsensor = RSensor::select('*')->get();
        //kirim ke tampilan bacampugyrox
        return view('bacampu_gyrox', ['nilaisensor' => $rsensor]);
    }

    public function bacaSensorMpuGyroY()
    {
        //baca nilai /isi tabel realtime sensor dan ambil nilai gyroy
        $rsensor = RSensor::select('*')->get();
        //kirim ke tampilan bacampugyroy
        return view('bacampu_gyroy', ['nilaisensor' => $rsensor]);
    }

    public function bacaSensorMpuGyroZ()
    {
        //baca nilai /isi tabel realtime sensor dan ambil nilai gyroz
        $rsensor = RSensor::select('*')->get();
        //kirim ke tampilan bacampugyroz
        return view('bacampu_gyroz', ['nilaisensor' => $rsensor]);
    }

    public function bacaSensorRainCurah()
    {
        //baca nilai /isi tabel sensors_table dan ambil nilai curah hujan
        $rsensor = RSensor::select('*')->get();
        //kirim ke tampilan bacaraincurah
        return view('bacarain_curah', ['nilaisensor' => $rsensor]);
    }

    public function bacaSensorRainTip()
    {
        //baca nilai /isi tabel sensors_table dan ambil nilai tip hujan
        $rsensor = RSensor::select('*')->get();
        //kirim ke tampilan bacaraintip
        return view('bacarain_tip', ['nilaisensor' => $rsensor]);
    }

    public function bacaStatusSiaga()
    {
        //baca nilai /isi tabel sensors_table dan ambil nilai curah
        $status = RSensor::select('*')->get();
        //kirim ke tampilan bacacurah
        return view('statussiaga', ['nilaistatus' => $status]);
    }

    public function bacaStatusMpu()
    {
        //baca nilai /isi tabel sensors_table dan ambil nilai curah
        $status = RSensor::select('*')->get();
        //kirim ke tampilan bacacurah
        return view('statusmpu', ['nilaistatus' => $status]);
    }

    public function bacaStatusHujan()
    {
        //baca nilai /isi tabel sensors_table dan ambil nilai curah
        $status = RSensor::select('*')->get();
        //kirim ke tampilan bacacurah
        return view('statushujan', ['nilaistatus' => $status]);
    }

    //data bacaan rsensor dikirim ke database dan di update tanpa menyimpan
    public function simpanSensor()
    {
        RSensor::where('bacaan_id', '1')->update([
            'mpu_accelerationx' => request()->mpuaccelerationx,
            'mpu_accelerationy' => request()->mpuaccelerationy,
            'mpu_accelerationz' => request()->mpuaccelerationz,
            'mpu_gyrox' => request()->mpugyrox,
            'mpu_gyroy' => request()->mpugyroy,
            'mpu_gyroz' => request()->mpugyroz,
            'rain_curah' => request()->raincurah,
            'rain_tip' => request()->raintip,
            'status_siaga' => request()->statussiaga,
            'status_mpu' => request()->statusmpu,
            'status_hujan' => request()->statushujan,
        ]);
    }
}
