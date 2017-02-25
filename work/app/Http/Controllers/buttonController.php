<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Accountone;
use App\User;
use App\Http\Requests;
use \Carbon;

class buttonController extends Controller
{
  //confirming Accountone that have paid
    public function confirm(Request $request)
    {

      //return $username= session()->get('username');
      $getsecurity=$request->input('id');
      $find=Accountone::where('securitykey', $getsecurity)->first();
       $getAccountone=$find->username;
       $username=$find->payto;
       $select1=Accountone::where('username', $username)->where('pay1', $getAccountone)->first();
       if($select1)
       {
        $select1->status1='paid'; 
        $select1->update();   
       }

          $select2=Accountone::where('username', $username)->where('pay2', $getAccountone)->first();
       if($select2)
       {
        $select2->status2='paid'; 
        $select2->update();   
       }

          $select3=Accountone::where('username', $username)->where('pay3', $getAccountone)->first();
       if($select3)
       {
        $select3->status3='paid'; 
        $select3->update();   
       }

          $select4=Accountone::where('username', $username)->where('pay4', $getAccountone)->first();
       if($select4)
       {
        $select4->status4='paid'; 
        $select4->update();   
       }
       $find->payto='';
       $find->update();
       $final_payment=Accountone::where('username', $username)->where('status1', 'paid')->where('status2', 'paid')->where('status3', 'paid')->where('status4', 'paid')->first();
       if($final_payment)
       {
          $final_payment->delete();
          return view('pages.index');
       }
       //checking if the first person have but the second have not paid
       $first_payment=Accountone::where('username', $username)->where('status1', 'paid')->where('assign1', '')->first();
       if($first_payment)
       {
          return view('pages.empty');
       }
       //checking if the second person have but the second have not paid
       $second_payment=Accountone::where('username', $username)->where('assign2', '')->where('status2', 'paid')->first();
       if($second_payment)
       {
          return view('pages.empty');
       }
      $details=Accountone::where('payto', $username)->get();      
      $time=Carbon\Carbon::now()->addhours(1);
      return redirect()->route('show_payer');
        //return view('pages.transaction', ['show_payer'=>$details, 'time'=>$time]);
     
    }

    //removing Accountone that were not able to pay
    public function remove(Request $request)
    {
      $getsecurity=$request->input('id');
      $find=Accountone::where('securitykey', $getsecurity)->first();
      $find2=User::where('securitykey', $getsecurity)->first();
      if(!($find))
      {
        return redirect()->route('logout');
      }
       $username=$find->payto;
       $getAccountone=$find->username;

       $select1=Accountone::where('username', $username)->where('pay1', $getAccountone)->first();
       if($select1)
       {
        $check_confirm1=Accountone::where('pay1', $getAccountone)->where('confirm1', 'confirm_payment')->first();
        if($check_confirm1)
        {
          $details=Accountone::where('payto', $username)->get();
      
        return redirect()->route('show_payer');
        }
        $select1->assign1=''; 
        $select1->pay1='';
        $select1->update();   
       }

          $select2=Accountone::where('username', $username)->where('pay2', $getAccountone)->first();
       if($select2)
       {
        $check_confirm2=Accountone::where('pay2', $getAccountone)->where('confirm2', 'confirm_payment')->first();
        if($check_confirm2)
        {
          $details=Accountone::where('payto', $username)->get();
      return redirect()->route('show_payer');
        //return view('pages.transaction', ['show_payer'=>$details, 'check'=>$check_confirm2]);
        }
        $select2->assign2='';
        $select2->pay2='';  
        $select2->update();   
       }
        $select3=Accountone::where('username', $username)->where('pay3', $getAccountone)->first();
       if($select3)
       {
        $check_confirm3=Accountone::where('pay3', $getAccountone)->where('confirm3', 'confirm_payment')->first();
        if($check_confirm3)
        {
          $details=Accountone::where('payto', $username)->get();
       return redirect()->route('show_payer');
        //return view('pages.transaction', ['show_payer'=>$details, 'check'=>$check_confirm3]);
        }
        $select3->assign3='';
        $select3->pay3='';  
        $select3->update();   
       }
        
        $select4=Accountone::where('username', $username)->where('pay4', $getAccountone)->first();
       if($select4)
       {
        $check_confirm4=Accountone::where('pay4', $getAccountone)->where('confirm4', 'confirm_payment')->first();
        if($check_confirm4)
        {
          $details=Accountone::where('payto', $username)->get();
      return redirect()->route('show_payer');
        //return view('pages.transaction', ['show_payer'=>$details, 'check'=>$check_confirm4]);
        }
        $select4->assign4='';
        $select4->pay4='';  
        $select4->update();   
       }
       $find->delete();
       $find2->delete();
       $check1=Accountone::where('username', $username)->where('assign1', '')->where('assign2', '')->first();
      if($check1)
      {
        return view('pages.empty');
      }
      //checking if the first person have but the second have not paid
       $first_payment=Accountone::where('username', $username)->where('status1', 'paid')->where('assign2', '')->first();
       if($first_payment)
       {
          return view('pages.empty');
       }
       //checking if the second person have but the second have not paid
       $second_payment=Accountone::where('username', $username)->where('assign2', '')->where('status2', 'paid')->first();
       if($second_payment)
       {
          return view('pages.empty');
       }
      $details=Accountone::where('payto', $username)->get();
      $time=Carbon\Carbon::now()->addhours(1);
      return redirect()->route('show_payer');
        //return view('pages.transaction', ['show_payer'=>$details, 'time'=>$time]);
  

    }


