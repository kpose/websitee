<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
       
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap-responsive.css">
        <link rel="stylesheet" href="css/custom-styles.css">
        <link rel="stylesheet" href="css/font-awesome.css">
        <link rel="stylesheet" href="css/component.css">
        <link rel="stylesheet" href="css/font-awesome-ie7.css">
        
        
        <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- This code is taken from http://twitter.github.com/bootstrap/examples/hero.html -->

        <!-- Site header starts here -->

            


             <!-- main content starts here -->

            <div class="container b-radius-top">
                <div class="top-bar b-radius">
                    
                </div>
                <div class="site-header">


                     <!-- Site Name starts here -->

                    <div class="site-name">
                        
                    </div>

                    <!-- Site Name ends -->

                     <!-- Menu starts here -->
                    <div class="menu">
                        <div class="navbar">
                            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                               <i class="fw-icon-th-list"></i>
                            </a>
                            <div class="nav-collapse collapse">
                                <ul class="nav">
                                    <li class="active"><a href="#home">Home</a></li>
                 <li ><a href="{{route('signin')}}">login</a></li>
                 <li ><a href="{{route('create')}}">Signup</a></li>
                                </ul>
                                
                            </div>
                        </div>
                    </div>

                    <!-- Menu ends -->
                </div>

                <!-- Banner starts here -->

                
                 <!-- Banner ends here -->


                 <!-- Main content starts here -->
                
                <div class="featured-blocks">
                    <div class="row-fluid">
                    <div class="featured-heading">
                        <h1>SIGNUP OPTION</h1>
                     
                    </div>
                    </div>
                    <div class="row-fluid">
                        
                            
                                <div class="span4">
                            <div class="block">
                                <div class="block-content">
                                    <p></p>
                                    
                                </div>
                            </div>
                        </div>
                            
                            
                                <div class="span6">
                            <div class="block">
                                  <div class="col-sm-6 col-sm-offset-3 col-xs-12">      
        <form action='{{route("signup")}}' method="post" autocomplete="off">
                <fieldset>
      <span class="btmspace-15">LAST NAME</span>
           <input type="text" class="btmspace-15" name="lastname" id="lastname" placeholder="Last Name" value='@if(isset($lastname)){{$lastname}}@endif'>
     @if(isset($lastname_error))
      <b style="color:red">{{$lastname_error}}</b>
      @endif<br><br>
     <span class="btmspace-15">FIRST NAME</span>
      <input type="text" class="btmspace-15" name="firstname" id="firstname" placeholder="First Name" value='@if(isset($firstname)){{$firstname}}@endif'>
    @if(isset($firstname_error))
      <b style="color:red">{{$firstname_error}}</b>
      @endif<br><br>
     <span class="btmspace-15">EMAIL</span>
      <input type="email" class="btmspace-15" name="email" id="email" placeholder="Email" value='@if(isset($email)){{$email}}@endif'>
    @if(isset($email_error))
      <b style="color:red">{{$email_error}}</b>
      @endif

      @if(isset($email_name))
      <b style="color:red">{{$email_name}}</b>
      @endif<br><br>
     <span class="btmspace-15">PHONE NO:</span>
      <input type="text" class="btmspace-15" name="phone" id="phone" placeholder="phone" value='@if(isset($phone)){{$phone}}@endif'>
    @if(isset($phone_error))
      <b style="color:red">{{$phone_error}}</b>
      @endif

      @if(isset($phone_name))
      <b style="color:red">{{$phone_name}}</b>
      @endif<br><br>
     <span class="btmspace-15">USERNAME</span>
      <input type="text" class="btmspace-15" name="username" id="username" placeholder="Username" value='@if(isset($username)){{$username}}@endif'>
    @if(isset($username_error))
      <b style="color:red">{{$username_error}}</b>
      @endif

      @if(isset($username_name))
      <b style="color:red">{{$username_name}}</b>
      @endif<br><br>
      
     <span class="btmspace-15">PASSWORD</span>
      <input type="password" class="btmspace-15" name="password" id="password" placeholder="Password">
     @if(isset($password_error))
      <b style="color:red">{{$password_error}}</b>
      @endif<br><br>
   <span class="btmspace-15">CONFIRM PASSWORD</span>
      <input type="password" class="btmspace-15" name="confirm_password" id="confirm_password" placeholder="Confirm Password" value='@if(isset($password_confirm_error)){{$password_confirm_error}}@endif'>
    {{$errors->has('password')?'Password is Required':''}}<br><br>
     <span class="btmspace-15">ACCOUNT NAME</span>
      <input type="text" class="btmspace-15" name="account_name" id="account_name" placeholder="Account Name" value='@if(isset($account_name)){{$account_name}}@endif'>
     @if(isset($account_name_error))
      <b style="color:red">{{$account_name_error}}</b>
      @endif<br><br>
     <span class="btmspace-15">ACCOUNT NUMBER</span>
      <input type="text" class="btmspace-15" name="account_no" id="account_no" placeholder="Account Number" value='@if(isset($account_number)){{$account_number}}@endif'>
     @if(isset($account_number_error))
      <b style="color:red">{{$account_number_error}}</b>
      @endif

      @if(isset($acct))
      <b style="color:red">{{$acct}}</b>
      @endif
      <br><br>
     <span class="btmspace-15">BANK NAME</span>
      <input type="text" class="btmspace-15" name="bank_name" id="bank_name" placeholder="Bank Name" value='@if(isset($bank_name)){{$bank_name}}@endif'>
     @if(isset($bank_name_error))
      <b style="color:red">{{$bank_name_error}}</b>
      @endif<br><br>
      <button type="submit" class="btn btn-default">Create</button>
    <input type="hidden" name="_token" value="{{Session::token()}}"> 
        <fieldset>
        </form>
                          
                            </div>
                        </div>
                            
                            
                              
                         
                    </div>
                </div>
              
                  
                 <div class="container bg-blue b-radius-bottom">
                
                <div class="copy-rights">
                    Copyright (c) excelpayout.com. All rights reserved.  Designed By softloft
                </div>

            </div>
       <script src="js/jquery-1.9.1.js"></script> 
<script src="js/bootstrap.js"></script>
<script src="js/masonry.pkgd.min.js"></script>
    <script src="js/imagesloaded.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/AnimOnScroll.js"></script>
    
    <script>
      new AnimOnScroll( document.getElementById( 'grid' ), {
        minDuration : 0.4,
        maxDuration : 0.7,
        viewportFactor : 0.2
      } );
    </script>
<script>
$('#myCarousel').carousel({
    interval: 1800
});
</script>
        



   </body>
</html>
