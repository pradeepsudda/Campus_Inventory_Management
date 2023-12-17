<?php
session_start();
$db = $_SESSION['db'];
$table = $_SESSION['table'];
$sql = "";
$dte = Date('y-m-d');
$_SESSION['dte']=$dte;

$conn = mysqli_connect('localhost',"root","",$db);

if(isset($_POST['submit'])){

    if(isset($_SESSION['f1'])){
        $f1 = $_SESSION['f1'];
        $v1 = $_POST[$f1];

        $sql = "INSERT INTO `$table` ('$f1') VALUES($v1)";

    }
    if(isset($_SESSION['f2'])){
        $f2 = $_SESSION['f2'];
        $v2 = $_POST[$f2];

        $sql = "INSERT INTO `$table` (`$f2`) VALUES('$v2')";

    }
    if(isset($_SESSION['f3'])){
        $f3 = $_SESSION['f3'];
        $v3 = $_POST[$f3];
        if($f3=='modified_date'){
            $v3 = Date('y-m-d');
        }

        $sql = "INSERT INTO `$table` (`$f2`,`$f3`) VALUES('$v2','$v3')";

    }
    if(isset($_SESSION['f4'])){
        $f4 = $_SESSION['f4'];
        $v4 = $_POST[$f4];
        if($f4=='modified_date'){
            $v4 = Date('y-m-d');
        }

        $sql = "INSERT INTO `$table` (`$f2`,`$f3`,`$f4`) VALUES('$v2','$v3','$v4')";
        
        echo $sql;

    }
    if(isset($_SESSION['f5'])){
        $f5 = $_SESSION['f5'];
        $v5 = $_POST[$f5];
        if($f5=='modified_date'){
            $v5 = Date('y-m-d');
        }

        $sql = "INSERT INTO `$table` (`$f2`,`$f3`,`$f4`,`$f5`) VALUES('$v2','$v3','$v4','$v5')";

        echo "$sql";

    }
    if(isset($_SESSION['f6'])){
        $f6 = $_SESSION['f6'];
        $v6 = $_POST[$f6];
        if($f6=='modified_date'){
            $v6 = Date('y-m-d');
        }

        $sql = "INSERT INTO `$table` (`$f2`,`$f3`,`$f4`,`$f5`,`$f6`) VALUES('$v2','$v3','$v4','$v5','$v6')";

    }
    if(isset($_SESSION['f7'])){
      $f7 = $_SESSION['f7'];
      $v7 = $_POST[$f7];
      if($f7=='modified_date'){
          $v7 = Date('y-m-d');
      }

      $sql = "INSERT INTO `$table` (`$f2`,`$f3`,`$f4`,`$f5`,`$f6`,`$f7`) VALUES('$v2','$v3','$v4','$v5','$v6','$v7')";

  }
  if(isset($_SESSION['f8'])){
    $f8 = $_SESSION['f8'];
    $v8 = $_POST[$f8];
    if($f8=='modified_date'){
        $v8 = Date('y-m-d');
    }

    $sql = "INSERT INTO `$table` (`$f2`,`$f3`,`$f4`,`$f5`,`$f6`,`$f7`,`$f8`) VALUES('$v2','$v3','$v4','$v5','$v6','$v7','$v8')";

}
if(isset($_SESSION['f9'])){
  $f9 = $_SESSION['f9'];
  $v9= $_POST[$f9];
  if($f9=='modified_date'){
      $v9 = Date('y-m-d');
  }

  $sql = "INSERT INTO `$table` (`$f2`,`$f3`,`$f4`,`$f5`,`$f6`,`$f7`,`$f8`,`$f9`) VALUES('$v2','$v3','$v4','$v5','$v6','$v7','$v8','$v9')";

}
if(isset($_SESSION['f10'])){
  $f10 = $_SESSION['f10'];
  $v10 = $_POST[$f10];
  if($f10=='modified_date'){
      $v10 = Date('y-m-d');
  }

  $sql = "INSERT INTO `$table` (`$f2`,`$f3`,`$f4`,`$f5`,`$f6`,`$f7`,`$f8`,`$f9`,`$f10`) VALUES('$v2','$v3','$v4','$v5','$v6','$v7','$v8','$v9','$v10')";

}
if(isset($_SESSION['f11'])){
  $f11 = $_SESSION['f11'];
  $v11 = $_POST[$f11];
  if($f11=='modified_date'){
      $v11 = Date('y-m-d');
  }

  $sql = "INSERT INTO `$table` (`$f2`,`$f3`,`$f4`,`$f5`,`$f6`,`$f7`,`$f8`,`$f9`,`$f10`,`$f11`) VALUES('$v2','$v3','$v4','$v5','$v6','$v7','$v8','$v9','$v10','$v11')";

}
if(isset($_SESSION['f12'])){
  $f12 = $_SESSION['f12'];
  $v12 = $_POST[$f12];
  if($f12=='modified_date'){
      $v12 = Date('y-m-d');
  }

  $sql = "INSERT INTO `$table` (`$f2`,`$f3`,`$f4`,`$f5`,`$f6`,`$f7`,`$f8`,`$f9`,`$f10`,`$f11`,`$f12`) VALUES('$v2','$v3','$v4','$v5','$v6','$v7','$v8','$v9','$v10','$v11','$v12')";

}
if(isset($_SESSION['f13'])){
  $f13 = $_SESSION['f13'];
  $v13 = $_POST[$f13];
  if($f13=='modified_date'){
      $v13 = Date('y-m-d');
  }

  $sql = "INSERT INTO `$table` (`$f2`,`$f3`,`$f4`,`$f5`,`$f6`,`$f7`,`$f8`,`$f9`,`$f10`,`$f11`,`$f12`,`$f13`) VALUES('$v2','$v3','$v4','$v5','$v6','$v7','$v8','$v9','$v10','$v11','$v12','$v13')";

}
if(isset($_SESSION['f14'])){
  $f14 = $_SESSION['f14'];
  $v14 = $_POST[$f14];
  if($f14=='modified_date'){
      $v14 = Date('y-m-d');
  }

  $sql = "INSERT INTO `$table` (`$f2`,`$f3`,`$f4`,`$f5`,`$f6`,`$f7`,`$f8`,`$f9`,`$f10`,`$f11`,`$f12`,`$f13`,`$f14`) VALUES('$v2','$v3','$v4','$v5','$v6','$v7','$v8','$v9','$v10','$v11','$v12','$v13','$v14')";

}
if(isset($_SESSION['f15'])){
  $f15 = $_SESSION['f15'];
  $v15 = $_POST[$f15];
  if($f15=='modified_date'){
      $v15 = Date('y-m-d');
  }

  $sql = "INSERT INTO `$table` (`$f2`,`$f3`,`$f4`,`$f5`,`$f6`,`$f7`,`$f8`,`$f9`,`$f10`,`$f11`,`$f12`,`$f13`,`$f14`,`$f15`,) VALUES('$v2','$v3','$v4','$v5','$v6','$v7','$v8','$v9','$v10','$v11','$v12','$v13','$v14','$v15')";

}
if(isset($_SESSION['f16'])){
  $f16 = $_SESSION['f16'];
  $v16 = $_POST[$f16];
  if($f16=='modified_date'){
      $v16 = Date('y-m-d');
  }

  $sql = "INSERT INTO `$table` (`$f2`,`$f3`,`$f4`,`$f5`,`$f6`,`$f7`,`$f8`,`$f9`,`$f10`,`$f11`,`$f12`,`$f13`,`$f14`,`$f15`,`$f16`) VALUES('$v2','$v3','$v4','$v5','$v6','$v7','$v8','$v9','$v10','$v11','$v12','$v13','$v14','$v15','$v16')";

}if(isset($_SESSION['f17'])){
  $f17 = $_SESSION['f17'];
  $v17 = $_POST[$f17];
  if($f17=='modified_date'){
      $v17 = Date('y-m-d');
  }

  $sql = "INSERT INTO `$table` (`$f2`,`$f3`,`$f4`,`$f5`,`$f6`,`$f7`,`$f8`,`$f9`,`$f10`,`$f11`,`$f12`,`$f13`,`$f14`,`$f15`,`$f16`,`$f17`) VALUES('$v2','$v3','$v4','$v5','$v6','$v7','$v8','$v9','$v10','$v11','$v12','$v13','$v14','$v15','$v16','$v17')";

}

    $result = $conn->query($sql);

    if($result){
        header("location:view1.php");
    }
    else{
        echo "Connection Error";
    }
  }
