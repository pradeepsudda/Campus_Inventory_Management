<?php
session_start();
$db = $_SESSION['db'];
$table = $_SESSION['table'];
$sql = "";
$dte = Date('y-m-d');
$_SESSION['dte']=$dte;

$conn = mysqli_connect('localhost',"root","",$db);

if(isset($_POST['submit'])){

    // if(isset($_SESSION['f1'])){
    //     $f1 = $_SESSION['f1'];
    //     $v1 = $_POST[$f1];

    //     $sql = "INSERT INTO `$table` ('$f1') VALUES($v1)";

    // }
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
    <title>Form submission</title>
</head>
<body>
    <form method="post" autocomplete="off">
        <h1><?php echo $table ?> INSERTING DATA</h1>
        <!-- <?php if(isset($_SESSION['f1'])){
            $f1 = $_SESSION['f1'];
            echo "<label>Enter the $f1 :</label><br>";
            echo "<input type='text' name='$f1'><br><br>";
        }
        ?> -->
         <?php if(isset($_SESSION['f2'])){
            $f2 = $_SESSION['f2'];
            if($f2!='modified_date'){
            echo "<label>Enter the $f2 :</label><br>";
            echo "<input type='text' name='$f2'><br><br>";
            }
        }
        ?>
         <?php if(isset($_SESSION['f3'])){
            $f3 = $_SESSION['f3'];
            if($f3!='modified_date'){
            echo "<label>Enter the $f3 :</label><br>";
            echo "<input type='text' name='$f3'><br><br>";
            }
        }
        ?>
         <?php if(isset($_SESSION['f4'])){
            $f4 = $_SESSION['f4'];
            if($f4!='modified_date'){
                echo "<label>Enter the $f4 :</label><br>";
                echo "<input type='text' name='$f4'><br><br>";
            }
        }
        ?>
         <?php if(isset($_SESSION['f5'])){
            $f5 = $_SESSION['f5'];
            if($f5!='modified_date'){
            echo "<label>Enter the $f5 :</label><br>";
            echo "<input type='text' name='$f5'><br><br>";
            }
        }
        ?>
         <?php if(isset($_SESSION['f6'])){
            $f6 = $_SESSION['f6'];
            if($f6!='modified_date'){
            echo "<label>Enter the $f6 :</label><br>";
            echo "<input type='text' name='$f6'><br><br>";
            }
        }
        ?>
        <?php if(isset($_SESSION['f7'])){
            $f7 = $_SESSION['f7'];
            if($f7!='modified_date'){
            echo "<label>Enter the $f7 :</label><br>";
            echo "<input type='text' name='$f7'><br><br>";
            }
        }
        ?>
        <?php if(isset($_SESSION['f8'])){
            $f8 = $_SESSION['f8'];
            if($f8!='modified_date'){
            echo "<label>Enter the $f8 :</label><br>";
            echo "<input type='text' name='$f8'><br><br>";
            }
        }
        ?>
        <?php if(isset($_SESSION['f9'])){
            $f9 = $_SESSION['f9'];
            if($f9!='modified_date'){
            echo "<label>Enter the $f9 :</label><br>";
            echo "<input type='text' name='$f9'><br><br>";
            }
        }
        ?>
        <?php if(isset($_SESSION['f10'])){
            $f10 = $_SESSION['f10'];
            if($f10!='modified_date'){
            echo "<label>Enter the $f10 :</label><br>";
            echo "<input type='text' name='$f10'><br><br>";
            }
        }
        ?>
        <?php if(isset($_SESSION['f11'])){
            $f11 = $_SESSION['f11'];
            if($f11!='modified_date'){
            echo "<label>Enter the $f11 :</label><br>";
            echo "<input type='text' name='$f11'><br><br>";
            }
        }
        ?>
        <?php if(isset($_SESSION['f12'])){
            $f12 = $_SESSION['f12'];
            if($f12!='modified_date'){
            echo "<label>Enter the $f12 :</label><br>";
            echo "<input type='text' name='$f12'><br><br>";
            }
        }
        ?>
        <?php if(isset($_SESSION['f13'])){
            $f13 = $_SESSION['f13'];
            if($f13!='modified_date'){
            echo "<label>Enter the $f13 :</label><br>";
            echo "<input type='text' name='$f13'><br><br>";
            }
        }
        ?>
        <?php if(isset($_SESSION['f14'])){
            $f14 = $_SESSION['f14'];
            if($f14!='modified_date'){
            echo "<label>Enter the $f14 :</label><br>";
            echo "<input type='text' name='$f14'><br><br>";
            }
        }
        ?><?php if(isset($_SESSION['f15'])){
            $f15 = $_SESSION['f15'];
            if($f15!='modified_date'){
            echo "<label>Enter the $f15 :</label><br>";
            echo "<input type='text' name='$f15'><br><br>";
            }
        }
        ?>
        <?php if(isset($_SESSION['f16'])){
            $f16 = $_SESSION['f16'];
            if($f16!='modified_date'){
            echo "<label>Enter the $f16 :</label><br>";
            echo "<input type='text' name='$f16'><br><br>";
            }
        }
        ?>
        <?php if(isset($_SESSION['f17'])){
            $f17 = $_SESSION['f17'];
            if($f17!='modified_date'){
            echo "<label>Enter the $f17 :</label><br>";
            echo "<input type='text' name='$f17'><br><br>";
            }
        }
        ?>

        <input type="submit" name="submit" value="submit">

        
    </form>
    
</body>
</html>