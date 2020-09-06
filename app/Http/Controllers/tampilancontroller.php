<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tampilancontroller extends Controller
{
    public function tampilan()

    {
        return view('tampilanlogin');
    }
}
