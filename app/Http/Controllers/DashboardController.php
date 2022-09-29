<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $datas = [
            'titlePage' => 'Dashboard'
        ];

        return view('Admin.pages.dashboard', $datas);
    }
}
