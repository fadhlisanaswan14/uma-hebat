<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetingsController extends Controller
{
    // Tugas 3: Metode welcome()
    public function welcome()
    {
        return "Selamat datang di aplikasi Laravel!";
    }

    // Tugas 3: Metode greet() dengan 2 parameter
    public function greet($name, $npm)
    {
        return "Halo, $name $npm !";
    }
}