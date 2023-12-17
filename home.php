<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style2.css">
    <title>Inventory Management</title>
</head>
<body>
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

    <div class="container">
        <h1 class="title">RGUKT Inventory Management</h1>
        <p class="subtitle" style="color:dark-gray;">Enhance campus operations using a performance-driven system that ensures swift and effective management of inventory items.</p>
    </div>

    <div id="loginFormOverlay" class="overlay">
        <div class="login-form">
            <span class="close" onclick="closeLoginForm()">&times;</span>
            <h2>Login</h2>
            <form method="post" action="login.php">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>

                <button type="submit">Login</button>
            </form>
        </div>
    </div>

    <footer>
        <p>&copy; 2023 Rgukt Inventory Management</p>
    </footer>

    <script>
        // Add the following JavaScript code at the end of your existing script.js file

function openLoginForm() {
    document.getElementById('loginFormOverlay').style.display = 'flex';
}

function closeLoginForm() {
    document.getElementById('loginFormOverlay').style.display = 'none';
}

    </script>
</body>
</html>
