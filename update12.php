<?php
session_start();
$db = $_SESSION['db'];
$table = $_SESSION['table'];
$conn = mysqli_connect('localhost',"root","",$db);
$sql = "";
if(isset($_POST['update'])){
    if(isset($_SESSION['f1'])){
        $f1 = $_SESSION['f1'];
        $fld1 = $_POST[$f1];

        $sql = "UPDATE `$table` SET `$f1`='$fld1' WHERE `$f1`='$fld1'";
    }
    if(isset($_SESSION['f2'])){
        $f2 = $_SESSION['f2'];
        $fld2 = $_POST[$f2];

        $sql = "UPDATE `$table` SET `$f2`='$fld2' WHERE `$f1`='$fld1'";
    }
    if(isset($_SESSION['f3'])){
        $f3 = $_SESSION['f3'];
        $fld3 = $_POST[$f3];

        $sql = "UPDATE `$table` SET `$f2`='$fld2',`$f3`='$fld3' WHERE `$f1`='$fld1'";
    }
    if(isset($_SESSION['f4'])){
        $f4 = $_SESSION['f4'];
        $fld4 = $_POST[$f4];

        $sql = "UPDATE `$table` SET `$f2`='$fld2',`$f3`='$fld3',`$f4`='$fld4' WHERE `$f1`='$fld1'";
    }
    if(isset($_SESSION['f5'])){
        $f5 = $_SESSION['f5'];
        $fld5 = $_POST[$f5];

        $sql = "UPDATE `$table` SET `$f2`='$fld2',`$f3`='$fld3',`$f4`='$fld4',`$f5`='$fld5' WHERE `$f1`='$fld1'";
    }
    if(isset($_SESSION['f6'])){
        $f6 = $_SESSION['f6'];
        $fld6 = $_POST[$f6];


        
        $sql = "UPDATE `$table` SET `$f2`='$fld2',`$f3`='$fld3',`$f4`='$fld4',`$f5`='$fld5',`$f6`='$fld6' WHERE `$f1`='$fld1'";


    }
    if(isset($_SESSION['f7'])){
        $f7 = $_SESSION['f7'];
        $fld7 = $_POST[$f7];


        
        $sql = "UPDATE `$table` SET `$f2`='$fld2',`$f3`='$fld3',`$f4`='$fld4',`$f5`='$fld5',`$f6`='$fld6',`$f7`='$fld7' WHERE `$f1`='$fld1'";


    }
    if(isset($_SESSION['f8'])){
        $f8 = $_SESSION['f8'];
        $fld8 = $_POST[$f8];


        
        $sql = "UPDATE `$table` SET `$f2`='$fld2',`$f3`='$fld3',`$f4`='$fld4',`$f5`='$fld5',`$f6`='$fld6',`$f7`='$fld7',`$f8`='$fld8' WHERE `$f1`='$fld1'";


    }
    if(isset($_SESSION['f9'])){
        $f9 = $_SESSION['f9'];
        $fld9 = $_POST[$f9];


        
        $sql = "UPDATE `$table` SET `$f2`='$fld2',`$f3`='$fld3',`$f4`='$fld4',`$f5`='$fld5',`$f6`='$fld6',`$f7`='$fld7',`$f8`='$fld8',`$f9`='$fld9' WHERE `$f1`='$fld1'";


    }
    if(isset($_SESSION['f10'])){
        $f10 = $_SESSION['f10'];
        $fld10 = $_POST[$f10];


        
        $sql = "UPDATE `$table` SET `$f2`='$fld2',`$f3`='$fld3',`$f4`='$fld4',`$f5`='$fld5',`$f6`='$fld6',`$f7`='$fld7',`$f8`='$fld8',`$f9`='$fld9',`$f10`='$fld10' WHERE `$f1`='$fld1'";


    }
    if(isset($_SESSION['f11'])){
        $f11 = $_SESSION['f11'];
        $fld11 = $_POST[$f11];


        
        $sql = "UPDATE `$table` SET `$f2`='$fld2',`$f3`='$fld3',`$f4`='$fld4',`$f5`='$fld5',`$f6`='$fld6',`$f7`='$fld7',`$f8`='$fld8',`$f9`='$fld9',`$f10`='$fld10',`$f11`='$fld11' WHERE `$f1`='$fld1'";


    }
    if(isset($_SESSION['f12'])){
        $f12 = $_SESSION['f12'];
        $fld12 = $_POST[$f12];


        
        $sql = "UPDATE `$table` SET `$f2`='$fld2',`$f3`='$fld3',`$f4`='$fld4',`$f5`='$fld5',`$f6`='$fld6',,`$f7`='$fld7',`$f8`='$fld8',`$f9`='$fld9',`$f10`='$fld10',`$f11`='$fld11',`$f12`='$fld12' WHERE `$f1`='$fld1'";


    }
    if(isset($_SESSION['f13'])){
        $f13 = $_SESSION['f13'];
        $fld13 = $_POST[$f13];


        
        $sql = "UPDATE `$table` SET `$f2`='$fld2',`$f3`='$fld3',`$f4`='$fld4',`$f5`='$fld5',`$f6`='$fld6',,`$f7`='$fld7',`$f8`='$fld8',`$f9`='$fld9',`$f10`='$fld10',`$f11`='$fld11',`$f12`='$fld12',`$f13`='$fld13' WHERE `$f1`='$fld1'";


    }
    if(isset($_SESSION['f14'])){
        $f14 = $_SESSION['f14'];
        $fld14 = $_POST[$f14];


        
        $sql = "UPDATE `$table` SET `$f2`='$fld2',`$f3`='$fld3',`$f4`='$fld4',`$f5`='$fld5',`$f6`='$fld6',,`$f7`='$fld7',`$f8`='$fld8',`$f9`='$fld9',`$f10`='$fld10',`$f11`='$fld11',`$f12`='$fld12',`$f13`='$fld13',`$f14`='$fld14' WHERE `$f1`='$fld1'";


    }
    if(isset($_SESSION['f15'])){
        $f15 = $_SESSION['f15'];
        $fld15 = $_POST[$f15];

        $sql = "UPDATE `$table` SET `$f2`='$fld2',`$f3`='$fld3',`$f4`='$fld4',`$f5`='$fld5',`$f6`='$fld6',,`$f7`='$fld7',`$f8`='$fld8',`$f9`='$fld9',`$f10`='$fld10',`$f11`='$fld11',`$f12`='$fld12',`$f13`='$fld13',`$f14`='$fld14',`$f15`='$fld15' WHERE `$f1`='$fld1'";


    }
    if(isset($_SESSION['f16'])){
        $f16 = $_SESSION['f16'];
        $fld16 = $_POST[$f16];

        $sql = "UPDATE `$table` SET `$f2`='$fld2',`$f3`='$fld3',`$f4`='$fld4',`$f5`='$fld5',`$f6`='$fld6',,`$f7`='$fld7',`$f8`='$fld8',`$f9`='$fld9',`$f10`='$fld10',`$f11`='$fld11',`$f12`='$fld12',`$f13`='$fld13',`$f14`='$fld14',`$f15`='$fld15',`$f16`='$fld16' WHERE `$f1`='$fld1'";


    }
    if(isset($_SESSION['f17'])){
        $f17 = $_SESSION['f17'];
        $fld17 = $_POST[$f17];

        $sql = "UPDATE `$table` SET `$f2`='$fld2',`$f3`='$fld3',`$f4`='$fld4',`$f5`='$fld5',`$f6`='$fld6',,`$f7`='$fld7',`$f8`='$fld8',`$f9`='$fld9',`$f10`='$fld10',`$f11`='$fld11',`$f12`='$fld12',`$f13`='$fld13',`$f14`='$fld14',`$f15`='$fld15',`$f16`='$fld16',`$f17`='$fld17' WHERE `$f1`='$fld1'";


    }
    
   $result = $conn->query($sql);
if(!$result){
    echo $sql.conn->error;
}

setcookie($table,"set");
setcookie("date", Date('y-m-d'), time() + (10 * 365 * 24 * 60 * 60) , "/");

header('location:view1.php');
}
$f1 = $_SESSION['f1'];

