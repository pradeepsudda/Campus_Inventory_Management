<?php
session_start(); // Start the session

if(isset($_SESSION['username'])) {
    session_unset();
    session_destroy();
    header("Location:index.php");
} else {
    header("Location:index.php");
    exit();
}
?>
