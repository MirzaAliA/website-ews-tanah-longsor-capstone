<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\SSensor;

class HistorySensorSetting extends Controller
{
    public function simpanBerkala()
    {
        // Menghitung jumlah baris yang sudah ada dalam tabel
        $jumlahData = SSensor::count();

        // Batasi jumlah data baru yang akan dimasukkan menjadi 100 baris
        $batasData = 100;

        if ($jumlahData >= $batasData) {
            // Menemukan data yang paling tua berdasarkan kolom `created_at`
            $dataTerlama = SSensor::orderBy('created_at')->first();

            // Mulai transaksi untuk menghapus data lama dan memasukkan data baru
            DB::transaction(function () use ($dataTerlama) {
                // Hapus data yang paling tua
                $dataTerlama->delete();

                // Memasukkan data baru
                $dataBaru = [
                    'mpus_accelerationx' => request()->mpuaccelerationx,
                    'mpus_accelerationy' => request()->mpuaccelerationy,
                    'mpus_accelerationz' => request()->mpuaccelerationz,
                    'mpus_gyrox' => request()->mpugyrox,
                    'mpus_gyroy' => request()->mpugyroy,
                    'mpus_gyroz' => request()->mpugyroz,
                    'rains_curah' => request()->raincurah,
                    'rains_tip' => request()->raintip,
                    'statuss_siaga' => request()->statussiaga,
                    'statuss_mpu' => request()->statusmpu,
                    'statuss_hujan' => request()->statushujan
                ];
                SSensor::create($dataBaru);
            });

            return "Data berhasil dimasukkan dengan rotasi data.";
        } else {
            // Jika jumlah data masih kurang dari batas, masukkan data baru tanpa rotasi data
            $data = [
                'mpus_accelerationx' => request()->mpuaccelerationx,
                'mpus_accelerationy' => request()->mpuaccelerationy,
                'mpus_accelerationz' => request()->mpuaccelerationz,
                'mpus_gyrox' => request()->mpugyrox,
                'mpus_gyroy' => request()->mpugyroy,
                'mpus_gyroz' => request()->mpugyroz,
                'rains_curah' => request()->raincurah,
                'rains_tip' => request()->raintip,
                'statuss_siaga' => request()->statussiaga,
                'statuss_mpu' => request()->statusmpu,
                'statuss_hujan' => request()->statushujan
            ];

            // Memasukkan data ke dalam database sebagai baris baru
            SSensor::create($data);

            return "Data berhasil dimasukkan.";
        }
    }
}
