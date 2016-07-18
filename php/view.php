<?php
	/*-----------------------------------------------
  	Project HIMS 
  	"Here's my story"
  	-----------------------------------------------
  	File: view.php                         [Reader]
  	-----------------------------------------------
  	Director:    elik      (Elisey Yakovlev)
  	Programmer:  SnipGhost (Mikhail Kucherenko)
  	-----------------------------------------------
  	(C) 2016, Freedom Bits Team
	------------------------------------------------*/
	if (isset($_GET['id'])) {
		//----------------------------------------------------------------------------------------------
		// Prepare ID                                                                                [0]
		//----------------------------------------------------------------------------------------------
		$id = preg_replace("/[^0-9]+/ui","",$_GET['id']);
		//----------------------------------------------------------------------------------------------
		// Extracting text from DataBase                                                             [1]
		//----------------------------------------------------------------------------------------------
		$db = ConnectDB();
		$res = $db->query($QUERY[1]."'".$id."'");
		$row = mysqli_fetch_array($res);
		$authtor = $db->query($QUERY[2]."'".$row['author-id']."'");
		$authtor = mysqli_fetch_array($authtor)['login'];
		//----------------------------------------------------------------------------------------------
		// Parsing text and formatting print                                                         [2]
		//----------------------------------------------------------------------------------------------
		$len = strlen($row['text']);
		if ($len > 0) {
			$txt = '<span id="part0" class="txtpart">"'.$row['title'].'"<br>By '.$authtor.'</span>';
			$x1 = 0; 
			$x2 = 0;
			$c = 0;
			$str = "";
			for ($i = 0; $i < $len; $i++) {
				if ($row['text'][$i] == "\n" || $row['text'][$i] == "#") {			
					$c++;
					$x1 = $x2;
					$x2 = $i;
					$str = mb_strcut($row['text'], $x1, $x2-$x1, "utf-8");
					$txt .= '<span id="part'.$c.'" class="txtpart">'.$str.'</span>';
				}
			}
		//----------------------------------------------------------------------------------------------
		// Output                                                                                    [3]
		//----------------------------------------------------------------------------------------------
			printf('<div id="clicker" class="mainbtn noselect" onClick="NextLine();">');
			printf('<div id="btntxt">%s</div></div>', $LOC['button-start']);
			print('<div id="text" class="maintxt">');
			print($txt);
			print('</div>');
		//----------------------------------------------------------------------------------------------
		} else {
			printf('<div id="text" class="maintxt">
						  %s ID = "%s" %s<br><br>
					    <form action="">
					      %s <input type="text" class="inp" name="id" value="" />
					      <input type="submit" value="%s" class="mainbtn boll noselect" />
					    </form>
					    </div>', $LOC['msg1-1'], $id, $LOC['msg1-2'], $LOC['msg2-1'], $LOC['msg3-1']);
		}
		//----------------------------------------------------------------------------------------------
	} else {
		printf('<div id="text" class="maintxt">
					  <form action="">
					    %s <input type="text" class="inp" name="id" value="" />
					    <input type="submit" value="%s" class="mainbtn boll noselect" />
					  </form>
					  </div>', $LOC['msg2-1'], $LOC['msg3-1']);
	}
	//------------------------------------------------------------------------------------------------
?>