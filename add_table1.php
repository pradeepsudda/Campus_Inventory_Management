<?php

session_start();
$db = $_SESSION['db'];
$ct = 0;
$table_error=null;

$_SESSION['f1']=NULL;
$_SESSION['f2']=NULL;
$_SESSION['f3']=NULL;
$_SESSION['f4']=NULL;
$_SESSION['f5']=NULL;
$_SESSION['f6']=NULL;
$_SESSION['f7']=NULL;
$_SESSION['f8']=NULL;
$_SESSION['f9']=NULL;
$_SESSION['f10']=NULL;
$_SESSION['f11']=NULL;
$_SESSION['f12']=NULL;
$_SESSION['f13']=NULL;
$_SESSION['f14']=NULL;
$_SESSION['f15']=NULL;
$_SESSION['f16']=NULL;
$_SESSION['f17']=NULL;

$conn = mysqli_connect('localhost',"root","",$db);
$sql = "";
if($conn){
    if(isset($_POST['smt'])){
        $table =  $_POST['table'];
        $_SESSION['table']=$table;
        if($_POST['f1'] && isset($_POST['o1'])){
            $f1 = $_POST['f1'];
            $o1 = $_POST['o1'];
            $_SESSION['f1']=$f1;
            $_SESSION['o1']=$o1;
            $ct++;
           

           $sql = "CREATE TABLE `$table`(`$f1` $o1);";

            // echo "$sql";
        }
        if($_POST['f2'] && isset($_POST['o2'])){
            $f2 = $_POST['f2'];
            $o2 = $_POST['o2'];
            $_SESSION['f2']=$f2;
            $_SESSION['o2']=$o2;

            $ct++;


            $sql = "CREATE TABLE `$table`(`$f1` $o1,`$f2` $o2,PRIMARY KEY($f1));";

            // echo "$sql";
        }
        if($_POST['f3'] && isset($_POST['o3'])){
            $f3 = $_POST['f3'];
            $o3 = $_POST['o3'];

            $_SESSION['f3']=$f3;
            $_SESSION['o3']=$o3;
            $ct++;

            $sql = "CREATE TABLE `$table`(`$f1` $o1,`$f2` $o2,`$f3` $o3,PRIMARY KEY($f1));";

            // echo "$sql";

        }
        if($_POST['f4'] && isset($_POST['o4'])){
            $f4 = $_POST['f4'];
            $o4 = $_POST['o4'];

            $_SESSION['f4']=$f4;
            $_SESSION['o4']=$o4;
            $ct++;

            $sql = "CREATE TABLE `$table`(`$f1` $o1,`$f2` $o2,`$f3` $o3,`$f4` $o4,PRIMARY KEY($f1));";
            // echo "$sql";
        }
        if($_POST['f5'] && isset($_POST['o5'])){
            $f5 = $_POST['f5'];
            $o5 = $_POST['o5'];

            $_SESSION['f5']=$f5;
            $_SESSION['o5']=$o5;
            $ct++;

            $sql = "CREATE TABLE `$table`(`$f1` $o1,`$f2` $o2,`$f3` $o3,`$f4` $o4,`$f5` $o5,PRIMARY KEY($f1));";
            echo "$sql";
        }
        
        if($_POST['f6'] && isset($_POST['o6'])){
            $f6 = $_POST['f6'];
            $o6 = $_POST['o6'];

            $_SESSION['f6']=$f6;
            $_SESSION['o6']=$o6;
            $ct++;

            $sql = "CREATE TABLE `$table`(`$f1` $o1,`$f2` $o2,`$f3` $o3,`$f4` $o4,`$f5` $o5,`$f6` $o6,PRIMARY KEY($f1));";
            echo "$sql";
        }
        if($_POST['f7'] && isset($_POST['o7'])){
            $f7 = $_POST['f7'];
            $o7 = $_POST['o7'];

            $_SESSION['f7']=$f7;
            $_SESSION['o7']=$o7;
            $ct++;

            $sql = "CREATE TABLE `$table`(`$f1` $o1,`$f2` $o2,`$f3` $o3,`$f4` $o4,`$f5` $o5,`$f6` $o6,`$f7` $o7,PRIMARY KEY($f1));";
            echo "$sql";
        }
        if($_POST['f8'] && isset($_POST['o8'])){
            $f8 = $_POST['f8'];
            $o8 = $_POST['o8'];

            $_SESSION['f8']=$f8;
            $_SESSION['o8']=$o8;
            $ct++;

            $sql = "CREATE TABLE `$table`(`$f1` $o1,`$f2` $o2,`$f3` $o3,`$f4` $o4,`$f5` $o5,`$f6` $o6,`$f7` $o7,`$f8` $o8,PRIMARY KEY($f1));";
            echo "$sql";
        }
        if($_POST['f9'] && isset($_POST['o9'])){
            $f9 = $_POST['f9'];
            $o9 = $_POST['o9'];

            $_SESSION['f9']=$f9;
            $_SESSION['o9']=$o9;
            $ct++;

            $sql = "CREATE TABLE `$table`(`$f1` $o1,`$f2` $o2,`$f3` $o3,`$f4` $o4,`$f5` $o5,`$f6` $o6,`$f7` $o7,`$f8` $o8,`$f9` $o9,PRIMARY KEY($f1));";
            echo "$sql";
        }
        if($_POST['f10'] && isset($_POST['o10'])){
            $f10 = $_POST['f10'];
            $o10 = $_POST['o10'];

            $_SESSION['f10']=$f10;
            $_SESSION['o10']=$o10;
            $ct++;

            $sql = "CREATE TABLE `$table`(`$f1` $o1,`$f2` $o2,`$f3` $o3,`$f4` $o4,`$f5` $o5,`$f6` $o6,`$f7` $o7,`$f8` $o8,`$f9` $o9,`$f10` $o10,PRIMARY KEY($f1));";
            echo "$sql";
        }
        if($_POST['f11'] && isset($_POST['o11'])){
            $f11 = $_POST['f11'];
            $o11 = $_POST['o11'];

            $_SESSION['f11']=$f11;
            $_SESSION['o11']=$o11;
            $ct++;

            $sql = "CREATE TABLE `$table`(`$f1` $o1,`$f2` $o2,`$f3` $o3,`$f4` $o4,`$f5` $o5,`$f6` $o6,`$f7` $o7,`$f8` $o8,`$f9` $o9,`$f10` $o10,`$f11` $o11,PRIMARY KEY($f1));";
            echo "$sql";
        }
        if($_POST['f12'] && isset($_POST['o12'])){
            $f12 = $_POST['f12'];
            $o12 = $_POST['o12'];

            $_SESSION['f12']=$f12;
            $_SESSION['o12']=$o12;
            $ct++;

            $sql = "CREATE TABLE `$table`(`$f1` $o1,`$f2` $o2,`$f3` $o3,`$f4` $o4,`$f5` $o5,`$f6` $o6,`$f7` $o7,`$f8` $o8,`$f9` $o9,`$f10` $o10,`$f11` $o11,`$f12` $o12,PRIMARY KEY($f1));";
            echo "$sql";
        }
        if($_POST['f13'] && isset($_POST['o13'])){
            $f13 = $_POST['f13'];
            $o13 = $_POST['o13'];

            $_SESSION['f13']=$f13;
            $_SESSION['o13']=$o13;
            $ct++;

            $sql = "CREATE TABLE `$table`(`$f1` $o1,`$f2` $o2,`$f3` $o3,`$f4` $o4,`$f5` $o5,`$f6` $o6,`$f7` $o7,`$f8` $o8,`$f9` $o9,`$f10` $o10,`$f11` $o11,`$f12` $o12,`$f13` $o13,PRIMARY KEY($f1));";
            echo "$sql";
        }
        if($_POST['f14'] && isset($_POST['o14'])){
            $f14 = $_POST['f14'];
            $o14 = $_POST['o14'];

            $_SESSION['f14']=$f14;
            $_SESSION['o14']=$o14;
            $ct++;

            $sql = "CREATE TABLE `$table`(`$f1` $o1,`$f2` $o2,`$f3` $o3,`$f4` $o4,`$f5` $o5,`$f6` $o6,`$f7` $o7,`$f8` $o8,`$f9` $o9,`$f10` $o10,`$f11` $o11,`$f12` $o12,`$f13` $o13,`$f14` $o14,PRIMARY KEY($f1));";
            echo "$sql";
        }
        if($_POST['f15'] && isset($_POST['o15'])){
            $f15 = $_POST['f15'];
            $o15 = $_POST['o15'];

            $_SESSION['f15']=$f15;
            $_SESSION['o15']=$o15;
            $ct++;

            $sql = "CREATE TABLE `$table`(`$f1` $o1,`$f2` $o2,`$f3` $o3,`$f4` $o4,`$f5` $o5,`$f6` $o6,`$f7` $o7,`$f8` $o8,`$f9` $o9,`$f10` $o10,`$f11` $o11,`$f12` $o12,`$f13` $o13,`$f14` $o14,`$f15` $o15,PRIMARY KEY($f1));";
            echo "$sql";
        }
        if($_POST['f16'] && isset($_POST['o16'])){
            $f16 = $_POST['f16'];
            $o16 = $_POST['o16'];

            $_SESSION['f16']=$f16;
            $_SESSION['o16']=$o16;
            $ct++;

            $sql = "CREATE TABLE `$table`(`$f1` $o1,`$f2` $o2,`$f3` $o3,`$f4` $o4,`$f5` $o5,`$f6` $o6,`$f7` $o7,`$f8` $o8,`$f9` $o9,`$f10` $o10,`$f11` $o11,`$f12` $o12,`$f13` $o13,`$f14` $o14,`$f15` $o15,`$f16` $o16,PRIMARY KEY($f1));";
            echo "$sql";
        }
        if($_POST['f17'] && isset($_POST['o17'])){
            $f17 = $_POST['f17'];
            $o17 = $_POST['o17'];

            $_SESSION['f17']=$f17;
            $_SESSION['o17']=$o17;
            $ct++;

            $sql = "CREATE TABLE `$table`(`$f1` $o1,`$f2` $o2,`$f3` $o3,`$f4` $o4,`$f5` $o5,`$f6` $o6,`$f7` $o7,`$f8` $o8,`$f9` $o9,`$f10` $o10,`$f11` $o11,`$f12` $o12,`$f13` $o13,`$f14` $o14,`$f15` $o15,`$f16` $o16,`$f17` $o17,PRIMARY KEY($f1));";
            echo "$sql";
        }
       $_SESSION['count']=$ct;
       
        // $sql = "CREATE TABLE `$table`(`name` varchar(10),`age` int(10),`sex` varchar(5),`branch` varchar(10));";
        // $sql = "CREATE TABLE `$table`(`$f1` $o1(100));";
        $result = $conn->query($sql);
        if($result){
            header('location:tables1.php');
        }
        else{
            
            $table_error = "Check your fields properly OR Don't use same table name that already Existed !";
        }
    }
   
}
else{
    $table_error = "Check Your Connection Properly !!!";
}

