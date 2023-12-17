<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style1.css">
    <title>Inventory Management - Services</title>
    <style>
        /* services-style.css */
.title {
    color: #333;
}

.subtitle {
    color:  #333;
}

.services-content {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    margin: 20px;
    overflow: hidden; /* Hide vertical scrollbar */
}

.service {
    width: 300px;
    margin: 20px;
    padding: 20px;
    background-color:#777;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}
h2{
    color:red;
}
p{
    color:white;
}
    </style>
</head>
<body style="height:800px;"><center>
    <div class="navbar">
        <a href="home.php" class="active">Home</a>
        <a href="dashboard.php" class="active">Dashboard</a>
        <a href='logout.php'class='float-right'>Logout</a>
        <?php
        session_start();
        if(!isset($_SESSION['username'])){
            echo "<a href='#' onclick='openLoginForm()' class='float-right'>Login</a>";
        }
       ?>
    </div>

    <div class="container" style="margin-top:40px;">
        <h1 class="title">Services</h1>
        <p class="subtitle">Empowering Your Inventory Management</p>
    </div>

    <div class="services-content">
        <div class="service">
            <h2>Manage Large Amounts of Data</h2><br><br>
            <p>Efficiently handle and organize extensive datasets to streamline your inventory management processes.</p>
        </div>

        <div class="service">
            <h2>Dynamic Creation of Databases and Tables</h2><br><br>
            <p>Create databases and tables dynamically to adapt to your evolving business needs. Enjoy flexibility in managing your data structures.</p>
        </div>

        <div class="service">
            <h2>Record Generation with Customizable Tables</h2><br><br>
            <p>Generate records within customizable tables, tailoring the structure to match your specific requirements for accurate data representation.</p>
        </div>

        <div class="service">
            <h2>CRUD Operations on Tables</h2><br><br>
            <p>Perform Create, Read, Update, and Delete (CRUD) operations on tables effortlessly. Maintain data accuracy and relevance at all times.</p>
        </div>

        <div class="service">
            <h2>Secure Access Control</h2><br><br>
            <p>Admin-based access control ensures secure management of your inventory. Define roles and permissions to safeguard sensitive data.</p>
        </div>
    </div>

    <div id="loginFormOverlay" class="overlay">
        <!-- Login Form content (same as in the original code) -->
    </div>

    <footer>
        <p>&copy; 2023 Inventory Management</p>
    </footer>

    <script>
        // JavaScript content (same as in the original code)
    </script>
    </center>
</body>
</html>
