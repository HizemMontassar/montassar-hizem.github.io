<?php
    
    $servername = "server52.web-hosting.com";
    $username = "myntuybh";
    $password = "92504774@Hazerforta";
    $dbname = "myntuybh_contactme";
    
    $con = mysqli_connect($servername,$username,$password,$dbname);
    
     $fullName = $_POST['fullName'];
     $email = $_POST['email'];
     $comment = $_POST['comment'];
    
    $sql = "insert into client(fullName,email,comment,date) values('".$fullName."','".$email."','".$comment."',NOW())";
    mysqli_query($con,$sql);
    header("Location: https://hizem-montassar.myntaa.xyz/#contact");
    


?>