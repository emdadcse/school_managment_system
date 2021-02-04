<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userView()
    {
        $userAll = User::all();
        return view('backend.user.user_view', compact('userAll'));
    }
    public function userAdd()
    {
        return view('backend.user.user_add');
    }
}
