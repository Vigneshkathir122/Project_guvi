<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT); // enable exceptions
if ($_SERVER['REQUEST_METHOD']=='POST'){
    $email = $_POST['email'];
    $password = $_POST['Password'];
    $con = mysqli_connect("localhost","root","","project_Guvi");
   


$sql = "SELECT Email, password FROM user_table WHERE Email=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('s', $email);
$stmt->execute();
$result = $stmt->get_result();

while ($row = $result->fetch_assoc()) {
    if (password_verify($email, $row['password'])) {
        $message = "ok";
        
        header("Location: http://localhost/Guvi_project/index.html");
        exit();
    }
}
$message = "No";

header("Location: http://localhost/Guvi_project/index.html");
}
?>