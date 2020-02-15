<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
<link rel="stylesheet" href="css/style1.css">
<title>Registration form</title>
</head>
<body>
<div class="container">

    <div class="card">
        <div class="card-body">
        <span class="text-success" id="invalid"></span>
        <span class="text-danger" id="valid"></span>

            <form action="company_registration.php" method="post">

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" id="">
            </div>
            <div class="form-group">
                <label for="Mobile">Mobile</label>
                <input type="number" class="form-control" name="mobile" id="">
            </div>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" class="form-control" name="email" id="">
            </div>
            <div class="form-group">
                <label for="adress">Address</label>
                <textarea name="address" id="" cols="30" rows="5" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="industry">Industry Type</label>
                <input type="text" class="form-control" name="industryType" id="">
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" name="usrname" id="">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="pass" id="">
            </div>
            <input type="submit" class="btn btn-block btn-primary" name="submit" id="">
            <small><i>Already have an account</i><a href="index.php"> Login</a></small>
            </form>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>

<?php
	
	if(isset($_POST["submit"]))
	{
	if(!($_POST["name"] && $_POST["email"] &&$_POST["mobile"] && $_POST["address"] &&$_POST["industryType"]&&$_POST["usrname"]&&$_POST["pass"]))
		{
            ?>
              <script>
              document.getElementById('valid').innerHTML = "Please Fill All the credentials.";
              </script>
              <?php  
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
                ?>
                <script>
                document.getElementById('valid').innerHTML = "Company Already Exists";
                </script>
                <?php  
		  	}
		  	else
		  	{
		  		$a= $_POST["name"];
		  		$b=$_POST["mobile"];
		  		$c=$_POST["email"];
		  		$d=$_POST["address"];
		  		$e=$_POST["usrname"];
		  		$f=$_POST["industryType"];
		  		$g=$_POST["pass"];

		  		$query = "INSERT INTO company_login VALUES('{$a}','{$b}','{$c}' ,'{$d}','{$e}','{$f}','{$g}')";
		    	$result   = $conn->query($query);
                if (!$result)
                {
                    ?>
              <script>
              document.getElementById('valid').innerHTML = "registration failed";
              </script>
              <?php  
                }
		    	else
		    	{
		    		?>
              <script>
              document.getElementById('invalid').innerHTML = "Successfully registered";
              </script>
              <?php  
		    	}

		  	}
		}
    }
    ?>