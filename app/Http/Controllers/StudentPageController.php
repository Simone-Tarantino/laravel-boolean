<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentPageController extends Controller
{
    public function Index()
    {
        return view('students');
    }
}
