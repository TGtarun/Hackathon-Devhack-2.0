<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
<link rel="stylesheet" href="css/style.css">
<title>Farmer Portal</title>
</head>
<body>
<div class="container">
<div class="card">
<div class="card-body">
<form action="index.php" method="post">
<span class="text-danger" id="invalid"></span>
<div class="form-group">

<label for="username"><i class="fas fa-user"></i> Username</label>
<input type="text" class="form-control" name="usr">
</div>
<div class="form-group">
<label for="password"><i class="fas fa-lock"></i> Password</label>
<input type="password" class="form-control" name="password">
</div>
<div class="form-group">
    <select name="choose" class="custom-select">
        <option selected>Select Your Role</option>
        <option value="farmer">Farmer</option>
        <option value="admin">Admin</option>
        <option value="Company">Company</option>
    </select>
</div>
<button class ="btn btn-primary btn-block" type="submit" name="submit">Login</button>
<small><i>Don't have an account?</i><a href="register_farm.php"> Register Farmer</a></small> <small><a href="company_registration.php"> | Register Company </a></small>
<br>
<small><a href="#">Forgot password</a></small>
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
	if(!($_POST["usr"] && $_POST["password"] && $_POST["choose"]))
	{
		?>
              <script>
              document.getElementById('invalid').innerHTML = "Please Fill All the credentials.";
              </script>
              <?php  
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
			?>
              <script>
              document.getElementById('invalid').innerHTML = "Fill Data Not Correct";
              </script>
              <?php  
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
	  		?>
              <script>
              document.getElementById('invalid').innerHTML = "Fill Data Not Correct";
              </script>
              <?php
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
            ?>
            <script>
            document.getElementById('invalid').innerHTML = "Fill Data Not Correct";
            </script>
            <?php
	  	}

	}
}


}
?>