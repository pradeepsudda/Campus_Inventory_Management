<?php

session_start();
$db = $_SESSION['db'];

$conn = mysqli_connect('localhost',"root","",$db);

$sql = "DROP database `$db`";

$result = $conn->query($sql);
if(!$result){
    echo $sql.conn->error;
}
else{
   header('location:dashboard.php');
}

?>