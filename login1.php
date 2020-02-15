<?php
if(isset($_POST["submit"]))
{
	if(!($_POST["usr"] && $_POST["password"] && $_POST["choose"]))
	{
		echo "Please fill all credentials<br>";
	}

    else
    {

	if($_POST["choose"]=='farmer')
	{
		require_once 'login.php';
	  	$conn = new mysqli($hn, $un, $pw, $db);
	  	if ($conn->connect_error) die("Fatal Error");
	  	$query="select * from farmer_login where username ='{$_POST["usr"]}' AND password ='{$_POST["password"]}'";
	  	$result   = $conn->query($query);
	  	$users = $result->num_rows;
	  	if($users==1)
	  	{
	  		echo "I M Farmer";
	  	}
	  	else
	  	{
			  
		  }

	}

	if($_POST["choose"]=='company')
	{
		require_once 'login.php';
	  	$conn = new mysqli($hn, $un, $pw, $db);
	  	if ($conn->connect_error) die("Fatal Error");
	  	$query="select * from company_login where username ='{$_POST["usr"]}' AND password ='{$_POST["password"]}'";
	  	$result   = $conn->query($query);
	  	$users = $result->num_rows;
	  	if($users==1)
	  	{
	  		echo "I M COMPANY";
	  	}
	  	else
	  	{
	  		echo "Fill Data Not Correct.<br><br>";
	  	}

	}

	if($_POST["choose"]=='admin')
	{
		if(($_POST["usr"]=='admin' && $_POST["password"]=='admin'))
		{
             echo "I M ADMIN";
		}
		else
	  	{
	  		echo "Fill Data Not Correct.<br><br>";
	  	}

	}
}


}
?>



