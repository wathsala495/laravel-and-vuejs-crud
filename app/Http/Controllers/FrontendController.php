<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;

class FrontendController extends Controller
{
    //
    public function index(){
        return Inertia::render('Frontend/Home');
        // return Inertia::render('Welcome', [
        //     'canLogin' => Route::has('login'),
        //     'canRegister' => Route::has('register'),
        //     'laravelVersion' => Application::VERSION,
        //     'phpVersion' => PHP_VERSION,
        // ]);
    }
    public function about(){
        return Inertia::render('Frontend/About',[
            'title' => 'About Us page'
        ]);
    }
    public function contact(){
        return Inertia::render('Frontend/contact',[
            'title' => 'Contact Us page'
        ]);  
    }
    
}
