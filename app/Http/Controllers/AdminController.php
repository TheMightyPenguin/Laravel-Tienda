<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AdminController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth');
    }

    public function ingresar()
    {
    	return view('auth.login');
    }

    public function index()
    {
    	return view('admin.layout');
    }
}
