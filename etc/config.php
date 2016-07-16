<?php
	/*-----------------------------------------------
  	Project HIMS 
  	"Here's my story"
  	-----------------------------------------------
  	File: config.php                [Configuration]
  	-----------------------------------------------
  	Director:    elik      (Elisey Yakovlev)
  	Programmer:  SnipGhost (Mikhail Kucherenko)
  	-----------------------------------------------
  	(C) 2016, Freedom Bits Team
	------------------------------------------------*/
	
	//================================================================================================
	
	$DB['host'] = 'localhost';     // host, default: localhost
	$DB['user'] = 'admin';         // user, default: admin
	$DB['pswd'] = 'qwerty';        // password for user, default: qwerty
	$DB['dbnm'] = 'hims';   			 // database name, default: hims
	
	//================================================================================================
	
	$SYS['loc'] = "en";						 // system localization file, default: en
	
	//================================================================================================
	
	$QUERY[1]   = "SELECT * FROM `tst` WHERE id = ";
	$QUERY[2]   = "SELECT `login` FROM `users` WHERE id = ";
	
	//================================================================================================
	
?>