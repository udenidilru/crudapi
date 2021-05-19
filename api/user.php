<?php 

header("Access-Control-Allow-Methods: PUT, POST, GET");

include("./connection.php");

$useremail = $_GET("email");
$userpassword = $_GET("password");

$query = "select * from user where email=$useremail and password = $userpassword";
$result = mysqli_query($con , $query);
$array = mysqli_fetch_array($result);

$id = $array['id'];
$name = $array['name'];
$email = $array['email'];
$username = $array['username'];

echo json_encode(
    array(
        'id' => $id,
        'name' => $name,
        'username' => $username,
        'email' => $email
    )
    );

?> 