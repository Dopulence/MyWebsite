<?php
$to = 'amishajais31072000@gmail.com';
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$stype = $_POST['stype'];
$sname = $_POST['sname'];
$message ='
        Name: '.$name.'
        phone: '.$phone.'
        Service Type: '.$stype.'
        Service Name: '.$sname.'.';

 $headers = "From:" . $email;
 if (@mail($to, $email, $message, $headers))
    {
        echo 'The message has been sent.';
    }else{
        echo 'failed';
    }
?>