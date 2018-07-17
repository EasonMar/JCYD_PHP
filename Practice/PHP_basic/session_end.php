<?php
	session_start(); // 只要涉及到session,前面必须要有session_start()
	unset($_SESSION['views']); // 释放指定的 session 变量
	// session_destroy(); // 彻底终结 session
?>