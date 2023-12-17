<?php
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize input (you can add more validation as needed)
    $newUsername = filter_input(INPUT_POST, 'newUsername', FILTER_SANITIZE_STRING);
    $newPassword = filter_input(INPUT_POST, 'newPassword', FILTER_SANITIZE_STRING);

    // Add the new admin to the database (replace with your database connection logic)
    $conn = mysqli_connect('localhost', 'root', '', 'inventory');

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Hash the password (use a stronger hashing mechanism in a production environment)
    // $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

    // Insert the new admin into the admin table
    $sql = "INSERT INTO admin (username, password) VALUES ('$newUsername', '$newPassword')";

    if (mysqli_query($conn, $sql)) {
        // Redirect to the dashboard page after adding the new admin
        header('Location: dashboard.php');
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style1.css">
    <title>Add New Admin</title>
    <style>
        /* Add the following styles to your existing CSS file or create a new one */

body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0px;
    padding-top:50px;
}

.container {
    width: 80%;
    max-width: 400px;
    margin: 50px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1 {
    text-align: center;
    color: #333;
}

form {
    display: flex;
    flex-direction: column;
}

label {
    margin-bottom: 8px;
    color: #555;
}

input {
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

button {
    background-color: #4caf50;
    color: #fff;
    padding: 10px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
}

button:hover {
    background-color: #45a049;
}

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

    <div class="container">
        <h1 class="title">Add New Admin</h1>
        <form method="post" action="">
            <label for="newUsername">Username:</label>
            <input type="text" id="newUsername" name="newUsername" required>

            <label for="newPassword">Password:</label>
            <input type="password" id="newPassword" name="newPassword" required>

            <button type="submit">Add Admin</button>
        </form>
    </div>
</body>
</html>
