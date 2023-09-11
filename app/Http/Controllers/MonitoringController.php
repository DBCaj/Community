<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class MonitoringController extends Controller
{
    public function monitoring()
    {
        $users = User::all();

        return view('pages.user-management.monitoring.index', compact('users'));
    }
}
