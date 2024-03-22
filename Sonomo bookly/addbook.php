<?php 
$host = "127.0.0.1:3307";
$dbusername = "Vinoth";
$dbpassword = "V1nThh";
$dbname="test";

// Create connection
$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
             
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 

echo $_POST['bookname']. $_POST['author']. $_POST['quantity']. $_POST['price']; 

$bookname = $_POST['Book_Name']; 
$author = $_POST['Name_Of_the_Author']; 
$quantity = $_POST['Price']; 
$price = $_POST['Quantity']; 


//add new books to db 
$sql = "INSERT INTO `book_info`(`Book_Name`, `Name_Of_the_Author`, `Price`, `Quantity`) VALUES ('$bookname','$author','$quantity','$price')"; 

if($result = $conn->query($sql)){
    $bookname=""; 
    $author=""; 
    $quantity=""; 
    $price="";

    header("location: dashboard.php"); 
} 

else{
    die("Connection failed: " . $conn->connect_error);
}

$conn->close();  
?>