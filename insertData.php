<?php

if(isset($_POST['name'])){
    $name=$_POST['name'];
    $address=$_POST['address'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];

include("./config.php");
$student = $conn->prepare("
INSERT INTO `input` (`Name`,`Address`,`Phone`,`Email`)
VALUES ('$name','$address','$email','$phone')
");

$result =$student->execute();
if($result){
    echo "data have been successfully inserted";
}
else{
    echo "Operation failed";
}

}
?>
