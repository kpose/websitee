<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Accountone;
use App\Accounttwo;
use App\Http\Requests;

class userController extends Controller
{
   public function home()
   {
   	 return view('pages.index');
   }

   public function packages()
   {
   	   $username= session()->get('username');
       
       //checking if the user already have ongoing transaction
       $transact=Accountone::where('username', $username)->first();
       $transact2=Accounttwo::where('username', $username)->first();
       if($transact)
       {
          return redirect()->route('check_transact');
       }
       if($transact2)
       {
          return redirect()->route('check_transact2');
       }
       return redirect()->route('10package');
        
        //return view('pages.choose_package');
   }

   public function packages2()
   {
   	 $username= session()->get('username');
       //checking if the user already have ongoing transaction
       $transact=Accounttwo::where('username', $username)->first();
       if($transact)
       {
          return redirect()->route('check_transact2');
       }
   	  return view('pages.choose_package');
   }

   public function faq()
    {
        return view('pages.frequentasked');
    }

    public function how_work()
    {
        return view('pages.how_work');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function signin()
    {
        return view('pages.login');
    }
}
