<?php
if(isset($_POST["export"])){
session_start();
$db = $_SESSION['db'];
$table = $_SESSION['table'];
$conn = mysqli_connect("localhost","root","",$db);
$sql = "SHOW COLUMNS FROM `$table`";
$result = $conn->query($sql);
$arr = array();
if($result){
    $i=1;
    $fields;
    while($fields = mysqli_fetch_array($result)){
        array_push($arr,$fields[0]);
    }
   
}
    header('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachment; filename=data.csv');
    $output = fopen("php://output","w");
    fputcsv($output,$arr);
    $query = "SELECT * FROM $table ORDER BY ID DESC";
    $result = mysqli_query($conn,$query);
    while($row = mysqli_fetch_assoc($result)){
        fputcsv($output,$row);
    }
    fclose($output);
}

if(isset($_POST["generate"])){  ?>
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
        <!-- <?php
        // if(!isset($_SESSION['username'])){
        //     echo "<a href='dashboard.php'>Back to Dashboard</a>";
        // }
        ?> -->
    </div>
<div class="container-md header1 mt-4">

        <div class="heading1">
            <h1>GENERATE RECORDS</h1>
        </div>
        <div class="container-md form pt-5 mb-5 ">
            <form method="post" autocomplete="off">
                <div class="mb-3  select1">
                    <!-- <input type="text" class="form-control " name="column" id="exampleInputEmail1"
                        placeholder="Enter name of the field" aria-describedby="emailHelp"> -->
                    <?php
                    session_start();
                    $db = $_SESSION['db'];
                    $conn = mysqli_connect("localhost","root","",$db);
                        $table = $_SESSION['table'];
                        $sql = "SHOW COLUMNS FROM $table";
                        $result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo '<select name="column" id="columns" class="form-select  aria-label=" style="margin-left:10px;">';
    while ($row = $result->fetch_assoc()) {
        echo '<option value="' . $row["Field"] . '">' . $row["Field"] . '</option>';
    }
echo '</select>';
}
    ?>
<select class="form-select  aria-label="Default select example" name="order" style="margin-left:10px;">
                        <option value="ORDER BY">ALPHABETICAL ORDER</option>
                        <option value="GROUP BY">GROUP WISE</option>
                        <option value="COUNT">COUNT(NO OF)</option>
                        <option value="ASC">INCREASING</option>
                        <option value="DESC">DECREASING</option>
                    </select>
                </div>
                <input type="submit" value="GENERATE" name="sbt" class="btn btn-primary button mt-3 mb-3">
            </form>
       </div>
</div>
</body>
</html>
<?php
}



if(isset($_POST['sbt'])){
    if(isset($_POST['column']) && isset($_POST['order'])){
        $a = $_POST['column'];
        $b = $_POST['order'];

        session_start();
        $db = $_SESSION['db'];
        $table = $_SESSION['table'];
        $conn = mysqli_connect("localhost","root","",$db);
        $sql = "SHOW COLUMNS FROM `$table`";
        $result = $conn->query($sql);
        $arr = array();
        if($result){
            $i=1;
            $fields;
            while($fields = mysqli_fetch_array($result)){
                array_push($arr,$fields[0]);
            }
   
        }
            header('Content-Type: text/csv; charset=utf-8');
            header('Content-Disposition: attachment; filename=data.csv');
            $output = fopen("php://output","w");
            fputcsv($output,$arr);
            $query="";
            if($b=='ORDER BY'){
                $query = "SELECT * FROM $table $b $a";

            }
            if($b=='DESC'){
                $query = "SELECT * FROM $table ORDER BY $a $b";

            }
            if($b=='ASC'){
                $query = "SELECT * FROM $table ORDER BY $a $b";

            }
            if($b=='GROUP BY'){
                $query = "SELECT *,COUNT(*) as count FROM $table GROUP BY $a";

            }
            if($b=='COUNT'){
                $query = "SELECT count($a) FROM $table;";
            }
           $result = mysqli_query($conn,$query);
            while($row = mysqli_fetch_assoc($result)){
                fputcsv($output,$row);
            }
            fclose($output);
        
            }

           
        }


?>




