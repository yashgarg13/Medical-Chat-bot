<?php
    $conn=new mysqli('localhost','root','','SE');
    $name=$_GET['name'];
    $email=$_POST['email'];
    $message=$_UPDATE['message'];
    if($conn->connect_error){
        echo "error";
    }
    else{
        $stmt=$conn->prepare("insert into users(name,email,message) values(?,?,?)");
        $stmt->bind_param("sss",$name,$email,$message);
        $stmt->execute();
        echo "submitted successfully...";
        $stmt->close();
        $conn->close();
    }
?>