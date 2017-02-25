<!DOCTYPE html>
<html lang="en">
<head>
<title>
  @yield('title')
</title>
<link rel="icon" href="{{asset('images/gcm_ico.ico') }}"/>
<meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
 	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" />  	  		
 	<!-- boostrap -->

	<link rel="stylesheet" href="assets/animate.css">
	<link rel="stylesheet" href="assets/script.css">
   <script src="assets/scripts/script.js" type="text/javascript"></script>

   <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/58892e19ac3ff41d99892486/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

</head>
<body>
<div class="row" style="width:100%; ;">
    @yield('content')	
</div>

  <script src="http://code.jquery.com/jquery-1.7.1.min.js" type="text/javascript" ></script>
  <!-- boostrap -->
  <script src="assets/bootstrap/js/bootstrap.js" type="text/javascript" ></script>
  <script src="assets/scripts/plugins.js" type="text/javascript"></script>
  <script src="assets/scripts/script.js" type="text/javascript"></script>
 

</body>
</html>

