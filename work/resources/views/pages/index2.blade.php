<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>HOME</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lobster">
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Lato:400,700'>
        <link rel="stylesheet" href="asset/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="asset/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="asset/css/style.css">

        
        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="asset/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="asset/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="asset/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="asset/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="asset/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>


       
        <!-- Header -->
        <div class="container">
            <div class="row header">
                <div class="col-sm-4 logo">
                    <h1><a href="index.html">CODEDCASH</a> <span>.</span></h1>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-inverse" style="background-color:#294C4D; width:100%">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{route('home')}}" id="link">Home</a></li>
        <li><a href="{{route('how_work')}}" id="link">How it Works</a></li>
        <li><a href="{{route('faq')}}" id="link"> FAQ</a></li>
        <li><a href="{{route('about')}}" id="link">About Us</a></li>
        
        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

        <!-- Coming Soon -->
        <div class="coming-soon">
            <div class="inner-bg">
                <div class="container">
                    <div class="row">

                     <div class="panel panel-default col-md-4" >
    <div class="panel-heading" role="tab" id="headingOne" style=" color:#fff">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="color:#fff">
          <b style="color:#000">LOGIN</b>
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      @if(isset($message))
          <b style="color:green">{{$message}}</b>
      @endif

      @if(isset($get_error))
         <b style="color:red"> {{$get_error}}</b>
      @endif
      <form action='{{route("signin")}}' method='post' style="margin:40px">
  <div class="form-group" >
    <label for="exampleInputEmail1">USERNAME</label>
    <input type="text" class="form-control" id="username" name="username" placeholder="Username" >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">PASSWORD</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
  </div>
  <div class="checkbox">
    <label>
      <b ><a href='{{route("create")}}' style="color:#000">Create New Account</a></b>
    </label>
  </div>
  <button type="submit" class="btn btn-default">Login</button>
  <input type="hidden" name="_token" value="{{Session::token()}}">
</form>
    </div>
  </div>



                        <div class="col-md-8" style="color:#000">
                            <p>Welcome to <b>CODEDCASH</b> where you make 400% of your donation. 

This platform is for serious earners, once you are matched to make your donation, you have just two hours or your profile is removed from <b>CODEDCASH</b> donation system by the admin.
You donate N10,000 and get N40,000 in few hours.

THERE ARE NO CYBER BEGGARS HERE. IT IS NOT ALLOWED.
THE ADMIN IS MONITORING ALL PROFILE 
</p>
                            
                        </div>
                        <div class="row">
                    <div class="timer">
                                <div class="days-wrapper" style="background:#05110A">
                                    <span class="days"></span> <br>days
                                </div>
                                <div class="hours-wrapper" style="background:#0D9145">
                                    <span class="hours"></span> <br>hours
                                </div>
                                <div class="minutes-wrapper" style="background:#9889F4">
                                    <span class="minutes"></span> <br>minutes
                                </div>
                                <div class="seconds-wrapper" style="background:#240803">
                                    <span class="seconds"></span> <br>seconds
                                </div>
                            </div>
                    </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- Content -->
       <!-- <div class="container">
                    <div class="row">
                <div class="col-sm-12 social">
                    <a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a>
                    <a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a>
                    <a href="#" data-toggle="tooltip" data-placement="top" title="Dribbble"><i class="fa fa-dribbble"></i></a>
                    <a href="#" data-toggle="tooltip" data-placement="top" title="Google Plus"><i class="fa fa-google-plus"></i></a>
                    <a href="#" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a>
                    <a href="#" data-toggle="tooltip" data-placement="top" title="Flickr"><i class="fa fa-flickr"></i></a>
                </div>
            </div>
        </div>-->

        
        <!-- Javascript -->
        <script src="asset/js/jquery-1.11.1.min.js"></script>
        <script src="asset/bootstrap/js/bootstrap.min.js"></script>
        <script src="asset/js/jquery.backstretch.min.js"></script>
        <script src="asset/js/jquery.countdown.min.js"></script>
        <script src="asset/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="asset/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>