?>  
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/add_table.css">
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
    <?php if($table_error!=null){?>
        <div class="alert alert-warning" role="alert">
        <?php echo "$table_error"?>
      </div>
      <?php

       }
       ?>
        <div class="heading1">
            <h1>CREATE TABLE</h1>
        </div>
        <div class="container form pt-5 mb-5 ">
            <form method="post" autocomplete="off">
                <div class="mb-3 tablename">

                    <input type="text" class="form-control" id="exampleInputEmail1" name="table"
                        placeholder="Enter table name" aria-describedby="emailHelp">

                </div>
                <div class="mb-3  select1">

                    <input type="text" class="form-control " name="f1" id="exampleInputEmail1"
                        placeholder="Enter name of the field" aria-describedby="emailHelp" value="ID">
                    <select class="form-select  aria-label=" Default select example" name="o1">
                        <option value="int NOT NULL AUTO_INCREMENT" selected>ID</option>
                        <option value="varchar(100)">String</option>
                        <option value="int(20)">Number</option>
                        <option value="text">text</option>
                        <option value="date">Date</option>
                    </select>
                </div>
                <div class="mb-3  select1">

                    <input type="text" class="form-control " id="exampleInputEmail1" name="f2"
                        placeholder="Enter name of the field" aria-describedby="emailHelp">
                    <select class="form-select  aria-label=" Default select example" name="o2">
                        <option selected>Open this select menu</option>

                        <option value="varchar(100)">String</option>
                        <option value="int(20)">Number</option>
                        <option value="text">text</option>
                        <option value="date">Date</option>
                    </select>
                </div>
                <div class="mb-3  select1">

                    <input type="text" class="form-control " id="exampleInputEmail1" name="f3"
                        placeholder="Enter name of the field" aria-describedby="emailHelp">
                    <select class="form-select  aria-label=" Default select example" name="o3">
                        <option selected>Open this select menu</option>

                        <option value="varchar(100)">String</option>
                        <option value="int(20)">Number</option>
                        <option value="text">text</option>
                        <option value="date">Date</option>
                    </select>
                </div>
                <div class="mb-3  select1">

                    <input type="text" class="form-control " id="exampleInputEmail1" name="f4"
                        placeholder="Enter name of the field" aria-describedby="emailHelp">
                    <select class="form-select  aria-label=" Default select example" name="o4">
                        <option selected>Open this select menu</option>
                        <option value="varchar(100)">String</option>
                        <option value="int(20)">Number</option>
                        <option value="text">text</option>
                        <option value="date">Date</option>
                    </select>
                </div>
                <div class="mb-3  select1">

                    <input type="text" class="form-control " id="exampleInputEmail1" name="f5"
                        placeholder="Enter name of the field" aria-describedby="emailHelp">
                    <select class="form-select  aria-label=" Default select example" name="o5">
                        <option selected>Open this select menu</option>

                        <option value="varchar(100)">String</option>
                        <option value="int(20)">Number</option>
                        <option value="text">text</option>
                        <option value="date">Date</option>
                    </select>
                </div>
                <div class="mb-3  select1">

                    <input type="text" class="form-control " id="exampleInputEmail1" name="f6"
                        placeholder="Enter name of the field" aria-describedby="emailHelp">
                    <select class="form-select  aria-label=" Default select example" name="o6">
                        <option selected>Open this select menu</option>

                        <option value="varchar(100)">String</option>
                        <option value="int(20)">Number</option>
                        <option value="text">text</option>
                        <option value="date">Date</option>
                    </select>
                </div>
                <div class="mb-3  select1">

                    <input type="text" class="form-control " id="exampleInputEmail1" name="f7"
                        placeholder="Enter name of the field" aria-describedby="emailHelp">
                    <select class="form-select  aria-label=" Default select example" name="o7">
                        <option selected>Open this select menu</option>

                        <option value="varchar(100)">String</option>
                        <option value="int(20)">Number</option>
                        <option value="text">text</option>
                        <option value="date">Date</option>
                    </select>
                </div>
                <div class="mb-3  select1">

                    <input type="text" class="form-control " id="exampleInputEmail1" name="f8"
                        placeholder="Enter name of the field" aria-describedby="emailHelp">
                    <select class="form-select  aria-label=" Default select example" name="o8">
                        <option selected>Open this select menu</option>

                        <option value="varchar(100)">String</option>
                        <option value="int(20)">Number</option>
                        <option value="text">text</option>
                        <option value="date">Date</option>
                    </select>
                </div>
                <div class="mb-3  select1">

                    <input type="text" class="form-control " id="exampleInputEmail1" name="f9"
                        placeholder="Enter name of the field" aria-describedby="emailHelp">
                    <select class="form-select  aria-label=" Default select example" name="o9">
                        <option selected>Open this select menu</option>

                        <option value="varchar(100)">String</option>
                        <option value="int(20)">Number</option>
                        <option value="text">text</option>
                        <option value="date">Date</option>
                    </select>
                </div>
                <div class="mb-3  select1">

                    <input type="text" class="form-control " id="exampleInputEmail1" name="f10"
                        placeholder="Enter name of the field" aria-describedby="emailHelp">
                    <select class="form-select  aria-label=" Default select example" name="o10">
                        <option selected>Open this select menu</option>

                        <option value="varchar(100)">String</option>
                        <option value="int(20)">Number</option>
                        <option value="text">text</option>
                        <option value="date">Date</option>
                    </select>
                </div>
                <div class="mb-3  select1">

                    <input type="text" class="form-control " id="exampleInputEmail1" name="f11"
                        placeholder="Enter name of the field" aria-describedby="emailHelp">
                    <select class="form-select  aria-label=" Default select example" name="o11">
                        <option selected>Open this select menu</option>

                        <option value="varchar(100)">String</option>
                        <option value="int(20)">Number</option>
                        <option value="text">text</option>
                        <option value="date">Date</option>
                    </select>
                </div>
                <div class="mb-3  select1">

                    <input type="text" class="form-control " id="exampleInputEmail1" name="f12"
                        placeholder="Enter name of the field" aria-describedby="emailHelp">
                    <select class="form-select  aria-label=" Default select example" name="o12">
                        <option selected>Open this select menu</option>

                        <option value="varchar(100)">String</option>
                        <option value="int(20)">Number</option>
                        <option value="text">text</option>
                        <option value="date">Date</option>
                    </select>
                </div>
                <div class="mb-3  select1">

                    <input type="text" class="form-control " id="exampleInputEmail1" name="f13"
                        placeholder="Enter name of the field" aria-describedby="emailHelp">
                    <select class="form-select  aria-label=" Default select example" name="o13">
                        <option selected>Open this select menu</option>

                        <option value="varchar(100)">String</option>
                        <option value="int(20)">Number</option>
                        <option value="text">text</option>
                        <option value="date">Date</option>
                    </select>
                </div>
                <div class="mb-3  select1">

                    <input type="text" class="form-control " id="exampleInputEmail1" name="f14"
                        placeholder="Enter name of the field" aria-describedby="emailHelp">
                    <select class="form-select  aria-label=" Default select example" name="o14">
                        <option selected>Open this select menu</option>

                        <option value="varchar(100)">String</option>
                        <option value="int(20)">Number</option>
                        <option value="text">text</option>
                        <option value="date">Date</option>
                    </select>
                </div>
                <div class="mb-3  select1">

                    <input type="text" class="form-control " id="exampleInputEmail1" name="f15"
                        placeholder="Enter name of the field" aria-describedby="emailHelp">
                    <select class="form-select  aria-label=" Default select example" name="o15">
                        <option selected>Open this select menu</option>

                        <option value="varchar(100)">String</option>
                        <option value="int(20)">Number</option>
                        <option value="text">text</option>
                        <option value="date">Date</option>
                    </select>
                </div>
                <div class="mb-3  select1">

                    <input type="text" class="form-control " id="exampleInputEmail1" name="f16"
                        placeholder="Enter name of the field" aria-describedby="emailHelp">
                    <select class="form-select  aria-label=" Default select example" name="o16">
                        <option selected>Open this select menu</option>

                        <option value="varchar(100)">String</option>
                        <option value="int(20)">Number</option>
                        <option value="text">text</option>
                        <option value="date">Date</option>
                    </select>
                </div>
                <div class="mb-3  select1">

                    <input type="text" class="form-control " id="exampleInputEmail1" name="f17"
                        placeholder="Enter name of the field" aria-describedby="emailHelp">
                    <select class="form-select  aria-label=" Default select example" name="o17">
                        <option selected>Open this select menu</option>

                        <option value="varchar(100)">String</option>
                        <option value="int(20)">Number</option>
                        <option value="text">text</option>
                        <option value="date">Date</option>
                    </select>
                </div>
                <div class="mb-3  select1">

                    <input type="text" class="form-control " id="exampleInputEmail1" name="f18"
                        placeholder="Enter name of the field" aria-describedby="emailHelp">
                    <select class="form-select  aria-label=" Default select example" name="o18">
                        <option value="varchar(100)">String</option>
                        <option value="int(20)">Number</option>
                        <option value="text">text</option>
                        <option value="date">Date</option>
                    </select>
                </div>
                <input type="submit" value="CREATE" name="smt" class="btn btn-primary button mt-3 mb-3">
                <!-- <button type="submit" class="btn btn-primary button mt-3 mb-3" name="">CREATE</button> -->
            </form>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>