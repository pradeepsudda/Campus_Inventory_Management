<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style1.css">
    <title>Inventory Management</title>
</head>
<body>
    <div class="navbar">
        <a href="index.php" class="active">Home</a>
        <a href="about.php">About</a>
        <a href="contact.php">Contact</a>
        < <?php
        session_start();
        if(!isset($_SESSION['username'])){
            echo "<a href='#' onclick='openLoginForm()' class='float-right'>Login</a>";
        }else{
            header('location:dashboard.php');
        }
       ?>
    </div>

    <div class="container">
        <h1 class="title">RGUKT Inventory Management</h1>
        <p class="subtitle" style="font-weight:700">Maximize Productivity with Smart Inventory Handling</p>
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

function openLoginForm() {
    document.getElementById('loginFormOverlay').style.display = 'flex';
}

function closeLoginForm() {
    document.getElementById('loginFormOverlay').style.display = 'none';
}

    </script>
</body>
</html>
