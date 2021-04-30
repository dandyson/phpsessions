<?php 
require_once('connection.php');
// Start session
session_start();
if (isset($_POST['login'])) {
    if (empty($_POST['username']) || empty($_POST['password'])) {
        header("location:index.php?Empty=Please Fill in the blanks");
    } else {
    $query = "SELECT * FROM users WHERE username='". $_POST['username']."' and password='". $_POST['password']."'";
    $result = mysqli_query($link, $query); 
}
    if (mysqli_fetch_assoc($result)) {
        $_SESSION['username'] = $_POST['username'];
        header('location:welcome.php');
    } else {
        header('location:index.php?Invalid=Please Enter Correct Username and Password');
    }
}



?>