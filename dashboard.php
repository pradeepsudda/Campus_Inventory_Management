<?php
// phptags  --whitespace  *.php
 session_start();
  $conn = mysqli_connect('localhost',"root","");
  $sql = "SHOW DATABASES";
  $result = $conn->query($sql);
 
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Admin Dashboard </title>
    <link rel="stylesheet" href="css/style3.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
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
          <a href="home.php">
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
            <i class='bx bx-book-alt' ></i>
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
          if(isset($_SESSION['username'])){
            $user = $_SESSION['username'];
            echo "$user";

          }
          ?>
        </div>
    </div>
    </nav>

    <div class="home-content">
      <div class="overview-boxes" >


<?php
echo "<form method='post' autocomplete='off'><div style='display:flex;flex-wrap:wrap;'>";

if($result){
    $i = 0;
    while($row = mysqli_fetch_array($result)){
        if($row[$i]=='information_schema' || $row[$i]=='mysql' || $row[$i]=='performance_schema' ||  $row[$i]=='phpmyadmin' || $row[$i]=='inventory'){
            echo "";
        }
        else{
            $samp = strtoupper($row[$i]);
            $sql1 = "SELECT COUNT(*) FROM `information_schema`.`tables` WHERE `table_schema` = '$row[$i]'; ";
            $result1 = $conn->query($sql1);
            if($result1){
                $row1 = mysqli_fetch_array($result1);
            }
            echo"<div class='box' style='width:300px;text-align:center;'>
            <div class='right-side'>
            <div class='box-topic'>$samp</div>
            <div class='number'>$row1[0]</div>
            <div class='indicator'>
            <button type='submit' name='db' value='$samp' style='height:50px;width:200px;border-radius:10px;background-color:#042666;'>More Info</button>
            </div>
            </div>
            </div>";
        }
    }
    echo"<div class='box' style='width:300px;text-align:center;'>
    <div class='right-side'>
    <div class='box-topic'>NEW</div>
    <div class='indicator' style='background-color:white;'>
    <button type='submit' name='adddb' value='+' style='height:50px;width:200px;border-radius:10px;margin-top:10px;'>+</button>
    </div></div></div></div></form>";

if(isset($_POST['db'])){
    $_SESSION['db'] = $_POST['db'];
    echo "<script>window.location.href='tables1.php'</script>";
    // echo "window.location.href='tables1.php'";
    // header('location:tables1.php');
    // exit();
}

if(isset($_POST['adddb'])){
  echo "<script>window.location.href='add_db1.php'</script>";
  // echo "window.location.href='add_db1.php'";
    // header('location:add_db1.php');
    exit();
}
}?>
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

<!-- // <button type='submit' name='db' value='$samp' style='height:50px;width:200px;border-radius:10px;'>More Info</button> -->
