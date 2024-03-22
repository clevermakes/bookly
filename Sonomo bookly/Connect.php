<?php
   $host = "127.0.0.1:3307";
   $dbusername = "Vinoth";
   $dbpassword = "V1nThh";
   $dbname="test";
    
    // Create connection
    $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM `owner`";
    $result = $conn->query($sql);

    while ($row = $result->fetch_assoc()) {
        $uname = $row["username"]; 
        $pwd = $row["password"];
    }

    if($username==$uname && $password==$pwd){
        header ("Location: dashboard.php");
    }
    else {
        echo "user name password wrong";
        header ("Location: login.php");
    }
    
    
    $conn->close();  

?>

