<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function user()
    {
        $user = User::all();
        return view('pages.user', compact('user'));
    }
}
