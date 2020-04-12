<?php
session_start();
require_once('config.php');
	  if(!$connect){
        die('Connect failed => sai truy vấn cơ sở dữ liệu: ' . mysql_connect_error);
    }
    echo "connection successfully ";
    // header('location: ../admin');
    if(isset($_POST['submit'])){
    	$user = $_POST['user'];
    	$pass = $_POST['pass'];
        $_SESSION['user'] = $user;
        $_SESSION['pass'] = $pass;
        setcookie('user' , $_POST['user'], time() +5);
        setcookie('pass' , $_POST['pass'] , time()+5);
    	$sql = "SELECT * FROM thanhvien WHERE email='$user' and matkhau='$pass'";
    	$query = mysqli_query($connect , $sql);
    	$num_row = mysqli_num_rows($query);
    	if($num_row == 0){
    		echo "LOGIN ERROR";
    	}
    	else{
                header('location: ../admin');
    	}
    	
    	$connect->close();	
    }