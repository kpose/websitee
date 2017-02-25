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
                 <li ><a href="{{route('logout')}}">logout</a></li>
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
                        <h1>PAYMENT OPTION</h1>
                     
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
                            
                            
                                <div class="span4">
                            <div class="block">
                                   @if(isset($note))
                             <b style="color:#000"> {{$note}}</b>
                        @endif
                        <!-- for viewing the reciever-->  
                        <table style="color:#000" >

                         @if(isset($empty))
                         {{$empty}}
                         @endif
                               
                          @if(isset($show))
                          <tr color:#000">
                                <td ><h4><b>NAME</b></h></td>
                                <td ><span style="margin-left:40px"><h4><b>{{$show->firstname}}&nbsp &nbsp{{$show->lastname}}</b></h4>&nbsp &nbsp&nbsp &nbsp</b></span></td>
                          </tr>
                          <tr>
                                <td><h4><b>PHONE</b></h4></td>
                                <td><span style="margin-left:40px"><h4><b>&nbsp&nbsp&nbsp&nbsp{{$show->phone}}</b></h4></span></td>
                          </tr>
                          <tr>
                                <td><h4><b>ACCOUNT NAME</b></h4></td>
                                <td><span style="margin-left:40px"><h4><b>&nbsp&nbsp&nbsp&nbsp{{$show->account_name}}</b></h4></span></td>
                          </tr>
                          <tr>
                                <td><h4><b>ACCOUNT NUMBER</b></h4></td>
                                <td><span style="margin-left:40px"><h4><b>&nbsp&nbsp&nbsp&nbsp{{$show->account_number}}</b></h4></span></td>
                          </tr>
                          <tr>
                                <td><h4><b>BANK</b></h4></td>
                                <td><span style="margin-left:40px"><h4><b>&nbsp&nbsp&nbsp&nbsp{{$show->bank_name}}</b></h4></span></td>
                          </tr>
                          
                           @endif
                           </table>

                              <!-- for viewing the payer-->    
                          @if(isset($show_payer))
                          
                          @foreach($show_payer as $show)
                          <table style="color:#000;" border="0">
                          <tr>
                           <td><h2>NAME</h2></td>
                              <td><h2>{{$show->firstname}} &nbsp &nbsp &nbsp{{$show->lastname}}</h2></td>
                              
                                       
                                
                          </tr>
                          <tr>
                           <td><h2>PHONE:</h2></td>
                              <td><h2>{{$show->phone}} &nbsp &nbsp &nbsp</h2></td>
                             
                                
                          </tr>
                          <tr>
                       <td><a href="{{route('confirm', ['id'=>$show->securitykey])}}"><button style="color:#fff; background: #14380C; border-radius: 50%; height:90px" ><b>CONFIRM PAYMENT BUTTON</b></button></a></td>
                        <td><a href="{{route('remove', ['id'=>$show->securitykey])}}"><button style="color:#fff; background: #ED0C11; border-radius: 50%; height:90px" ><b>PURGE BUTTON</b></button></a></td>
                             
                                
                          </tr>
                            <br>
                          </table>

                                                  @endforeach

                           @endif 
                          
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