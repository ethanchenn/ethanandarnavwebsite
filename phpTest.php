<?php
    require_once 'login.php';
    $connection = mysqli_connect($host, $user, $pass, $db, $port)or die(mysql_error());
    
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($result)) {
        echo "The ID is: " . $row['id'] . " and the Username is: " . $row['username'];
    }
?>
