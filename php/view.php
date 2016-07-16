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
		$id = preg_replace("/[^0-9]+/ui","",$_GET['id']);
		$db = ConnectDB();
		$res = $db->query($QUERY[1]."'".$id."'");
		$row = mysqli_fetch_array($res);
		$authtor = $db->query($QUERY[2]."'".$row['author-id']."'");
		$authtor = mysqli_fetch_array($authtor)['login'];
		$len = mb_strlen($row['text'], "utf-8");
		if ($len > 0 || $id == 0) {
			$txt = '<span id="part0" class="txtpart">"'.$row['title'].'"<br>By '.$authtor.'</span>';
			$x1 = 0; 
			$x2 = 0;
			$c = 0;
			for ($i = 1; $i < $len; $i++) {
				if ($row['text'][$i] == "\n") {
					$c++;
					$x1 = $x2;
					$x2 = $i;
					$str = mb_substr($row['text'],$x1,$x2-$x1,"utf-8");
					$txt .= '<span id="part'.$c.'" class="txtpart">'.$str.'</span>';
				}
			}
			printf('<div id="clicker" class="mainbtn" onClick="NextLine();"><div id="btntxt">%s</div></div>', $LOC['button-start']);
			print('<div id="text" class="maintxt">');
			print($txt);
			print('</div>');
		} else {
			printf('<div id="text" class="maintxt">
						  %s ID = "%s" %s<br><br>
					    <form action="">
					      %s <input type="text" class="inp" name="id" value="" />
					      <input type="submit" value="%s" class="mainbtn boll" />
					    </form>
					    </div>', $LOC['msg1-1'], $id, $LOC['msg1-2'], $LOC['msg2-1'], $LOC['msg3-1']);
		}
	} else {
		printf('<div id="text" class="maintxt">
					  <form action="">
					    %s <input type="text" class="inp" name="id" value="" />
					    <input type="submit" value="%s" class="mainbtn boll" />
					  </form>
					  </div>', $LOC['msg2-1'], $LOC['msg3-1']);
	}
?>