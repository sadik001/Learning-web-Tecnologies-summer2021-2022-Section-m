<?php

if(isset($_REQUEST['submit']))
{
	$name = $_REQUEST['name'];
	$password = $_REQUEST['password'];
	$chkpassword = $_REQUEST['chkpassword'];
	$type = $_REQUEST['type'];
	$id= $_REQUEST['ID'];
	if($name == null || $password == null  ||$id==null)
	{
	echo "INVALID";
	}
	else
	{
		$user = $name."|".$password."|".$id."|".$type."\r\n";
		$file = fopen('user_data.txt', 'a');
		fwrite($file, $user);
		if($fname == 'create')
		{
			header('location: home_page.php');
		}
		else
		{
			header('location: login_panel.html');			
		}
		
	}
}

?>