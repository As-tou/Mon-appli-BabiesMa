<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConController extends Controller
{
    public function showBB()
    {
        return view('bb');
    }

    public function showMoi()
    {
        return view('moi');
    }

    public function showPlus()
    {
        return view('plus');
    }

}
