<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Accountone;
use App\Http\Requests;
use \Carbon;

class firstPackage extends Controller
{
   public function pay()
    {
       
       $username= session()->get('username');
       if($username==null)
       {
         return view('pages.index');
       }
       //checking if the user already have ongoing transaction
       $transact=Accountone::where('username', $username)->first();
       if($transact)
       {
          return redirect()->route('check_transact');
       }

       $transact=Accountone::where('username', $username)->where('payto', '')->first();
       if($transact)
       {
          return redirect()->route('show_payer');
       }


       $account=new Accountone();
       
       $select=User::where('username', $username)->first();
        
       $lastname=$select->lastname;
       $firstname=$select->firstname;
       $account_number=$select->account_number;
       $account_name=$select->account_name;
       $bank_name=$select->bank_name;
       $username=$select->username;
       $phone=$select->phone;
       $securitykey=$select->securitykey;
       $due=Carbon\Carbon::now()->addminutes(30);
       $order_date=Carbon\Carbon::now();
       

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
       $account->order_date=$due;
       $account->due_date=$order_date;


       
      $find10=Accountone::where('assign1', '')->where('assign2', 'assigned')->where('assign3', 'assigned')->where('assign4', 'assigned')->where('payto', '')->first();
      if($find10)
      {
       $user=$find10->username;
      
        if(($user!=$username)AND ($find10))
       {
         $account->save();
         $find10->assign1='assigned';
         $find10->pay1=$username;  
         
         $addpayer=Accountone::where('username', $username)->first();
         $addpayer->payto=$user;
         $find10->update();
         $addpayer->update();

         
         return redirect()->route('show_reciever');
       }
       }

       $find102=Accountone::where('assign1', '')->where('assign2', '')->where('assign3', 'assigned')->where('assign4', 'assigned')->where('payto', '')->first();
      if($find102)
      {
       $user=$find102->username;
      
        if(($user!=$username)AND ($find102))
       {
         $account->save();
         $find102->assign1='assigned';
         $find102->pay1=$username;  
         
         $addpayer=Accountone::where('username', $username)->first();
         $addpayer->payto=$user;
         $find102->update();
         $addpayer->update();

         
         return redirect()->route('show_reciever');
       }
       }


      $find11=Accountone::where('assign1', '')->where('assign2', 'assigned')->where('assign3', 'assigned')->where('assign4', '')->where('payto', '')->first();
      if($find11)
      {
       $user=$find11->username;
      
        if(($user!=$username)AND ($find11))
       {
         $account->save();
         $find11->assign1='assigned';
         $find11->pay1=$username;  
         
         $addpayer=Accountone::where('username', $username)->first();
         $addpayer->payto=$user;
         $find11->update();
         $addpayer->update();

         
         return redirect()->route('show_reciever');
       }
       }

           $find12=Accountone::where('assign1', '')->where('assign2', 'assigned')->where('assign3', '')->where('assign4', '')->where('payto', '')->first();
      if($find12)
      {
       $user=$find12->username;
      
        if(($user!=$username)AND ($find12))
       {
         $account->save();
         $find12->assign1='assigned';
         $find12->pay1=$username;  
         
         $addpayer=Accountone::where('username', $username)->first();
         $addpayer->payto=$user;
         $find12->update();
         $addpayer->update();

         
         return redirect()->route('show_reciever');
       }
      }

          $find13=Accountone::where('assign1', '')->where('assign2', '')->where('assign3', 'assigned')->where('assign4', '')->where('payto', '')->first();
      if($find13)
      {
       $user=$find13->username;
      
        if(($user!=$username)AND ($find13))
       {
         $account->save();
         $find13->assign1='assigned';
         $find13->pay1=$username;  
         
         $addpayer=Accountone::where('username', $username)->first();
         $addpayer->payto=$user;
         $find13->update();
         $addpayer->update();

         
         return redirect()->route('show_reciever');
       }
       }


     //permutation for 2s
            $find20=Accountone::where('assign2', 'assigned')->where('assign2', '')->where('assign3', 'assigned')->where('assign4', 'assigned')->where('payto', '')->first();
      if($find20)
      {
       $user=$find20->username;
      
        if(($user!=$username)AND ($find20))
       {
         $account->save();
         $find20->assign2='assigned';
         $find20->pay2=$username;  
         
         $addpayer=Accountone::where('username', $username)->first();
         $addpayer->payto=$user;
         $find20->update();
         $addpayer->update();

         
         return redirect()->route('show_reciever');
       }
       }


      $find21=Accountone::where('assign2', 'assigned')->where('assign2', '')->where('assign3', 'assigned')->where('assign4', '')->where('payto', '')->first();
      if($find21)
      {
       $user=$find21->username;
      
        if(($user!=$username)AND ($find21))
       {
         $account->save();
         $find21->assign2='assigned';
         $find21->pay2=$username;  
         
         $addpayer=Accountone::where('username', $username)->first();
         $addpayer->payto=$user;
         $find21->update();
         $addpayer->update();

         
         return redirect()->route('show_reciever');
       }
       }


          $find23=Accountone::where('assign2', 'assigned')->where('assign2', '')->where('assign3', '')->where('assign4', 'assigned')->where('payto', '')->first();
      if($find23)
      {
       $user=$find23->username;
      
        if(($user!=$username)AND ($find23))
       {
         $account->save();
         $find23->assign2='assigned';
         $find23->pay2=$username;  
         
         $addpayer=Accountone::where('username', $username)->first();
         $addpayer->payto=$user;
         $find23->update();
         $addpayer->update();

         
         return redirect()->route('show_reciever');
       }
       }



   
          $find33=Accountone::where('assign2', 'assigned')->where('assign2', 'assigned')->where('assign3', '')->where('assign4', 'assigned')->where('payto', '')->first();
      if($find33)
      {
       $user=$find33->username;
      
        if(($user!=$username)AND ($find33))
       {
         $account->save();
         $find33->assign3='assigned';
         $find33->pay3=$username;  
         
         $addpayer=Accountone::where('username', $username)->first();
         $addpayer->payto=$user;
         $find33->update();
         $addpayer->update();

         
         return redirect()->route('show_reciever');
       }
       }


    	$find1=Accountone::where('assign1', 'assigned')->where('assign2', 'assigned')->where('assign3', 'assigned')->where('assign4', '')->where('payto', '')->first();
    	if($find1)
    	{
    	 $user=$find1->username;
    	
    	  if(($user!=$username)AND ($find1))
    	 {
    	   $account->save();
    	   $find1->assign4='assigned';
    	   $find1->pay4=$username;	
    	   
    	   $addpayer=Accountone::where('username', $username)->first();
    	   $addpayer->payto=$user;
    	   $find1->update();
    	   $addpayer->update();

    	   
    	   return redirect()->route('show_reciever');
    	 }
       }
       
       
    	$find2=Accountone::where('assign1', 'assigned')->where('assign2', 'assigned')->where('assign3', '')->where('assign4', '')->where('payto', '')->first();
    	if($find2)
       {
       	$user=$find2->username;
    	if(($user!=$username)AND ($find2))
    	{
    	   $account->save();
    	   $find2->assign3='assigned';
    	   $find2->pay3=$username;	
    	   
    	   $addpayer=Accountone::where('username', $username)->first();
    	   $addpayer->payto=$find2->username;
    	   $find2->update();
    	   $addpayer->update();

    	   return redirect()->route('show_reciever');
    	 }
        }

    	$find3=Accountone::where('assign1', 'assigned')->where('assign2', '')->where('assign3', '')->where('assign4', '')->where('payto', '')->first();
    	if($find3)
    	{
    		$user=$find3->username;
    	  if(($user!=$username)AND ($find3))
    	  {
    		$account->save();
    	   $find3->assign2='assigned';
    	   $find3->pay2=$username;
    	   	
           $addpayer=Accountone::where('username', $username)->first();
    	   $addpayer->payto=$find3->username;
    	   $find3->update();
    	   $addpayer->update();

    	   $account->save();
    	   return redirect()->route('show_reciever');
    	 }
    	}

        $find4=Accountone::where('assign4', '')->where('assign2', '')->where('assign3', '')->where('assign4', '')->where('payto', '')->first();
        if($find4)
       {
       	$user=$find4->username;
    	if(($user!=$username)AND ($find4))
    	{
    		$account->save();
    	   $find4->assign1='assigned';
    	   $find4->pay1=$username;	
           
           $addpayer=Accountone::where('username', $username)->first();
    	   $addpayer->payto=$find4->username;
    	   $find4->update();
    	   $addpayer->update();

    	   return redirect()->route('show_reciever');
    	}
    }
 //second permutation

    
         

    	return view('pages.empty');

    	
    }

    

