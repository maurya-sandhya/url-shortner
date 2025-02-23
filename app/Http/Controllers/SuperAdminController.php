<?php

namespace App\Http\Controllers;

use App\Mail\InvitationMail;
use App\Models\Invitation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SuperAdminController extends Controller
{
    public function index()
    {
        return view('superadmin.dashboard');
    }

    public function sendInvitation(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:invitations,email',
        ]);

        $token = uniqid();
        $invitation = Invitation::create([
            'email' => $request->email,
            'token' => $token,
            'role' => 'client_admin'
        ]);

        Mail::to($request->email)->send(new InvitationMail($invitation));

        return back()->with('success', 'Invitation sent successfully!');
    }
}

