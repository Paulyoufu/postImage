<?php
//$name =isset($_POST['name1']) ? htmlspecialchars($_POST['name1']) : '';
$city = isset($_POST['photo1']) ? htmlspecialchars($_POST['photo1']) : '';
//echo 'Dear ' . $name;
echo 'Hope you live well ' . $city;
$servername = "192.168.1.27";
$username = "root";
$password = "";
$dbname = "laravel";
// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);

// 检测连接
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$sql = "INSERT INTO articles(name,photo)
VALUES ('jgohk', '". $city."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();




?>