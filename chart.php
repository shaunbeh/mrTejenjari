<?php 
    $servername = "localhost";
    $username = "root";
    $userpass = "";
    $dbname = "khordad";

    $conn = new mysqli($servername, $username, $userpass, $dbname);

    if( $conn-> connect_error){
        die("خطا در اتصال" . $conn -> connect_error);
    }

    $sql = "SELECT day, temp FROM Tehran";
    $result = $conn -> query($sql);

    
    if($result -> num_rows > 0){
        $dayLabel = array();
        $tempLabel = array();
        while($row = $result -> fetch_assoc()){
        array_push($dayLabel, $row['day']);
        array_push($tempLabel, $row['temp']);
        };
    };
?>
