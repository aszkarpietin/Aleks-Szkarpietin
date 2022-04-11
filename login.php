<?php
require_once("studentmat.php");
session_start();
if(!empty($_POST['login']) && !empty($_POST['password']))
{
	if($_POST['login'] == USERNAME)
	{
		//echo password_hash(PASSWORD, PASSWORD_DEFAULT);
		if(password_verify($_POST['password'], PASSWORD))
		{
			$_SESSION['user'] = htmlspecialchars($_POST['login']);
		}
	}
}
header('Location: materialy.php');