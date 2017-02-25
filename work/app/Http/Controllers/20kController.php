<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;

class 20kController extends Controller
{
    public function pay()
    {
    	return session()->get('username');
    }
}
