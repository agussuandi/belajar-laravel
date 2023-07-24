<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class BelajarController extends Controller
{
    public function doni()
    {
        $tanggal = '2023-07-24';

        dd(User::select('*')->get());

        $users = User::select('id', 'name', 'email')->get();

        return view('doni.doni', [
            'tanggal' => $tanggal,
            'users'   => $users
        ]);
    }
}
