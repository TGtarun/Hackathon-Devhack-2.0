<?php
	
	if(isset($_POST["go"]))
	{
	if(!($_POST["1"] && $_POST["2"] &&$_POST["3"] && $_POST["4"] &&$_POST["5"]&&$_POST["6"]&&$_POST["7"]))
		{
			echo "Please Fill all Credentials..<br><br>";
		}

		else  //check user already exists or not by quering sql if not insert data and assign random userid
		{
			require_once 'login.php';
		  	$conn = new mysqli($hn, $un, $pw, $db);
		  	if ($conn->connect_error) die("Fatal Error");
		  	$query="select * from company_login where email ='{$_POST["email"]}'";
		  	$result   = $conn->query($query);
		  	$users = $result->num_rows;
		  	if($users!=0)
		  	{
		  		echo "company Already Exists.<br><br>";
		  	}
		  	else
		  	{
		  		$a= $_POST["1"];
		  		$b=$_POST["2"];
		  		$c=$_POST["3"];
		  		$d=$_POST["4"];
		  		$e=$_POST["5"];
		  		$f=$_POST["6"];
		  		$h=$_POST["7"];

		  		$query = "INSERT INTO company_login VALUES('{$a}','{$b}','{$c}' ,'{$d}','{$e}','{$f}','{$g}','{$h}')";
		    	$result   = $conn->query($query);
		    	if (!$result) echo "Registeration Failed<br><br>";
		    	else
		    	{
		    		echo "Successfully Registered.<br>";
		    	}

		  	}
		}
    }
    ?>




