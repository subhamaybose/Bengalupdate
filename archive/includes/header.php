<?php include('config/config.php');
ob_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<title>Bengal Update | Online Leading Bengali News</title>
<link rel="shortcut icon" href="../images/favicon.png">

<link type="text/css" rel="stylesheet" href="css/default.css" media="all" />
<link type="text/css" rel="stylesheet" href="css/frames.css" media="all" />
<link type="text/css" rel="stylesheet" href="style.css" media="all" />
<!--<link type="text/css" rel="stylesheet" href="style24052017.css" media="all" />-->
<link type="text/css" rel="stylesheet" href="css/font-awesome.css" media="all" />
<link type="text/css" rel="stylesheet" href="css/camera.css" media="all" />
<link type="text/css" rel="stylesheet" href="css/fonts.css" media="all" />
<link type="text/css" rel="stylesheet" href="css/design.css" media="all" />
<link type="text/css" rel="stylesheet" href="css/navigation.css" media="all" />
<link type="text/css" rel="stylesheet" href="css/liquid-slider.css" media="all" />
<link type="text/css" rel="stylesheet" href="css/jquery.fancybox.css" media="all" />
<link type="text/css" rel="stylesheet" href="css/responsive.css" media="all" />

<link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,700' rel='stylesheet' type='text/css' />
<link href="https://fonts.googleapis.com/css?family=Hind+Siliguri" rel="stylesheet">

<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
<script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="js/jquery.slicknav.js"></script>
<script type="text/javascript" src="js/modernizr.custom.js"></script>
<script type="text/javascript" src="js/camera.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery-ui.min.js"></script>
<script src="js/bjqs-1.3.min.js"></script>
<script src="js/jquery.ticker.js"></script>
<script src="js/social.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/prefixfree.min.js"></script>
<!--script link for wether start-->
<script src="js/weather.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.simpleWeather/3.1.0/jquery.simpleWeather.min.js"></script>
<!--script link for wether end-->
<script type="text/javascript">
$(document).ready(function() {
	
	
	//Disable cut copy paste
    $('body').bind('cut copy paste', function (e) {
        e.preventDefault();
    });
   
    //Disable mouse right click
    $("body").on("contextmenu",function(e){
        return false;
    });
	
	
	jQuery('#camera_wrap_1').camera({
		height: '300px',
		loader: 'bar',
		pagination: false,
		thumbnails: false
	});
	jQuery('#camera_wrap_2').camera({
		height: '300px',
		loader: 'bar',
		pagination: false,
		thumbnails: false
	});
	$('#banner-fade').bjqs({
		height      : 170,
        width       : '100%',
        responsive  : true,
		auto: true,
 	});
	
	$('#banner-fade2').bjqs({
		height      : 413,
        width       : '100%',
        responsive  : true,
		auto: true,
 	});
	
	$('#banner-fade3').bjqs({
		height      : 413,
        width       : '100%',
        responsive  : true,
		auto: true,
 	});
	
	$('#banner-fadeR1').bjqs({
		height      : 413,
        width       : '100%',
        responsive  : true,
		auto: true,
 	});
	
	$('#banner-fadeR2').bjqs({
		height      : 413,
        width       : '100%',
        responsive  : true,
		auto: true,
 	});
	
	$.fn.ticker.defaults = {
		random:        false, // Whether to display ticker items in a random order
		itemSpeed:     3000,  // The pause on each ticker item before being replaced
		cursorSpeed:   50,    // Speed at which the characters are typed
		pauseOnHover:  true,  // Whether to pause when the mouse hovers over the ticker
		finishOnHover: true,  // Whether or not to complete the ticker item instantly when moused over
		cursorOne:     '_',   // The symbol for the first part of the cursor
		cursorTwo:     '-',   // The symbol for the second part of the cursor
		fade:          true,  // Whether to fade between ticker items or not
		fadeInSpeed:   600,   // Speed of the fade-in animation
		fadeOutSpeed:  300    // Speed of the fade-out animation
	};
	
	$(".toggle").on("click", function () {
		$(".container").toggleClass("microsoft");
	});
	
	$(document).ready(function(){
		$('.nav').slicknav();
	});
});
</script>

</head>