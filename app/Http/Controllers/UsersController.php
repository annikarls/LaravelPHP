<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function index() {
        $userId = Auth::id();
        $users = User::all();
        $users = $users->find($userId);
        return view('users.index', compact('users'));
    }
}
