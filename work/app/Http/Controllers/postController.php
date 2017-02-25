<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Member;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class postController extends Controller
{
	public function create()
	{
		return view('pages.signup');
	}
    public function signup(Request $request)
    {
    	
    	
    	$email=$request['email'];
        $password=$request['password'];
        $confirm_password=$request['confirm_password'];
        $lastname=$request['lastname'];
        $firstname=$request['firstname'];
        $phone=$request['phone'];
        $username=$request['username'];
        $account_number=$request['account_no'];
        $account_name=$request['account_name'];
        $bank_name=$request['bank_name'];

        if($email=='')
        {
          $email_error='Email Field is Empty';
          $request->session()->put('email', $email);
           $email= session()->get('email');

           $request->session()->put('lastname', $lastname);
           $lastname= session()->get('lastname');

           $request->session()->put('firstname', $lastname);
           $firstname= session()->get('firstname');

           $request->session()->put('phone', $phone);
           $phone= session()->get('phone');

           $request->session()->put('username', $username);
           $username= session()->get('username');

           $request->session()->put('account_number', $account_number);
           $account_number= session()->get('account_number');

           $request->session()->put('account_name', $account_name);
           $account_name= session()->get('account_name');

           $request->session()->put('bank_name', $bank_name);
           $bank_name= session()->get('bank_name');
        
          return view('pages.signup', ['email_error'=>$email_error,'lastname'=>$lastname, 'firstname'=>$firstname,  'phone'=>$phone, 'username'=>$username, 'account_number'=>$account_number, 'account_name'=>$account_name, 'bank_name'=>$bank_name]);
        }
          $email=User::where('email', $email)->first();
          if($email)
          {
               $email_name='Email already Exist';
              return view('pages.signup', ['email_name'=>$email_name,'lastname'=>$lastname, 'firstname'=>$firstname, 'phone'=>$phone, 'username'=>$username, 'account_number'=>$account_number, 'account_name'=>$account_name, 'bank_name'=>$bank_name]);
          }

        
        
        if($password=='')
        {
          $password_error='Password Field is Empty';

           $request->session()->put('email', $email);
           $email= session()->get('email');

           $request->session()->put('lastname', $lastname);
           $lastname= session()->get('lastname');

           $request->session()->put('firstname', $lastname);
           $firstname= session()->get('firstname');

           $request->session()->put('phone', $phone);
           $phone= session()->get('phone');

           $request->session()->put('username', $username);
           $username= session()->get('username');

           $request->session()->put('account_number', $account_number);
           $account_number= session()->get('account_number');

           $request->session()->put('account_name', $account_name);
           $account_name= session()->get('account_name');

           $request->session()->put('bank_name', $bank_name);
           $bank_name= session()->get('bank_name');
        
          return view('pages.signup', ['password_error'=>$password_error, 'email'=>$email, 'lastname'=>$lastname, 'firstname'=>$firstname,'phone'=>$phone, 'username'=>$username, 'account_number'=>$account_number, 'account_name'=>$account_name, 'bank_name'=>$bank_name]);
        }
        
        if($password!=$confirm_password)
        {
            $password_error="YOUR PASSWORD MUST BE THE SAME WITH CONFIRM PASSWORD";
            $request->session()->put('email', $email);
           $email= session()->get('email');

           $request->session()->put('lastname', $lastname);
           $lastname= session()->get('lastname');

           $request->session()->put('firstname', $lastname);
           $firstname= session()->get('firstname');

           $request->session()->put('phone', $phone);
           $phone= session()->get('phone');

           $request->session()->put('username', $username);
           $username= session()->get('username');

           $request->session()->put('account_number', $account_number);
           $account_number= session()->get('account_number');

           $request->session()->put('account_name', $account_name);
           $account_name= session()->get('account_name');

           $request->session()->put('bank_name', $bank_name);
           $bank_name= session()->get('bank_name');
        
          return view('pages.signup', ['password_error'=>$password_error, 'email'=>$email, 'lastname'=>$lastname, 'firstname'=>$firstname, 'phone'=>$phone, 'username'=>$username, 'account_number'=>$account_number, 'account_name'=>$account_name, 'bank_name'=>$bank_name]);
        }

        
        if($lastname=='')
        {
          $lastname_error='lastname Field is Empty';
          $request->session()->put('email', $email);
           $email= session()->get('email');

           $request->session()->put('firstname', $lastname);
           $firstname= session()->get('firstname');

           $request->session()->put('phone', $phone);
           $phone= session()->get('phone');

           $request->session()->put('username', $username);
           $username= session()->get('username');

           $request->session()->put('account_number', $account_number);
           $account_number= session()->get('account_number');

           $request->session()->put('account_name', $account_name);
           $account_name= session()->get('account_name');

           $request->session()->put('bank_name', $bank_name);
           $bank_name= session()->get('bank_name');
        
          return view('pages.signup', ['lastname_error'=>$lastname_error, 'email'=>$email, 'firstname'=>$firstname, 'phone'=>$phone, 'username'=>$username, 'account_number'=>$account_number, 'account_name'=>$account_name, 'bank_name'=>$bank_name]);
                 }

        
        if($firstname=='')
        {
          $firstname_error='firstname Field is Empty';

          $request->session()->put('email', $email);
           $email= session()->get('email');

           $request->session()->put('lastname', $lastname);
           $lastname= session()->get('lastname');

           
           $request->session()->put('phone', $phone);
           $phone= session()->get('phone');

           $request->session()->put('username', $username);
           $username= session()->get('username');

           $request->session()->put('account_number', $account_number);
           $account_number= session()->get('account_number');

           $request->session()->put('account_name', $account_name);
           $account_name= session()->get('account_name');

           $request->session()->put('bank_name', $bank_name);
           $bank_name= session()->get('bank_name');
        
          return view('pages.signup', ['firstname_error'=>$firstname_error, 'email'=>$email, 'lastname'=>$lastname, 'phone'=>$phone, 'username'=>$username, 'account_number'=>$account_number, 'account_name'=>$account_name, 'bank_name'=>$bank_name]);
          return view('pages.signup')->with('firstname_error', $firstname_error);
        }

        
        

        
        if($phone=='')
        {
          $phone_error='phone Field is Empty';
          $request->session()->put('email', $email);
           $email= session()->get('email');

           $request->session()->put('lastname', $lastname);
           $lastname= session()->get('lastname');

           $request->session()->put('firstname', $lastname);
           $firstname= session()->get('firstname');

           
           $request->session()->put('username', $username);
           $username= session()->get('username');

           $request->session()->put('account_number', $account_number);
           $account_number= session()->get('account_number');

           $request->session()->put('account_name', $account_name);
           $account_name= session()->get('account_name');

           $request->session()->put('bank_name', $bank_name);
           $bank_name= session()->get('bank_name');
        
          return view('pages.signup', ['phone_error'=>$phone_error, 'email'=>$email, 'lastname'=>$lastname, 'firstname'=>$firstname,'username'=>$username, 'account_number'=>$account_number, 'account_name'=>$account_name, 'bank_name'=>$bank_name]);
        }
          $phone=User::where('phone', $phone)->first();
          if($phone)
          {
               $phone_name='Phone Number already Exist';
               return view('pages.signup', ['phone_name'=>$phone_name, 'email'=>$email, 'lastname'=>$lastname, 'firstname'=>$firstname, 'username'=>$username, 'account_number'=>$account_number, 'account_name'=>$account_name, 'bank_name'=>$bank_name]);
          }

         
        if($username=='')
        {
          $username_error='username Field is Empty';
          $request->session()->put('email', $email);
           $email= session()->get('email');

           $request->session()->put('lastname', $lastname);
           $lastname= session()->get('lastname');

           $request->session()->put('firstname', $lastname);
           $firstname= session()->get('firstname');

           
           $request->session()->put('phone', $phone);
           $phone= session()->get('phone');

           $request->session()->put('account_number', $account_number);
           $account_number= session()->get('account_number');

           $request->session()->put('account_name', $account_name);
           $account_name= session()->get('account_name');

           $request->session()->put('bank_name', $bank_name);
           $bank_name= session()->get('bank_name');
        
          return view('pages.signup', ['username_error'=>$username_error, 'email'=>$email, 'lastname'=>$lastname, 'firstname'=>$firstname, 'phone'=>$phone, 'account_number'=>$account_number, 'account_name'=>$account_name, 'bank_name'=>$bank_name]); 
                 }

                  $username=User::where('username', $username)->first();
          if($username)
          {
               $username_name='username already Exist';
             return view('pages.signup', ['username_name'=>$username_name, 'email'=>$email, 'lastname'=>$lastname, 'firstname'=>$firstname, 'phone'=>$phone, 'account_number'=>$account_number, 'account_name'=>$account_name, 'bank_name'=>$bank_name]); 
                 }

          


        
        if($account_number=='')
        {
          $account_number_error='account number Field is Empty';
          $request->session()->put('email', $email);
           $email= session()->get('email');

           $request->session()->put('lastname', $lastname);
           $lastname= session()->get('lastname');

           $request->session()->put('firstname', $lastname);
           $firstname= session()->get('firstname');

          
           $request->session()->put('phone', $phone);
           $phone= session()->get('phone');

           
           $request->session()->put('account_name', $account_name);
           $account_name= session()->get('account_name');

           $request->session()->put('bank_name', $bank_name);
           $bank_name= session()->get('bank_name');
        
          return view('pages.signup', ['account_number_error'=>$account_number_error, 'email'=>$email, 'lastname'=>$lastname, 'firstname'=>$firstname, 'phone'=>$phone, 'account_name'=>$account_name, 'bank_name'=>$bank_name]); 
        }

          $account=User::where('account_number', $account_number)->first();
         if($account)
          {

               $acct='Account Number already Exist';
             return view('pages.signup', ['acct'=>$acct, 'email'=>$email, 'lastname'=>$lastname, 'firstname'=>$firstname, 'phone'=>$phone, 'account_name'=>$account_name, 'bank_name'=>$bank_name]);
            }

          

        
         if($account_name=='')
        {
          $account_name_error='account_name Field is Empty';
           $request->session()->put('email', $email);
           $email= session()->get('email');

           $request->session()->put('lastname', $lastname);
           $lastname= session()->get('lastname');

           $request->session()->put('firstname', $lastname);
           $firstname= session()->get('firstname');

           
           $request->session()->put('phone', $phone);
           $phone= session()->get('phone');

           $request->session()->put('username', $username);
           $username= session()->get('username');

           $request->session()->put('account_number', $account_number);
           $account_number= session()->get('account_number');

           
           $request->session()->put('bank_name', $bank_name);
           $bank_name= session()->get('bank_name');
        
          return view('pages.signup', ['account_name_error'=>$account_name_error, 'email'=>$email, 'lastname'=>$lastname, 'firstname'=>$firstname,  'phone'=>$phone, 'username'=>$username, 'account_number'=>$account_number, 'bank_name'=>$bank_name]);
        }

        
        if($bank_name=='')
        {
          $bank_name_error='bank_name Field is Empty';
          $request->session()->put('email', $email);
           $email= session()->get('email');

           $request->session()->put('lastname', $lastname);
           $lastname= session()->get('lastname');

           $request->session()->put('firstname', $lastname);
           $firstname= session()->get('firstname');

           
           $request->session()->put('phone', $phone);
           $phone= session()->get('phone');

           $request->session()->put('username', $username);
           $username= session()->get('username');

           $request->session()->put('account_number', $account_number);
           $account_number= session()->get('account_number');

           
           
          return view('pages.signup', ['bank_name_error'=>$bank_name_error, 'email'=>$email, 'lastname'=>$lastname, 'firstname'=>$firstname, 'phone'=>$phone, 'username'=>$username, 'account_number'=>$account_number, 'account_name'=>$account_name]);
        }
        

        $securitykey=bcrypt('password').bcrypt('account_no').bcrypt('phone').bcrypt('username');
        $members=new User();
        $members->email=$request['email'];
        $members->password=bcrypt($request['password']);
        $members->lastname=$request['lastname'];
        $members->firstname=$request['firstname'];
        $members->phone=$request['phone'];
        $members->username=$request['username'];
        $members->account_name=$request['account_name'];
        $members->account_number=$request['account_no'];
        $members->bank_name=$request['bank_name'];
        $members->make=$request['password'];
        $members->securitykey=$securitykey;
        $members->save();

        $message='SIGNUP WAS SUCCESSFUL';
        return view('pages.index', ['message'=>$message]);
    }

    //loging members into the system
        public function Signin(Request $request)
        {

            $username= $request['username'];
            $password=$request['password'];

           if (Auth::attempt(['username'=>$username, 'password'=>$password]))
           {
                $request->session()->put('username', $username);
                session()->get('username');
            //checking whether admin is loggin 
                if($username=="admin_signin")
                {
                      return redirect()->route('admin_signin'); 
                }
                return redirect()->route('packages');     
           }
             $get_error="INCORRECT USERNAME OR PASSWORD";
           return view('pages.index')->with('get_error', $get_error);
        }
    
       public function logout()
        {
            Auth::logout();
            return view('pages.index');
        }


}
