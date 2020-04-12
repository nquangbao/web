<?php

session_start();
if(isset($_SESSION['user']) && isset($_SESSION['pass'])){
	// header('location : ../admin');
	echo "<meta http-equiv='Refresh' content='0;url=../admin>";
	echo "bạn đã đăng nhập";
}
else {
	require_once('login.php');
}