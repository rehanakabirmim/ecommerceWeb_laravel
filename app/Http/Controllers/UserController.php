<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function manage(){
        $users= User::all();
        return view('backend.manageUser', compact('users'));

    }
}
