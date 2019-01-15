<?php
    require_once 'login.php';
    $connection = mysqli_connect($host, $user, $pass, $db, $port)or die(mysql_error());
    $query = "SELECT * FROM fireStarters";
    $result = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($result)) {
        echo "The gen is: " . $row['gen'] . " and the name is: " . $row['name'];
    }
?>
