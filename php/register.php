<?php 
    extract($_POST);
    $con = mysqli_connect("localhost","root","","project_Guvi");
    
    if ($con->connect_error) {  die("Connection failed: " . $conn->connect_error);
    }
    
    else{
        if ($password!== $c_password) {
            die('Password and Confirm password should match!');   
         }
         else{
        $query = $con->prepare("INSERT INTO user_table (FirstName,LastName,Email,password,c_password,MobileNumber,gender,DOB) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $query->bind_param("ssssssss",$FirstName,$LastName,$Email,$password, $c_password, $MobileNumber, $gender, $DOB);
         }
    }
    
    $query->execute();
    $query->close();
    $con->close();
    header("Location: http://localhost/Guvi_project/index.html");
    exit;
    // echo "success";
?>