if(isset($_GET[$f1])){
    $id = $_GET[$f1];
    $sql = "SELECT * FROM `$table` WHERE `$f1`='$id'";
    $result = $conn->query($sql);
    if($result->num_rows>0){
        while($row=$result->fetch_assoc()){
            if(isset($_SESSION['f1'])){
                $f1 = $_SESSION['f1'];
                $fd1=$row[$f1];

            }
            if(isset($_SESSION['f2'])){
                $f2 = $_SESSION['f2'];
                $fd2=$row[$f2];

            }
            if(isset($_SESSION['f3'])){
                $f3 = $_SESSION['f3'];
                $fd3=$row[$f3];

            }
            if(isset($_SESSION['f4'])){
                $f4 = $_SESSION['f4'];
                $fd4=$row[$f4];

            }
            if(isset($_SESSION['f5'])){
                $f5 = $_SESSION['f5'];
                $fd5=$row[$f5];

            }
            if(isset($_SESSION['f6'])){
                $f6 = $_SESSION['f6'];
                $fd6=$row[$f6];

            }
            if(isset($_SESSION['f7'])){
                $f7 = $_SESSION['f7'];
                $fd7=$row[$f7];

            }
            if(isset($_SESSION['f8'])){
                $f8 = $_SESSION['f8'];
                $fd8=$row[$f8];

            }
            if(isset($_SESSION['f9'])){
                $f9 = $_SESSION['f9'];
                $fd9=$row[$f9];

            }
            if(isset($_SESSION['f10'])){
                $f10 = $_SESSION['f10'];
                $fd10=$row[$f10];

            }
            if(isset($_SESSION['f11'])){
                $f11 = $_SESSION['f11'];
                $fd11=$row[$f11];

            }
            if(isset($_SESSION['f12'])){
                $f12 = $_SESSION['f12'];
                $fd12=$row[$f12];

            }
            if(isset($_SESSION['f13'])){
                $f13 = $_SESSION['f13'];
                $fd13=$row[$f13];
            }
            if(isset($_SESSION['f14'])){
                $f14 = $_SESSION['f14'];
                $fd14=$row[$f14];

            }
            if(isset($_SESSION['f15'])){
                $f15 = $_SESSION['f15'];
                $fd15=$row[$f15];

            }
            if(isset($_SESSION['f16'])){
                $f16 = $_SESSION['f16'];
                $fd16=$row[$f16];

            }
            if(isset($_SESSION['f17'])){
                $f17 = $_SESSION['f17'];
                $fd17=$row[$f17];

            }
        }
    ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
    <link rel="stylesheet" href="insert1.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>

<div class="container mt-5">
        <div class="container header p-3">
            <h2><?php echo $table ?> UPDATE DATA</h2>
        </div>
        <form method="post" autocomplete="off">
        <div class='container form mt-5 mb-5'>
        
            <?php if(isset($_SESSION['f1'])){
            $f1 = $_SESSION['f1'];
            echo "<div class='mb-3'>";
            echo "<label for='exampleInputEmail1' class='form-label'>Enter the $f1</label>";
            echo "<input type='text' class='form-control' id='exampleInputEmail1' aria-describedby='emailHelp' name='$f1' value='$fd1'>";
            echo " </div>";
            }
           ?>
            <?php if(isset($_SESSION['f2'])){
            $f2 = $_SESSION['f2'];
            echo "<div class='mb-3'>";
            echo "<label for='exampleInputEmail1' class='form-label'>Enter the $f2</label>";
            echo "<input type='text' class='form-control' id='exampleInputEmail1' aria-describedby='emailHelp' name='$f2' value='$fd2'>";
            echo " </div><br>";
            }
           ?>
           <?php if(isset($_SESSION['f3'])){
            $f3 = $_SESSION['f3'];
            echo "<div class='mb-3'>";
            echo "<label for='exampleInputEmail1' class='form-label'>Enter the $f3</label>";
            echo "<input type='text' class='form-control' id='exampleInputEmail1' aria-describedby='emailHelp' name='$f3'  value='$fd3'>";
            echo " </div>";
            }
           ?>
          
            <?php if(isset($_SESSION['f4'])){
            $f4 = $_SESSION['f4'];
            echo "<div class='mb-3'>";
            echo "<label for='exampleInputEmail1' class='form-label'>Enter the $f4</label>";
            echo "<input type='text' class='form-control' id='exampleInputEmail1' aria-describedby='emailHelp' name='$f4'  value='$fd4'>";
            echo " </div>";
            }
           ?>
           <?php if(isset($_SESSION['f5'])){
            $f5 = $_SESSION['f5'];
            echo "<div class='mb-3'>";
            echo "<label for='exampleInputEmail1' class='form-label'>Enter the $f5</label>";
            echo "<input type='text' class='form-control' id='exampleInputEmail1' aria-describedby='emailHelp' name='$f5'  value='$fd5'>";
            echo " </div>";
            }
           ?>
            <?php if(isset($_SESSION['f6'])){
            $f6 = $_SESSION['f6'];
            echo "<div class='mb-3'>";
            echo "<label for='exampleInputEmail1' class='form-label'>Enter the $f6</label>";
            echo "<input type='text' class='form-control' id='exampleInputEmail1' aria-describedby='emailHelp' name='$f6'  value='$fd6'>";
            echo " </div>";
            }
           ?>
             <?php if(isset($_SESSION['f7'])){
            $f7 = $_SESSION['f7'];
            echo "<div class='mb-3'>";
            echo "<label for='exampleInputEmail1' class='form-label'>Enter the $f7</label>";
            echo "<input type='text' class='form-control' id='exampleInputEmail1' aria-describedby='emailHelp' name='$f7'  value='$fd7'>";
            echo " </div>";
            }
           ?>
            <?php if(isset($_SESSION['f8'])){
            $f8 = $_SESSION['f8'];
            echo "<div class='mb-3'>";
            echo "<label for='exampleInputEmail1' class='form-label'>Enter the $f8</label>";
            echo "<input type='text' class='form-control' id='exampleInputEmail1' aria-describedby='emailHelp' name='$f8'  value='$fd8'>";
            echo " </div>";
            }
           ?>
           <?php if(isset($_SESSION['f9'])){
            $f9 = $_SESSION['f9'];
            echo "<div class='mb-3'>";
            echo "<label for='exampleInputEmail1' class='form-label'>Enter the $f9</label>";
            echo "<input type='text' class='form-control' id='exampleInputEmail1' aria-describedby='emailHelp' name='$f9'  value='$fd9'>";
            echo " </div>";
            }
           ?>
            <?php if(isset($_SESSION['f10'])){
            $f10 = $_SESSION['f10'];
            echo "<div class='mb-3'>";
            echo "<label for='exampleInputEmail1' class='form-label'>Enter the $f10</label>";
            echo "<input type='text' class='form-control' id='exampleInputEmail1' aria-describedby='emailHelp' name='$f10'   value='$fd10'>";
            echo " </div>";
            }
           ?>
             <?php if(isset($_SESSION['f11'])){
            $f11 = $_SESSION['f11'];
            echo "<div class='mb-3'>";
            echo "<label for='exampleInputEmail1' class='form-label'>Enter the $f11</label>";
            echo "<input type='text' class='form-control' id='exampleInputEmail1' aria-describedby='emailHelp' name='$f11'   value='$fd11'>";
            echo " </div>";
            }
           ?>
            <?php if(isset($_SESSION['f12'])){
            $f12 = $_SESSION['f12'];
            echo "<div class='mb-3'>";
            echo "<label for='exampleInputEmail1' class='form-label'>Enter the $f12</label>";
            echo "<input type='text' class='form-control' id='exampleInputEmail1' aria-describedby='emailHelp' name='$f12' value='$fd12'>";
            echo " </div>";
            }
           ?>
            <?php if(isset($_SESSION['f13'])){
            $f13 = $_SESSION['f13'];
            echo "<div class='mb-3'>";
            echo "<label for='exampleInputEmail1' class='form-label'>Enter the $f13</label>";
            echo "<input type='text' class='form-control' id='exampleInputEmail1' aria-describedby='emailHelp' name='$f13' value='$fd13'>";
            echo " </div>";
            }
           ?>
            <?php if(isset($_SESSION['f14'])){
            $f14 = $_SESSION['f14'];
            echo "<div class='mb-3'>";
            echo "<label for='exampleInputEmail1' class='form-label'>Enter the $f14</label>";
            echo "<input type='text' class='form-control' id='exampleInputEmail1' aria-describedby='emailHelp' name='$f14' value='$fd14'>";
            echo " </div>";
            }
           ?>
            <?php if(isset($_SESSION['f15'])){
            $f15 = $_SESSION['f15'];
            echo "<div class='mb-3'>";
            echo "<label for='exampleInputEmail1' class='form-label'>Enter the $f15</label>";
            echo "<input type='text' class='form-control' id='exampleInputEmail1' aria-describedby='emailHelp' name='$f15' value='$fd15'>";
            echo " </div>";
            }
           ?>
            <?php if(isset($_SESSION['f16'])){
            $f16 = $_SESSION['f16'];
            echo "<div class='mb-3'>";
            echo "<label for='exampleInputEmail1' class='form-label'>Enter the $f16</label>";
            echo "<input type='text' class='form-control' id='exampleInputEmail1' aria-describedby='emailHelp' name='$f16' value='$fd16'>";
            echo " </div>";
            }
           ?>
           <?php if(isset($_SESSION['f17'])){
            $f17 = $_SESSION['f17'];
            echo "<div class='mb-3'>";
            echo "<label for='exampleInputEmail1' class='form-label'>Enter the $f17</label>";
            echo "<input type='text' class='form-control' id='exampleInputEmail1' aria-describedby='emailHelp'name='$f17'  value='$fd17'>";
            echo " </div>";
            }
           ?>
           <!-- <input type="submit" name="update" value="update"> -->
          <button type="submit" name="update" class="btn btn-primary button mt-3 mb-3">UPDATE</button>
          </form>
       </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
    <?php
    }

}
?>
