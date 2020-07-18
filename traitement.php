<?php
	$firstname=$name=$age=$serieBAC=$moyBAC=$pays=$ville=$email=$phone=$motivation" ";
	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$firstname=$_POST["firstname"];
		$name=$_POST["name"];
		$age=$_POST["age"];
		$serieBAC=$_POST["serieBAC"];
		$moyBAC=$_POST["moyBAC"];
		$pays=$_POST["pays"];
		$ville=$_POST["ville"];
		$email=$_POST["email"];
		$phone=$_POST["phone"];
		$motivation=$_POST["motivation"];
	}?>