    //show the details of who to pay
    public function show_reciever()
    {
      $username= session()->get('username');
      if($username==null)
      {
        return redirect()->route('logout');
      }
    	$details=Accountone::where('username', $username)->first();
    	$reciever=$details->payto;
    	$select=Accountone::where('username', $reciever)->first();
    	

        if(!($select))
    	{
    		$note="PLEASE, BE PATIANT. YOU WILL BE MATCHED SHORTLY";
    		return view('pages.transaction', ['show_payer'=>$details, 'note'=>$note]);
    	}

        return view('pages.transaction', ['show'=>$select, 'details'=>$details]);
    }
    

    //show the details of who to pay
    public function show_payer()
    {
    	$username= session()->get('username');
      if($username==null)
      {
        return redirect()->route('logout');
      }
    	$details=Accountone::where('payto', $username)->get();

      $details1=Accountone::where('payto', $username)->first();
      if(!$details1)
       {
        $note="you will be assign to you shortly";
        return view('pages.transaction', ['show_payer'=>$details, 'note'=>$note]);
      }

    	if(!($details))
    	{
    		$note="PLEASE, BE PATIANT. YOU WILL BE MATCHED SHORTLY";
    		return view('pages.transaction', ['show_payer'=>$details, 'note'=>$note]);
    	}
    	  $due=Carbon\Carbon::now()->addhours(1);
        return view('pages.transaction', ['show_payer'=>$details, 'time'=>$due]);
    }

    //checking whether the user is paying or recieving
    public function check_transact()
    {
    	$username= session()->get('username');
    	$check=Accountone::where('username', $username)->where('payto', '')->first();
        if($check)
        {
        	return redirect()->route('show_payer');
        }
        return redirect()->route('show_reciever');
    }

}
