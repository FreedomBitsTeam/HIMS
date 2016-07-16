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
<?php require_once('php/packcage.php'); ?>
<!doctype html>
<?php echo '<html lang="'.$SYS['loc'].'">'; ?>
	<head>
		<title>Demo</title>
		<meta http-equiv="Content-Language" content="ru">
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta property="og:title" content="Here’s my story" />
		<!-- <meta property="og:description" content="" /> -->
  	<!-- <meta property="og:url" content="//alicization.tk/hims/" /> -->
  	<meta property="og:image" content="img/button.jpg" />
		<link href="css/style.css" media="all" rel="stylesheet" />
		<link href="css/dark.css" media="all" rel="stylesheet" />
		<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
		<script src="js/interface.js"></script>
	</head>
	<body>
		
		<div class="header">
			<div class="btn" style="margin-top: 30px;"></div><br>
			<a href="#" id="btn1" class="btn"><?php echo $LOC['stories']; ?></a>
			<hr>
			<a href="#" id="btn2" class="btn"><?php echo $LOC['create']; ?></a>
			<hr>
			<a href="#" id="btn3" class="btn"><?php echo $LOC['my-tst']; ?></a>
			<hr>
			<a href="#" id="btn4" class="btn"><?php echo $LOC['profile']; ?></a>
			<hr>
			<a href="#" id="btn5" class="btn"><?php echo $LOC['info']; ?></a>
		</div>
		
		<div class="wrapper">
			<input id="tend" type="hidden" value="<?php echo $LOC['button-end']; ?>">
			<input id="tstd" type="hidden" value="<?php echo $LOC['button-std']; ?>">
			<?php require_once('php/view.php'); ?>
		</div>
		
	</body>
</html>