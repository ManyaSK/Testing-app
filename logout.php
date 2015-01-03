<SCRIPT type="text/javascript">
function abc(){
	alert("You are successfully logged out.");
}
</SCRIPT>




<?php
	session_start();
	include"chk.php";
	session_destroy();
	echo"<body onload='abc();'></body>";
	include "index.php";
	
?>




