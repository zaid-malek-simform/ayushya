<?php
require ("connection.php");
if (isset($_POST['addstaff'])) {
    extract ($_POST);   
    $sql = "update user set name='$name',email='$email',phone=$contact,role='$role',updated_at=current_timestamp() where id = $id";
    $result = $conn->query($sql);
    if ($result) {
        header("Location: manage-staff.php");
    } 
    else {
        echo $sql;
    }
}
else {
    header('Loaction: manage-staff.php');
}
?>