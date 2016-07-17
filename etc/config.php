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
	
	$DB['host'] = 'mysql.hostinger.ru';      // host, default: localhost
	$DB['user'] = 'u690683553_elik';         // user, default: admin
	$DB['pswd'] = '214736';                  // password for user, default: qwerty
	$DB['dbnm'] = 'u690683553_hims';         // database name, default: hims
	
	//================================================================================================
	
	$SYS['loc'] = "en";                      // system localization file, default: en
	
	//================================================================================================
	
	$QUERY[1]   = "SELECT * FROM `tst` WHERE id = ";
	$QUERY[2]   = "SELECT `login` FROM `users` WHERE id = ";
	
	//================================================================================================
	
?>