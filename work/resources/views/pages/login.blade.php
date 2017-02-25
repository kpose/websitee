<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>EXCELPAYOUT</title>
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
                        <h1>LOGIN OPTION</h1>
                     
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
  <form action='{{route("signin")}}' method="post" autocomplete="off">
        <fieldset>
        <b>USERNAME:</b>
          <input class="btmspace-15" type="text" value="" placeholder="USERNAME" name="username"><br>
          <b>PASSWORD:</b>
          <input class="btmspace-15" type="password" value="" placeholder="PASSWORD" name="password"><br>
          <a href="{{route('signup')}}">New Account</a><br>
          <button type="submit" value="submit">LOGIN</button><br><br><br><br>
          <input type="hidden" value="{{Session::token()}}" name="_token" >
        </fieldset>
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



