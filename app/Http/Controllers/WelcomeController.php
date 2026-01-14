<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function show()
    {
        $data = [
            'name' => 'Raissha',
            'items' => ['Laravel', 'Blade', 'PHP', 'Routing'],
            'isLoggedIn' => true
        ];
        return view('welcome', $data);
    }
}
