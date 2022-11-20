<?php 
	if(isset($_POST['user']) && isset($_POST['pass']))
	{
		if(empty($_POST['user']) && empty($_POST['pass']))
		{	
			echo "Dang nhap that bai";
		}
		else
		{
			include('../config/db.php');
			$u = $_POST['user'];
			$p = md5($_POST['pass']);
			include('../models/login.php');
			$login = login($u, $p);
			if ($login == true){
				echo 'Dang nhap thanh cong';
			}
			else{
				echo "Dang nhap that bai";
			}
		}
	}else{
		include('../views/login.php');
	}
?>