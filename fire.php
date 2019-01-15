<?php
    include_once 'Fire.html';
    require_once 'login.php';
    $connection = mysqli_connect($host, $user, $pass, $db, $port)or die(mysql_error());
    $inp = isset($_POST['test']) ? $_POST['test'] : false;
    if ($inp){
        $param = $_POST['test'];
        $query = "SELECT * FROM fireStarters WHERE gen = $param";
        $result = mysqli_query($connection, $query);
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<center>";
            echo "<br>";
            echo "<h2>Gen $param: " . $row['name']."</h2>";
            echo "<br>";
            echo "<img src=" . $row['picture'] . ">";
            echo "</center>";
            echo "<br>";
            echo "<h4>";
            echo "Second Evolution: " . $row['ev1'];
            echo "<br>";
            echo "Third Evolution: " . $row['ev2'];
            echo "<br>";
            echo $row['description'];
        }
    }


    
?>
