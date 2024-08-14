<?php
	include('config.php');
	@$url = explode('/',$_GET['url'])[0];
			
	if(!User::logged()){
		include('login.php');
	}else{
		include('home.php');
	}
?>
