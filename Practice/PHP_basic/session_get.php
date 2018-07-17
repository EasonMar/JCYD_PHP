<?php
	session_start(); // 只要涉及到session,前面必须要有session_start()
	//retrieve session data
	echo "Pageviews=". $_SESSION['views'];
?>