    public function eject(Request $request)
    {
       //$username= session()->get('username');
      $getsecurity=$request->input('id');
      $find=Accountone::where('securitykey', $getsecurity)->first();
      $find2=User::where('securitykey', $getsecurity)->first();
      $getAccountone=$find->payto;
       $username=$find->username;
       $select1=Accountone::where('username', $getAccountone)->where('pay1', $username)->first();
       if($select1)
       {
        $select1->assign1=''; 
        $select1->pay1='';
        $select1->update();   
       }

          $select2=Accountone::where('username', $getAccountone)->where('pay2', $username)->first();
       if($select2)
       {
        $select2->assign2=''; 
        $select2->pay2='';
        $select2->update();   
       }

       $select3=Accountone::where('username', $getAccountone)->where('pay3', $username)->first();
       if($select3)
       {
        $select3->assign3=''; 
        $select3->pay3='';
        $select3->update();   
       }

       $select4=Accountone::where('username', $getAccountone)->where('pay4', $username)->first();
       if($select4)
       {
        $select4->assign4=''; 
        $select4->pay4='';
        $select4->update();   
       }
        $find->delete();
      
        return view('pages.index');

    }

    public function confirm_me(Request $request)
    {
       //$username= session()->get('username');
      $getsecurity=$request->input('id');
      $find=Accountone::where('securitykey', $getsecurity)->first();
      $find2=User::where('securitykey', $getsecurity)->first();
       $getAccountone=$find->payto;
       $username=$find->username;
       $select1=Accountone::where('username', $getAccountone)->where('pay1', $username)->first();
       if($select1)
       {
        $select1->confirm1='confirm_payment'; 
        $select1->update();   
       }

          $select2=Accountone::where('username', $getAccountone)->where('pay2', $username)->first();
       if($select2)
       {
        $select2->confirm2='confirm_payment';
        $select2->update();   
       }

       $select3=Accountone::where('username', $getAccountone)->where('pay3', $username)->first();
       if($select3)
       {
        $select3->confirm3='confirm_payment';
        $select3->update();   
       }

       $select4=Accountone::where('username', $getAccountone)->where('pay4', $username)->first();
       if($select4)
       {
        $select4->confirm4='confirm_payment';
        $select4->update();   
       }
        
      
        $details=Accountone::where('username', $username)->first();
      $reciever=$details->payto;
      $select=Accountone::where('username', $reciever)->first();
      
      
      
        return view('pages.transaction', ['show'=>$select, 'details'=>$details]);

    }
}
