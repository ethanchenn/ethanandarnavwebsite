<?php
    require_once 'login.php';
    $connection = mysqli_connect($host, $user, $pass, $db, $port)or die(mysql_error());
    $inp = isset($_POST['test']) ? $_POST['test'] : false;
    if ($inp){
        $param = $_POST['test'];
        $query = "SELECT * FROM waterStarters WHERE gen = $param";
        $result = mysqli_query($connection, $query);
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<head>";
            echo "<link href='phpstyle.css' rel='stylesheet' type='text/css'>";
            echo "</head>";
            echo "<center>";
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
