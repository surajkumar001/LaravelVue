<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class UserController extends Controller
{
    
    public function user() {
        $result = User::all();

       
        return inertia::render('User/List',['users' => $result]);
    }

    
    public function create() {
        return inertia::render('User/Create',['title' => 'this is About Page']);
    }

}
