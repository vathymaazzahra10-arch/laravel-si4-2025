<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class PraktikumController extends Controller
{
    public function index()
    {
        $data = [
            'links' => [
                ['name' => 'Home', 'url' => '/'],
                ['name' => 'Welcome', 'url' => '/welcome'],
                ['name' => 'Praktikum', 'url' => '/praktikum'],
            ],
            'users' => [
                ['id' => 1, 'name' => 'Raissha', 'email' => 'raissha@gmail.com'],
                ['id' => 2, 'name' => 'Putri', 'email' => 'asya@gmail.com'],
                ['id' => 3, 'name' => 'Geby', 'email' => 'geby@gmail.com'],
            ],
        ];
        return view('praktikum', $data);
    }

    public function mahasiswaIndex()
    {
        $data = Mahasiswa::all();
        return view('mahasiswa.index', compact('data'));
    }
}