?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
    <link rel="stylesheet" href="css/insert1.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    

</head>
<body>
<div class="container mt-5">
        <div class="container header p-3">
            <h2><?php echo $table ?> INSERT DATA</h2>
        </div>
        <form method="post" autocomplete="off">
        
        <div class="container form mt-5 mb-5">
        
            <!-- <?php if(isset($_SESSION['f1'])){
            $f1 = $_SESSION['f1'];
            echo "<div class='mb-3 '>";
            echo "<label for='exampleInputEmail1' class='form-label'>Enter the $f1</label>";
            echo "<input type='text' class='form-control' id='exampleInputEmail1' aria-describedby='emailHelp' name='$f1'>";
            echo " </div>";
            }
           ?> -->
         <?php if(isset($_SESSION['f2'])){
            $f2 = $_SESSION['f2'];
            echo "<div class='mb-3'>";
            echo "<label for='exampleInputEmail1' class='form-label'>Enter the $f2</label>";
            echo "<input type='text' class='form-control' id='exampleInputEmail1' aria-describedby='emailHelp' name='$f2'>";
            echo " </div><br>";
            }
           ?>
           
            <?php if(isset($_SESSION['f3'])){
            $f3 = $_SESSION['f3'];
            echo "<div class='mb-3'>";
            echo "<label for='exampleInputEmail1' class='form-label'>Enter the $f3</label>";
            echo "<input type='text' class='form-control' id='exampleInputEmail1' aria-describedby='emailHelp' name='$f3'>";
            echo " </div>";
            }
           ?>
          
            <?php if(isset($_SESSION['f4'])){
            $f4 = $_SESSION['f4'];
            echo "<div class='mb-3'>";
            echo "<label for='exampleInputEmail1' class='form-label'>Enter the $f4</label>";
            echo "<input type='text' class='form-control' id='exampleInputEmail1' aria-describedby='emailHelp' name='$f4'>";
            echo " </div>";
            }
           ?>
            <?php if(isset($_SESSION['f5'])){
            $f5 = $_SESSION['f5'];
            echo "<div class='mb-3'>";
            echo "<label for='exampleInputEmail1' class='form-label'>Enter the $f5</label>";
            echo "<input type='text' class='form-control' id='exampleInputEmail1' aria-describedby='emailHelp' name='$f5'>";
            echo " </div>";
            }
           ?>
            <?php if(isset($_SESSION['f6'])){
            $f6 = $_SESSION['f6'];
            echo "<div class='mb-3'>";
            echo "<label for='exampleInputEmail1' class='form-label'>Enter the $f6</label>";
            echo "<input type='text' class='form-control' id='exampleInputEmail1' aria-describedby='emailHelp' name='$f6'>";
            echo " </div>";
            }
           ?>
            <?php if(isset($_SESSION['f7'])){
            $f7 = $_SESSION['f7'];
            echo "<div class='mb-3'>";
            echo "<label for='exampleInputEmail1' class='form-label'>Enter the $f7</label>";
            echo "<input type='text' class='form-control' id='exampleInputEmail1' aria-describedby='emailHelp' name='$f7'>";
            echo " </div>";
            }
           ?>
            <?php if(isset($_SESSION['f8'])){
            $f8 = $_SESSION['f8'];
            echo "<div class='mb-3'>";
            echo "<label for='exampleInputEmail1' class='form-label'>Enter the $f8</label>";
            echo "<input type='text' class='form-control' id='exampleInputEmail1' aria-describedby='emailHelp' name='$f8'>";
            echo " </div>";
            }
           ?>
            <?php if(isset($_SESSION['f9'])){
            $f9 = $_SESSION['f9'];
            echo "<div class='mb-3'>";
            echo "<label for='exampleInputEmail1' class='form-label'>Enter the $f9</label>";
            echo "<input type='text' class='form-control' id='exampleInputEmail1' aria-describedby='emailHelp' name='$f9'>";
            echo " </div>";
            }
           ?>
            <?php if(isset($_SESSION['f10'])){
            $f10 = $_SESSION['f10'];
            echo "<div class='mb-3'>";
            echo "<label for='exampleInputEmail1' class='form-label'>Enter the $f10</label>";
            echo "<input type='text' class='form-control' id='exampleInputEmail1' aria-describedby='emailHelp' name='$f10'>";
            echo " </div>";
            }
           ?>
            <?php if(isset($_SESSION['f11'])){
            $f11 = $_SESSION['f11'];
            echo "<div class='mb-3'>";
            echo "<label for='exampleInputEmail1' class='form-label'>Enter the $f11</label>";
            echo "<input type='text' class='form-control' id='exampleInputEmail1' aria-describedby='emailHelp' name='$f11'>";
            echo " </div>";
            }
           ?>
            <?php if(isset($_SESSION['f12'])){
            $f12 = $_SESSION['f12'];
            echo "<div class='mb-3'>";
            echo "<label for='exampleInputEmail1' class='form-label'>Enter the $f12</label>";
            echo "<input type='text' class='form-control' id='exampleInputEmail1' aria-describedby='emailHelp' name='$f12'>";
            echo " </div>";
            }
           ?>
            <?php if(isset($_SESSION['f13'])){
            $f13 = $_SESSION['f13'];
            echo "<div class='mb-3'>";
            echo "<label for='exampleInputEmail1' class='form-label'>Enter the $f13</label>";
            echo "<input type='text' class='form-control' id='exampleInputEmail1' aria-describedby='emailHelp' name='$f13'>";
            echo " </div>";
            }
           ?>
            <?php if(isset($_SESSION['f14'])){
            $f14 = $_SESSION['f14'];
            echo "<div class='mb-3'>";
            echo "<label for='exampleInputEmail1' class='form-label'>Enter the $f14</label>";
            echo "<input type='text' class='form-control' id='exampleInputEmail1' aria-describedby='emailHelp' name='$f14'>";
            echo " </div>";
            }
           ?>
            <?php if(isset($_SESSION['f15'])){
            $f15 = $_SESSION['f15'];
            echo "<div class='mb-3'>";
            echo "<label for='exampleInputEmail1' class='form-label'>Enter the $f15</label>";
            echo "<input type='text' class='form-control' id='exampleInputEmail1' aria-describedby='emailHelp' name='$f15'>";
            echo " </div>";
            }
           ?>
            <?php if(isset($_SESSION['f16'])){
            $f16 = $_SESSION['f16'];
            echo "<div class='mb-3'>";
            echo "<label for='exampleInputEmail1' class='form-label'>Enter the $f16</label>";
            echo "<input type='text' class='form-control' id='exampleInputEmail1' aria-describedby='emailHelp' name='$f16'>";
            echo " </div>";
            }
           ?>
            <?php if(isset($_SESSION['f17'])){
            $f17 = $_SESSION['f17'];
            echo "<div class='mb-3'>";
            echo "<label for='exampleInputEmail1' class='form-label'>Enter the $f17</label>";
            echo "<input type='text' class='form-control' id='exampleInputEmail1' aria-describedby='emailHelp' name='$f17'>";
            echo " </div>";
            }
           ?>

          <button type="submit" name="submit" class="btn btn-primary button mt-3 mb-3">Submit</button>
          </form>
          
    </div>
        
    </div>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>