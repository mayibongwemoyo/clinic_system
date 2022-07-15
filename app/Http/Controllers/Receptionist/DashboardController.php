<?php

namespace App\Http\Controllers\Receptionist;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
public function index()
{
    return view('receptionist.dashboard')
    ->with('users', User::all()->count());
}
}
