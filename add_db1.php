<?php
$conn = mysqli_connect('localhost',"root","");
session_start();
session_reset();
session_destroy();
session_start();
$dberror=null;
if($conn){
    if(isset($_POST['submit'])){
        $db =  $_POST['db'];
        $sql = "CREATE DATABASE $db";
        // $result = $conn->query($sql);
        if($conn->query($sql)){
            // $_SESSION['db']=$db;
            header('location:dashboard.php');
         }
        else{
            $dberror = "Database Already Exists, so please Try with Other Name";
           

        }
        
    }
   
}
else{
   $dberror = "Check your connection properly";
}


?>  


<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/add_db.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <style>
.navbar {
    background-color: #333;
    color: #fff;
    padding: 10px;

    text-align: center;
}

.navbar a {
    color: #fff;
    text-decoration: none;
    padding: 10px;
}

.navbar a:hover {
    background-color: #555;
}
            </style>
</head>

<body>
<div class="navbar">
        <a href="home.php" class="active">Home</a>
        <a href="dashboard.php" class="active">Dashboard</a>
        <a href='logout.php' class='float-right'>Logout</a>
    </div>
<div class="container header1 mt-5">
    <?php if($dberror!=null){?>
        <div class="alert alert-warning" role="alert">
        <?php echo "$dberror"?>
      </div>
      <?php

    }
    ?>

        <div class="heading1">
            <h3>CREATE DATABASE</h3>
        </div>
        <div class="container form">
            <form method="post" autocomplete="off">
            <div class=" dbname mb-3">
              <label for="exampleInputEmail1" class="form-label">Enter DataBase Name</label>
              <input type="text" class="form-control" id="exampleInputEmail1" name="db" aria-describedby="emailHelp">
             </div>
             <input type="submit" value="CREATE" name="submit" class="btn btn-primary button">
            <!-- <button type="submit" value="class="btn btn-primary button">Submit</button> -->
          </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous">
    </script>
</body>

</html>