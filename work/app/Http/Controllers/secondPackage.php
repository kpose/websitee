<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Accounttwo;
use App\Http\Requests;

class secondPackage extends Controller
{
   public function pay2()
    {
       $username= session()->get('username');
       //checking if the user already have ongoing transaction
       $transact=Accounttwo::where('username', $username)->first();
       if($transact)
       {
          return redirect()->route('check_transact2');
       }

       $transact=Accounttwo::where('username', $username)->where('payto', '')->first();
       if($transact)
       {
          return redirect()->route('show_payer2');
       }


       $account=new Accounttwo();
       
       $select=User::where('username', $username)->first();
        
       $lastname=$select->lastname;
       $firstname=$select->firstname;
       $account_number=$select->account_number;
       $account_name=$select->account_name;
       $bank_name=$select->bank_name;
       $username=$select->username;
       $phone=$select->phone;
       $securitykey=$select->securitykey;
       

       $account->lastname=$lastname;
       $account->firstname=$firstname;
       $account->account_number=$account_number;
       $account->account_name=$account_name;
       $account->bank_name=$bank_name;
       $account->phone=$phone;
       $account->username=$username;
       $account->securitykey=$securitykey;
       $account->payto="";
       $account->pay1="";
       $account->status1="";
       $account->pay2="";
       $account->status2="";
       $account->assign1="";
       $account->assign2="";


    	$find1=Accounttwo::where('assign1', 'assigned')->where('assign2', 'assigned')->where('assign3', 'assigned')->where('assign4', '')->where('payto', '')->first();
    	if($find1)
    	{
    	 $user=$find1->username;
    	
    	  if(($user!=$username)AND ($find1))
    	 {
    	   $account->save();
    	   $find1->assign4='assigned';
    	   $find1->pay4=$username;	
    	   
    	   $addpayer=Accounttwo::where('username', $username)->first();
    	   $addpayer->payto=$user;
    	   $find1->update();
    	   $addpayer->update();

    	   
    	   return redirect()->route('show_reciever2');
    	 }
       }
       
    	$find2=Accounttwo::where('assign1', 'assigned')->where('assign2', 'assigned')->where('assign3', '')->where('assign4', '')->where('payto', '')->first();
    	if($find2)
       {
       	$user=$find2->username;
    	if(($user!=$username)AND ($find2))
    	{
    	   $account->save();
    	   $find2->assign3='assigned';
    	   $find2->pay3=$username;	
    	   
    	   $addpayer=Accounttwo::where('username', $username)->first();
    	   $addpayer->payto=$find2->username;
    	   $find2->update();
    	   $addpayer->update();

    	   return redirect()->route('show_reciever2');
    	 }
        }

    	$find3=Accounttwo::where('assign1', 'assigned')->where('assign2', '')->where('assign3', '')->where('assign4', '')->where('payto', '')->first();
    	if($find3)
    	{
    		$user=$find3->username;
    	  if(($user!=$username)AND ($find3))
    	  {
    		$account->save();
    	   $find3->assign2='assigned';
    	   $find3->pay2=$username;
    	   	
           $addpayer=Accounttwo::where('username', $username)->first();
    	   $addpayer->payto=$find3->username;
    	   $find3->update();
    	   $addpayer->update();

    	   $account->save();
    	   return redirect()->route('show_reciever2');
    	 }
    	}

        $find4=Accounttwo::where('assign4', '')->where('assign2', '')->where('assign3', '')->where('assign4', '')->where('payto', '')->first();
        if($find4)
       {
       	$user=$find4->username;
    	if(($user!=$username)AND ($find4))
    	{
    		$account->save();
    	   $find4->assign1='assigned';
    	   $find4->pay1=$username;	
           
           $addpayer=Accounttwo::where('username', $username)->first();
    	   $addpayer->payto=$find4->username;
    	   $find4->update();
    	   $addpayer->update();

    	   return redirect()->route('show_reciever2');
    	}
    }
    	return view('pages.waiting_ph');

    	
    }

    

    //show the details of who to pay
    public function show_reciever2()
    {
    	$username= session()->get('username');
    	$details=Accounttwo::where('username', $username)->first();
    	$reciever=$details->payto;
    	$select=Accounttwo::where('username', $reciever)->first();
    	

        if(!($select))
    	{
    		$note="you will assign someone to you shortly";
    		return view('pages.transaction', ['show_payer'=>$details, 'note'=>$note]);
    	}

        return view('pages.transaction2', ['show'=>$select, 'details'=>$details]);
    }
    

    //show the details of who to pay
    public function show_payer2()
    {
    	$username= session()->get('username');
    	$details=Accounttwo::where('payto', $username)->get();
    	if(!($details))
    	{
    		$note="you will assign someone to you shortly";
    		return view('pages.transaction2', ['show_payer'=>$details, 'note'=>$note]);
    	}
    	
        return view('pages.transaction2', ['show_payer'=>$details]);
    }

    //checking whether the user is paying or recieving
    public function check_transact2()
    {
    	$username= session()->get('username');
    	$check=Accounttwo::where('username', $username)->where('payto', '')->first();
        if($check)
        {
        	return redirect()->route('show_payer2');
        }
        return redirect()->route('show_reciever2');
    }

}
