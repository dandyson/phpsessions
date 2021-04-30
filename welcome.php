<?php 
    session_start();
    if (isset($_SESSION['username'])) {
        echo 'Welcome '. $_SESSION['username']. '<br>';
        echo '<a href="logout.php?logout">Logout</a>';
    } else {
        header("location:index.php");
    }
?>