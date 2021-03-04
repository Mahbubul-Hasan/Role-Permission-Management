<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(['permission:dashboard.index,admin'])->only('index');
    }

    public function index()
    {
        return view('backend.dashboard.dashboard');
    }
}
