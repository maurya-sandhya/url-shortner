<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invitation;

class DashboardController extends Controller
{
    public function index()
    {
        $invitations = Invitation::all(); // Fetch all invitations
        return view('dashboard', compact('invitations'));
    }
    public function redirect()
    {
        $user = Auth::user();

        if ($user->isSuperAdmin()) {
            return redirect()->route('superadmin.dashboard');
        } elseif ($user->isClientAdmin()) {
            return redirect()->route('clientadmin.dashboard');
        } 

        return redirect('/login');
    }

    public function superAdminDashboard()
    {
        return view('superadmin.dashboard');
    }

    public function clientAdminDashboard()
    {
        return view('clientadmin.dashboard');
    }
}

