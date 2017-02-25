<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Transaction2</title>
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="asset/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME CSS -->
    <link href="asset/css/font-awesome.min.css" rel="stylesheet" />
    <!-- ANIMATE  CSS -->
    <link href="asset/css/animate.css" rel="stylesheet" />
    <!-- PRETTY PHOTO  CSS -->
    <link href="asset/css/prettyPhoto.css" rel="stylesheet" />
    <!--  STYLE SWITCHER CSS -->
    <link href="asset/css/styleSwitcher.css" rel="stylesheet" />
    <!-- CUSTOM STYLE CSS -->
    <link href="asset/css/style.css" rel="stylesheet" />
    <!--PINK STYLE VERSION IS BY DEFAULT, USE ANY ONE STYLESHEET FROM FOUR STYLESHEETS (pink,green,blue and brown) HERE-->
    <link href="asset/css/themes/pink.css" id="mainCSS" rel="stylesheet" />
    <!-- GOOGLE FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css' />

</head>
<body>
              @include('pages.includes.sub_header')
    <!-- /. END THEME SWITCHER-->

   
    <section id="skill-sec">
        <div class="overlay">
            <div class="container">
                <div class="row pad-top-bottom move-me">
                    
                    <div class="col-lg-11 col-md-11 col-sm-11 text-center wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".8s">
                        @if(isset($note))
                             <b style="color:#000"> {{$note}}</b>
                        @endif
                        <!-- for viewing the reciever-->  
                        <table style="color:#000">

                         @if(isset($empty))
                         {{$empty}}
                         @endif
                               
                          @if(isset($show))
                          <tr>
                                <td><h2 style="color:#fff">NAME:</h2></td>
                                <td ><span style="margin-left:0px"><h1>{{$show->firstname}} &nbsp &nbsp &nbsp{{$show->lastname}}</h1></span></td>
                          </tr>
                          <tr>
                                <td>PHONE:</td>
                                <td><span style="margin-left:0px">{{$show->phone}}</span></td>
                          </tr>
                          <tr>
                                <td>ACCOUNT NAME:</td>
                                <td><span style="margin-left:0px">{{$show->account_name}}</span></td>
                          </tr>
                          <tr>
                                <td>ACCOUNT NUMBER:</td>
                                <td><span style="margin-left:0px">{{$show->account_number}}</span></td>
                          </tr>
                          <tr>
                                <td>BANK:</td>
                                <td><span style="margin-left:0px">{{$show->bank_name}}</span></td>
                          </tr>
                          
                         <tr>
                            <td><br><br><br><br>
                             @if(isset($details))
                             <b>Click the button, if you dont want to pay.<br>
                              <a href="{{route('eject2', ['id'=>$details->securitykey])}}"><button>REJECT</button></a>
                              </b>
                              @endif
                             </td>
                          </tr>
                           @endif
                           </table>

                           


                              <!-- for viewing the payer-->    
                          @if(isset($show_payer))
                          @foreach($show_payer as $show)
                          <table style="color:#000">
                          <tr>
                                <td><h1 style="color:#fff">NAME:</td>
                                <td ><span style="margin-left:30px; color:#fff"><h1>{{$show->firstname}} &nbsp &nbsp &nbsp{{$show->lastname}}</h1></span></td>
                                <td><span style="margin-left:30px; color:#fff"><h4><a href="{{route('confirm2', ['id'=>$show->securitykey])}}"><button> CONFIRM PAYMENT</button></a></h4></span></td>
                                <td><span style="margin-left:30px; color:#fff"><h4><a href="{{route('remove2', ['id'=>$show->securitykey])}}"><button> REMOVE</button></a></h4></span></td>
                          </tr>
                          <tr>
                                <td><h1 style="color:#fff">PHONE:</h1></td>
                                <td><span style="margin-left:30px"><h2 style="color:#fff">{{$show->phone}}</h2></span></td>
                                
                          </tr>
                          <tr>
                          <td>
                            &nbsp
                          </td>
                            
                          </tr>
                          </table>
                          @endforeach

                           @endif
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- SKILL SECTION END-->
    <!-- HIRE SECTION END-->
    <div class="move-me">
        <a href="#home-sec" class="scrollup"><i class="fa fa-chevron-up"></i></a>
    </div>
    <!-- SCROLL TO TOP SECTION END-->
    <!--  JQUERY CORE SCRIPTS -->
    <script src="asset/js/jquery-1.10.2.js"></script>
    <!--  BOOTSTRAP SCRIPTS -->
    <script src="asset/js/bootstrap.js"></script>
    <!--  SCROLL SCRIPTS -->
    <script src="asset/js/jquery.easing.min.js"></script>
    <!--  WOW ANIMATION SCRIPTS -->
    <script src="asset/js/wow.min.js"></script>
    <!-- EASY PIE CHART SCRIPTS -->
    <script src="asset/js/jquery.easypiechart.min.js"></script>
    <!-- PRETTY PHOTO SCRIPTS -->
    <script src="asset/js/jquery.prettyPhoto.js"></script>
    <!--  STYLE SWITCHER SCRIPTS -->
    <script src="asset/js/styleSwitcher.js"></script>
    <!--  CUSTOM SCRIPTS -->
    <script src="asset/js/custom.js"></script>
    
</body>
</html>