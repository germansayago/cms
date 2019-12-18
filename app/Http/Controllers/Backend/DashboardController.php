<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\User;

class DashboardController extends Controller
{
    public function index(User $user)
    {
        return view('dashboard', [
            'users' => $user->take(5)->get()
        ]);
    }
}
