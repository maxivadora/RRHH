<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrganigramasController extends Controller
{
	public function index()
    {
    	return view('organigramas.index');
    }
}
