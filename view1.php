<?php
session_start();
$db = $_SESSION['db'];
$table = $_SESSION['table'];
$ct=1;
$f1 = $_SESSION['f1'];
$conn = mysqli_connect('localhost',"root","","$db");

$sql = "SELECT * from `$table`";
$result = $conn->query($sql);

if(!$result){
    echo "connection error";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TABLE VIEW</title>
    <!-- iconslink -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-light " style="box-shadow:0 2px 4px 0 rgba(158, 150, 150, 0.3);position:fixed;width:100%;overflow:hidden;z-index:9;">
        <div class="container-fluid">
          <a class="navbar-brand text-danger fw-bold" href="dashboard.php">Dashboard</a>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active text-secondary fw-bold" aria-current="page" href="home.php" style="margin-left:10px;margin-top:5px;">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active text-secondary fw-bold" aria-current="page" href="tables1.php" style="margin-left:10px;margin-top:5px;">AllTables</a>
              </li>
              <form class="d-flex" role="search" style="margin-left:30px;margin-top:6px;" action="export.php" method="post">
               <div class="d-grid gap-3 d-md-block ">
               <a href="export.php"><button  type="submit" name="generate" class="btn btn-secondary  btn-sm fw-normal" style="margin-right:10px;height:40px;font-weight:700px;" value="CSV Export">Record Generator</button></a>
               <a href="export.php"><button  type="submit" name="export" class="btn btn-secondary   btn-sm fw-normal" style="margin-right:10px;width:80px;height:40px;" alue="Records Export">CSV</button></a>
              </div>
              </form>
              <li style="margin-left:20px;margin-top:6px;" >
              <a href="insert12.php"><button type="button" class="btn btn-sm btn-secondary  fw-normal" style="margin-right:10px;width:80px;height:40px;font-weight:700px;">Insert</button></a>
              </li>
            </ul>
            
            <form class="d-flex" role="search">
               <div class="d-grid gap-3 d-md-block ">
                <!-- <a href="total_data1.php"><button type="button" class="btn btn-secondary   btn-sm fw-normal me-md-2" style="margin-right:10px;width:80px;height:40px;">Record</button></a> -->
                <a href="delete_table1.php"><button type="button" class="btn btn-danger  btn-sm fw-normal" style="margin-right:10px;width:80px;height:40px;" onClick="return confirm('Are you sure you want to Delete ?')">Delete</button></a>
               </div>
            </form>
          </div>
        </div>
      </nav>
    <div class="container p-1" >
        <div class="mx-auto p-1" style="margin-top:70px;">
        <table id="example" name="tle" class="table table-striped" >
        <thead>
            <tr> 
               <?php if(isset($_SESSION['f1']))echo "<th>".$_SESSION['f1']."</th>"?>
               <?php if(isset($_SESSION['f2']))echo "<th>".$_SESSION['f2']."</th>"?>
               <?php if(isset($_SESSION['f3']))echo "<th>".$_SESSION['f3']."</th>"?>
               <?php if(isset($_SESSION['f4']))echo "<th>".$_SESSION['f4']."</th>"?>
               <?php if(isset($_SESSION['f5']))echo "<th>".$_SESSION['f5']."</th>"?>
               <?php if(isset($_SESSION['f6']))echo "<th>".$_SESSION['f6']."</th>"?>
               <?php if(isset($_SESSION['f7']))echo "<th>".$_SESSION['f7']."</th>"?>
               <?php if(isset($_SESSION['f8']))echo "<th>".$_SESSION['f8']."</th>"?>
               <?php if(isset($_SESSION['f9']))echo "<th>".$_SESSION['f9']."</th>"?>
               <?php if(isset($_SESSION['f10']))echo "<th>".$_SESSION['f10']."</th>"?>
               <?php if(isset($_SESSION['f11']))echo "<th>".$_SESSION['f11']."</th>"?>
               <?php if(isset($_SESSION['f12']))echo "<th>".$_SESSION['f12']."</th>"?> 
               <?php if(isset($_SESSION['f13']))echo "<th>".$_SESSION['f13']."</th>"?>
               <?php if(isset($_SESSION['f14']))echo "<th>".$_SESSION['f14']."</th>"?>
               <?php if(isset($_SESSION['f15']))echo "<th>".$_SESSION['f15']."</th>"?>
               <?php if(isset($_SESSION['f16']))echo "<th>".$_SESSION['f16']."</th>"?>
               <?php if(isset($_SESSION['f17'])){
                echo "<th>".$_SESSION['f17']."</th>";
               }?>
                
              <th>EDIT/DELETE</th>
             
            </tr>
        </thead>
        <tbody>
            <?php 
            if($result->num_rows>0){
            while($row = mysqli_fetch_assoc($result)){
                ?>
           <tr>

              <?php if(isset($_SESSION['f1']))echo "<td>".$row[$_SESSION['f1']]."</td>"?>
              <?php if(isset($_SESSION['f2']))echo "<td>".$row[$_SESSION['f2']]."</td>"?>
              <?php if(isset($_SESSION['f3']))echo "<td>".$row[$_SESSION['f3']]."</td>"?>
              <?php if(isset($_SESSION['f4']))echo "<td>".$row[$_SESSION['f4']]."</td>"?>
              <?php if(isset($_SESSION['f5']))echo "<td>".$row[$_SESSION['f5']]."</td>"?>
              <?php if(isset($_SESSION['f6']))echo "<td>".$row[$_SESSION['f6']]."</td>"?>
              <?php if(isset($_SESSION['f7']))echo "<td>".$row[$_SESSION['f7']]."</td>"?>
              <?php if(isset($_SESSION['f8']))echo "<td>".$row[$_SESSION['f8']]."</td>"?>
              <?php if(isset($_SESSION['f9']))echo "<td>".$row[$_SESSION['f9']]."</td>"?>
              <?php if(isset($_SESSION['f10']))echo "<td>".$row[$_SESSION['f10']]."</td>"?>
              <?php if(isset($_SESSION['f11']))echo "<td>".$row[$_SESSION['f11']]."</td>"?>
              <?php if(isset($_SESSION['f12']))echo "<td>".$row[$_SESSION['f12']]."</td>"?>
              <?php if(isset($_SESSION['f13']))echo "<td>".$row[$_SESSION['f13']]."</td>"?>
              <?php if(isset($_SESSION['f14']))echo "<td>".$row[$_SESSION['f14']]."</td>"?>
              <?php if(isset($_SESSION['f15']))echo "<td>".$row[$_SESSION['f15']]."</td>"?>
              <?php if(isset($_SESSION['f16']))echo "<td>".$row[$_SESSION['f16']]."</td>"?>
              <?php if(isset($_SESSION['f17']))echo "<td>".$row[$_SESSION['f17']]."</td>"?>
             <!-- <td><a  href="update1.php?<?php echo $_SESSION['f1']?>=<?php echo $row[$f1];?>"><button type="button" name='update' id='update'>EDIT<button></a>
            <a href="delete1.php?<?php echo $_SESSION['f1']?>=<?php echo $row[$f1];?>"><button type="button" name='delete' id='delete' >DELETE</button></a></td> -->
            <td><button title="edit" style="border:3px solid rgb(42, 113, 137); width:60px;"><a href="update12.php?<?php echo $_SESSION['f1']?>=<?php echo $row[$f1];?>"><i class="fa-solid fa-pen-to-square fa-xl" style="color: #3281a9;"></i></i></button></a>
            <button title="delete" style="border:3px solid red;width:60px;"><a href="delete1.php?<?php echo $_SESSION['f1']?>=<?php echo $row[$f1];?>"><i class="fa-sharp fa-solid fa-trash fa-lg" style="color: #ff0000;"></i></a></button></td>
              
            </tr>
             
       <?php }} ?>
        </tbody>
               
    </table>
</div>
</div>
 <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script>
	
     $(document).ready(function () {
    $('#example').DataTable();
    });

    </script>
    
</body>
</html>