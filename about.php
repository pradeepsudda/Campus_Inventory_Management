<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style1.css">
    <title>About - Inventory Management</title>
</head>
<body>
    <div class="navbar">
        
        <a href="index.php">Home</a>
        <a href="about.php" class="active">About</a>
        <a href="contact.php">Contact</a>
        <?php
        session_start();
        if(!isset($_SESSION['username'])){
            echo "<a href='#' onclick='openLoginForm()' class='float-right'>Login</a>";
        }
       ?>
    </div>

    <div class="container" style="margin-top:100px;">
        <h1 class="title">About Us</h1>
        <p class="subtitle" style="color:black;font-weight:700;">Learn more about Rgukt, Inventory Mangement.</p>
        <p style="color:black;font-weight:600;padding:20px;">RGUKT Basar's Inventory Management stands as a cornerstone of efficient resource utilization within the institution. Focused on technology and science education, RGUKT Basar integrates cutting-edge inventory practices to streamline operations. With a commitment to empowering rural youth through knowledge and innovation, the Inventory Management system ensures a seamless flow of resources, supporting the institution's vision for excellence. The technology-driven approach not only enhances efficiency but also reflects the university's dedication to staying at the forefront of educational advancement. RGUKT Basar's Inventory Management is an integral part of the institution's commitment to providing a world-class learning environment for its students.</p>
        <!-- Add your about content here -->
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
