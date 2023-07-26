<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\City;
use App\Models\User;

class BelajarController extends Controller
{
    public function doni()
    {
        $tanggal = '2023-07-24';

        $users = User::select('id', 'name', 'email')->get();
        $cities = City::all();

        $generateRandomOtp = $this->generateRandomOtp();
        $hitungJumlahBuah  = $this->hitungJumlahBuah(100, 50);

        $hitungJumlahMobil  = self::hitungJumlahMobil(100, 50);

        $string = '1 Mobil, 2 Motor, 3 Sepeda';
        $array  = ['Mobile', 'Motor', 'Sepeda'];

        return view('doni.doni', [
            'tanggal' => $tanggal,
            'users'   => $users,
            'cities'  => $cities
        ]);
    }

    public function generateRandomOtp()
    {
        return rand(1000, 9999);
    }

    public function hitungJumlahBuah(int $jumlah, int $bagi = 2): int
    {
        return $jumlah / $bagi;
    }

    public static function hitungJumlahMobil(int $jumlah, int $bagi = 2): int
    {
        return $jumlah / $bagi;
    }

    public function create()
    {
        return view('doni.create');
    }

    public function store(Request $request)
    {
        $city             = new City;
        $city->name       = $request->input('name');
        $city->created_at = date('Y-m-d H:i:s');
        $city->updated_at = now();
        $city->save();

        return redirect('doni'); #redirect berdasarkan path
        return redirect()->back(); #redirect ke halaman terakhir
    }
}
