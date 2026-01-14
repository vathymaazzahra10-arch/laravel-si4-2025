<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class MyController extends Controller
{
    // Metode untuk menampilkan halaman
    public function showPage()
    {
        $data = ['name' => 'Laravel User', 'role' => 'Admin'];
        return view('myview', $data);
    }

    // Metode untuk menangani pengiriman data formulir
    public function handleForm(Request $request)
    {
        $name = $request->input('name');
        return view('form-result', ['name' => $name]);
    }
}
