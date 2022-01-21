<?php 
include 'connection.php';


if(isset($_POST['submit'])){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email_id = $_POST['email_id'];
    $message = $_POST['message'];

    $insertquery = "insert into abouttable(first_name,last_name,email,message) values('$first_name','$last_name','$email_id','$message')";
    
    $res = mysqli_query($con,$insertquery);
    
    if($res){
        echo ("<script LANGUAGE='JavaScript'>
                window.alert('Message sent to green trash ✔!');
                window.location.href='about.php';
                </script>");
    }else{
        echo "<script>alert('Message not sent try again!');</script>";
    }
    
}else{
    echo "data not inserted!";
}
?>