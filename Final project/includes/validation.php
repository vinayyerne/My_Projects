<?php

function validate_add()
{
	$errors = array();

	if(empty($_POST['name']))
	{
		$errors[] = "Please enter your name";
	}
	elseif (!preg_match("#^[-A-Z a-z']*$#",$_POST['name']))
	{
		$errors[] = "Please enter your valid name";
	}

	if(empty($_POST['email']))
	{
		$errors[]="Please enter your email";
	}
	elseif(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
	{
		$errors[] = "Please enter your valid email";
	}
	
	if(empty($_POST['number']))
	{
		$errors[] = "Please enter your number";
	}
	elseif (!preg_match("#^[-0-9']*$#",$_POST['number']))
	{
		$errors[] = "Please enter your valid number";
	}

	if(empty($_POST['message']))
	{
		$errors[] = "Please enter your message";
	}

	return $errors;
}                              
?>