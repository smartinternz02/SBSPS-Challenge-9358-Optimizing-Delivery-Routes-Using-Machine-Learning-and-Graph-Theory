<?php
$link=mysqli_connect('localhost','root','7665');

if (!$link) {
		die('Page Under Construction');
	}
		
	if (!mysqli_select_db($link,'greenflash')) {	
		die('Page Under Construction');
	}
?> 