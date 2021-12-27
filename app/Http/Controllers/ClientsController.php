<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ClientsController extends Controller
{
    public function index()
    {
        $users = User::where('type', '=', 'client')->get();
        return view('clients', compact('users'));
    }
}
