<?php



	session_start();
	if(empty($_SESSION['username']))
		$uname="";
	else		
		$uname=$_SESSION['username'];
?>
<html style="position: relative;min-height: 100%;">
	<head>
		<title>Reader's Choice</title>
		<link rel="stylesheet" type="text/css" href="home.css"/>
		<script type="text/javascript" src="jquery.min.js"></script>
		<!-- Marquee -->
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<script type="text/javascript" src="jquery.totemticker.js"></script>
		<script type="text/javascript">
			$(function(){
				$('#vertical-ticker').totemticker({
					row_height	:	'100px',
					next		:	'#ticker-next',
					previous	:	'#ticker-previous',
					stop		:	'#stop',
					start		:	'#start',
					mousestop	:	true,
				});
			});
		</script>
		<!-- Head Section -->
		<link rel="stylesheet" type="text/css" href="header.css">
		<link rel="stylesheet" type="text/css" href="style.css"/>
		<link rel="stylesheet" type="text/css" href="home.css"/>
		<script type="text/javascript" src="jquery-1.10.2.js"></script>
		<script type="text/javascript" src="lib/jquery.mousewheel-3.0.6.pack.js"></script>
		<script type="text/javascript" src="source/jquery.fancybox.js?v=2.1.5"></script>
		<link rel="stylesheet" type="text/css" href="source/jquery.fancybox.css?v=2.1.5" media="screen" />
	</head>
	<body>
		<div>
			<!-- Header -->
			<?php
				if(empty($uname))
					include("heading.php");
				else
					include("headlogin.php");
			?>
		</div>
		<div style="margin-left:8%;margin-right:8%;">
			<!-- Menu Bar -->
			<?php
				if(empty($uname))
					include("tabmenu.php");
				else
					include("tabmenulogin.php");
			?>
		</div>
		<div style="margin-bottom:50px;margin-top:10px;">
			<!-- Body Content -->
			<div style="margin-bottom:270px;width:auto;background-color:rgb(255,255,255); margin-left:8%;margin-right:8%;box-shadow: 0px 0px 5px 5px rgb(182,182,180);">
				<?php include("Slider.php"); ?>
			</div>
		</div>
		<div id="pageFooter">
			<?php include("pagefooter.php"); ?>
		</div>
	</body>
</html>
