<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
<link rel="stylesheet" href="css/style3.css">
<title>Farmer Dashboard</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div id="my-nav" class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="farm_dash.php"> <i class="fas fa-tachometer-alt"></i> Dashboard<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="aboutcrop.php"> <i class="fas fa-edit"></i> Fill form</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="searchunion.php"> <i class="fas fa-search"></i>Search Union</a>
            </li>
            <li class="nav-item" >
                <a class="nav-link"href="viewprofile.php"><i class="fas fa-user-alt"></i> View profile</a>
            </li>
            <li class="nav-item" >
                <a class="nav-link"  href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
            </li>
        </ul>
    </div>
</nav>
<div class="jumbotron">
<div class="container-fluid">
    
    <div class="card mt-4">
        <div class="card-body">
        <form action="">
    <div class="row">
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <!--<form action=""> -->
                        <div class="form-group">
                            <label for="experience">Previous experience</label>
                            <textarea name="exp1"  class="form-control" id="" cols="30" rows="5"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="Yield">Yield</label>
                            <input type="text" class="form-control" name="y1" id="">
                        </div>
                        <div class="form-group">
                            <label for="equipments">Equipments</label>
                            <input type="text" class="form-control" name="eq1" id="">
                        </div>
                        <div class="form-group">
                            <label for="farm-land">Farm-land</label>
                            <input type="text" class="form-control" name="fl1" id="">
                        </div>
                        <div class="form-group">
                            <label for="requirements">Equipments Requirments</label>
                            <input type="text" class="form-control" name="deq1" id="">
                        </div>
                  
                </div>
            </div>
        </div>

        <div class="col-4">
            <div class="card">
                <div class="card-body">
                   
                        <div class="form-group">
                            <label for="experience">Previous experience</label>
                            <textarea name="exp2"  class="form-control" id="" cols="30" rows="5"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="Yield">Yield</label>
                            <input type="text" class="form-control" name="y2" id="">
                        </div>
                        <div class="form-group">
                            <label for="equipments">Equipments</label>
                            <input type="text" class="form-control" name="eq2" id="">
                        </div>
                        <div class="form-group">
                            <label for="farm-land">Farm-land</label>
                            <input type="text" class="form-control" name="fl2" id="">
                        </div>
                        <div class="form-group">
                            <label for="requirements">Equipments Requirments</label>
                            <input type="text" class="form-control" name="deq2" id="">
                        </div>
                    
                </div>
            </div>
        </div>

        <div class="col-4">
            <div class="card">
                <div class="card-body">
                   
                        <div class="form-group">
                            <label for="experience">Previous experience</label>
                            <textarea name="exp3"  class="form-control" id="" cols="30" rows="5"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="Yield">Yield</label>
                            <input type="text" class="form-control" name="y3" id="">
                        </div>
                        <div class="form-group">
                            <label for="equipments">Equipments</label>
                            <input type="text" class="form-control" name="eq3" id="">
                        </div>
                        <div class="form-group">
                            <label for="farm-land">Farm-land</label>
                            <input type="text" class="form-control" name="fl3" id="">
                        </div>
                        <div class="form-group">
                            <label for="requirements">Equipments Requirments</label>
                            <input type="text" class="form-control" name="deq3" id="">
                        </div>
                        
                   
                </div>
            </div>
        </div>
        </div>
        <input type="submit" class="btn btn-outline-info mt-2 p-2" value="SUBMIT" name="submit" id="">
</form>
    </div>
    </div>
</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>

