<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$jobtitle = $_POST['jobtitle'];
$department = $_POST['department'];


//Database Connection//
$conn= new mysqli('localhost', 'root', '', 'login');
if($conn->connect_error){
    die('connection_fail : '.$connt->connect_error);
}else{
    $stmt = $conn->prepare("insert into login(firstname, lastname, jobtitle, department)
    values(?,?,?,?)");
    $stmt->bind_param("ssss",$firstname, $lastname, $jobtitle, $department);
    $stmt->execute();
    echo "Login SucCessFullY .....";
    $stmt->close();
    $conn->close();
}

?>