<!-----------------------------------------------
  Project HIMS 
  "Here's my story"
  -----------------------------------------------
  File: index.php                     [Prototype]
  -----------------------------------------------
  Director:    elik      (Elisey Yakovlev)
  Programmer:  SnipGhost (Mikhail Kucherenko)
  -----------------------------------------------
  (C) 2016, Freedom Bits Team
------------------------------------------------->
<!doctype html>
<html lang="ru">
	<head>
		<title>Demo</title>
		<meta http-equiv="Content-Language" content="ru">
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta property="og:title" content="Here’s my story" />
		<!-- <meta property="og:description" content="" /> -->
  	<!-- <meta property="og:url" content="//alicization.tk/hims/" /> -->
  	<meta property="og:image" content="img/button-start.jpg" />
		<link href="css/style.css" media="all" rel="stylesheet" type="text/css" />
		<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
		<script src="js/interface.js"></script>
	</head>
	<body>
		
		<div class="header">
			<div id="btn1" class="btn"><a href="#">Exit</a></div>
			<div id="btn2" class="btn"><a href="#">Info</a></div>
		</div>
		
		<div style="clear: both;"></div>
		
		<div class="wrapper">
			<div id="clicker" class="mainbtn" onClick="NextLine();"></div>
			<div id="text" class="maintxt">Here’s my story</div>
		</div>
		
	</body>
</html>