<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index()
    {
        # code...
        return view('dashboard', [
            "title" => "Dashboard",
        ]);
    }
}