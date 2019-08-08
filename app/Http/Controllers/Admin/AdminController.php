<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Auth;
use Flash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return void
     */

    public function index()
    {
        
        return view('admin.dashboard');
        
    }
}
