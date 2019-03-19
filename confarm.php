<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
$emailErr = "";
$email=$password="";
$email = $_POST["email"];
$password = $_POST["password"];

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
if (empty($_POST["email"])){
    echo"<script>history.go(-1);</script>";  
    echo "<script>alert('输入邮箱不能为空')</script>";
    
}
else {
    $sql="SELECT*FROM myde WHERE email='$email'";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)){
        echo"<script>alert('该邮箱已被注册')</script>";
         echo"<script>history.go(-1);</script>";  
    }
    else if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email))
    {
        echo"<script>history.go(-1);</script>";  
        echo "<script>alert('邮箱格式不合法')</script>";  
    }
    else if(empty($_POST["password"])){ 
        echo"<script>history.go(-1);</script>";  
        echo "<script>alert('密码输入不能为空')</script>";
       
    }
    else{
       include("action.php");}
    }
}

 
?>