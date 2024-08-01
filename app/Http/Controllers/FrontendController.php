<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class FrontendController extends Controller
{
    public function index()
    {
        return Inertia::render('Frontend/Home');
    }
    public function about() {
        return inertia::render('Frontend/about',['title' => 'this is About Page']);
    }
    public function user() {
        $result = User::all();
        return inertia::render('Frontend/User',['users' => $result]);
    }

    
}
