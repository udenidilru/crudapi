<?php 

header("Access-Control-Allow-Methods: PUT, POST, GET");

include("./connection.php");

$useremail = $_GET["email"];
$userpassword = $_GET["password"];

if(!isset($useremail) || !isset($userpassword)){
    echo json_encode(
        array(
            'message': 'please enter both email and password'
        )
        );
}else{
    $query = "select*from user where email='$useremail' AND password='$userpassword'";
    $result = mysqli_query($con, $query);
    $rows = mysqli_num_rows($result);

    if($rows == 1){
        echo json_encode(
            array(
                'message' => 'Login Successful'
            )
        );
    }else{
        echo json_encode(
            array(
                'message' => 'invalid email and password'
            )
        );
    }
}

?>