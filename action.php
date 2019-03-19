<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";
 
// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 

if ($_SERVER["REQUEST_METHOD"] == "POST"){
$emailErr = "";
$email=$password="";
$email = $_POST["email"];
$password = $_POST["password"];


$sql = "INSERT INTO myde (code,email)
VALUES ('$password','$email')";
 
if ($conn->query($sql) === TRUE) {
    echo "注册成功! 5秒后将自动跳转到登陆界面。";
    header("Refresh:5;url=signinsystem.html");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}}
 
$conn->close();
?>