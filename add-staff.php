<?php
if (isset($_POST['addstaff'])) {
    require('connection.php');
    extract($_POST);

    $sql = "insert into user(name,email,phone,password,role) values('$name','$email',$contact,'".md5($pass)."','$role')";
    $result = $conn->query($sql);
    if ($result) {
        header("Location: manage-staff.php");
    } 
}
else {
    header('Loaction: manage-staff.php');
}
?>