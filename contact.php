<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style1.css">
    <title>Contact - Inventory Management</title>
    <style>
        /* Add your CSS styles here for improved form layout */
        .container {
            width: 40%;
            margin: auto;
        }

        form {
            display: grid;
            grid-template-columns: 1fr;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input, textarea {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            margin-bottom: 10px;
            border-radius:5px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #081D45;
            color: #fff;
            border: none;
            cursor: pointer;
            border-radius:5px;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <a href="index.php">Home</a>
        <a href="about.php">About</a>
        <a href="contact.php" class="active">Contact</a>
        <?php
        session_start();
        if(!isset($_SESSION['username'])){
            echo "<a href='#' onclick='openLoginForm()' class='float-right'>Login</a>";
        }
       ?>
    </div>

    <div class="container">
        <h1 class="title" style="margin-top:50px;">Contact Us</h1>
        <p class="subtitle" style="color:black;font-weight:700;margin-top:-10px;">Get in touch with us for any inquiries or assistance.</p>

        <form method="post" action="contact_process.php" autocomplete="off">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="4" required></textarea>

            <button type="submit">Submit</button>
        </form>
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
