<?php	
session_start();
if(isset($_SESSION['user']) && isset($_SESSION['pass'])){
	require_once('./html/header.php');
	require_once('./html/main.php');
	require_once('./html/footer.php');
}
else {
	echo "Lỗi Đăng Nhập";
	echo "<a href='../login/login.php'>Vui Lòng Đăng Nhập </a>";
}
?>