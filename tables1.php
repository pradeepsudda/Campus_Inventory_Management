<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Admin Dashboard </title>
    <link rel="stylesheet" href="css/style3.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <span class="logo_name"><img src="images/logo.jpg" style="height:65px;width:65px;border-radius:50%;margin-left:70px;margin-top:15px;"></span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="dashboard.php" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="index.php">
            <i class='bx bx-box' ></i>
            <span class="links_name">Home</span>
          </a>
        </li>
        
        <li>
          <a href="services.php">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">Services</span>
          </a>
        </li>
        <li>
          <a href="add_NewAdmin.php">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Add NewAdmin</span>
          </a>
        </li>
        <li>
          <a href="about.php">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">About</span>
          </a>
        </li>
        <li>
          <a href="contact.php">
            <i class='bx bx-coin-stack' ></i>
            <span class="links_name">Contact</span>
          </a>
        </li>
        <li class="log_out">
          <a href="logout.php">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Logout</span>
          </a>
        </li>
      </ul>
  </div>
   <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard" style="color:#081D45;font-size:28px;font-weight:750;">Inventory Management</span>
      </div>
      <div class="user-profile">
        <div class="profile-image">
            <img src="images/profile.png" alt="User Photo" style="height:40px;width:45px;">
        </div>
        <div class="user-name">
          <?php
          session_start();
          if(isset($_SESSION['username'])){
            $user = $_SESSION['username'];
            echo "$user";

          }
          ?>
        </div>
    </div>
    </nav>
   <div class="home-content">
    <div class="overview-boxes">
<?php
// session_start();

$db = $_SESSION['db'];
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
$sql = "SHOW TABLES";
$result = $conn->query($sql);

echo "<form method='post' autocomplete='off'>";
echo "<div style='display:flex;flex-wrap:wrap;'>";
if($result){
    $i = 0;
    while($row = mysqli_fetch_array($result)){
        $sam = strtoupper($row[$i]);
        echo"<div class='box' style='width:300px;text-align:center;'>";
            echo "<div class='right-side'>";
              echo "<div class='box-topic'>$sam</div>";
              echo "<div class='number'></div>";
              echo "<div class='indicator'>";
              echo "<button type='submit' name='tbl' value='$sam' style='height:50px;width:200px;border-radius:10px;background-color:#042666;'>More Info</button>";
              echo "</div>
            </div>
          </div>";
        
    }
    echo"<div class='box' style='width:300px;text-align:center;font-weight:900;'>";
            echo "<div class='right-side'>";
              echo "<div class='box-topic'>NEW</div>";
              echo "<div class='number'></div>";
              echo "<div class='indicator'>";
              echo "<button type='submit' name='addtable' value='+' style='height:50px;width:200px;border-radius:10px;top:10px;'>+</button>";
              echo "</div>
            </div>
        </div>";
    echo "</form>";
    echo "<div style='width:100%;margin-top:30px;'><a href='delete_db1.php'><button type='button' name='btn' id='btn' class='btn btn-danger' style='height:50px;width:400px;' onClick='return confirm('Are you sure you want to Delete Whole Databse?')'>Delete Entire Block Data</button><div>";
   
  
    if(isset($_POST['tbl'])){
              $_SESSION['table'] = $_POST['tbl'];
              echo "<script>window.location.href='next.php'</script>";
              // header('location:next.php');
          }
          if(isset($_POST['addtable'])){
            
              echo "<script>window.location.href='add_table1.php'</script>";
              // header('location:add_table1.php');
          }
}
else{
    echo "error";
}
    

?>
</div>
</div>
</div>
</section>
<script>
let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>

</body>
</html>
