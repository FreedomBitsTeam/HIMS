/*-----------------------------------------------
  Project HIMS 
  "Here's my story"
  -----------------------------------------------
  File: interface.js               [EventHandler]
  -----------------------------------------------
  Director:    elik      (Elisey Yakovlev)
  Programmer:  SnipGhost (Mikhail Kucherenko)
  -----------------------------------------------
  (C) 2016, Freedom Bits Team
------------------------------------------------*/

var step = 0;

function NextLine() {
	
	if (document.getElementById("part"+(step+1).toString()) != null) { 
	
		if (step == 0) document.getElementById("btntxt").innerHTML = $("#tstd").val();
	
		$("#part"+step.toString()).css("display", "none");
		step++;
		$("#part"+step.toString()).css("display", "block");	
	
		if (document.getElementById("part"+(step+1).toString()) == null) {
			document.getElementById("btntxt").innerHTML = $("#tend").val();
		}
		
	} else {
		document.location.href = '?id=0';
	}
		
}