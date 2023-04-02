<?php 
session_start();
if (isset($_POST['Submit'])) {
    require('connection.php');
    extract($_POST);

    $sql = "select name,password,role from user where email='$email'";
    $result = $conn->query($sql);
    if ($result->num_rows == 0) {
        header("Location: login.php?error=Email not found");
    }
    else {
        $row = $result->fetch_assoc();

        if (md5($pass) == $row['password']) {
            $_SESSION['email'] = $email;
            $_SESSION['role'] = $row['role'];
            $_SESSION['name'] = $row['name'];
            header("Location: index.php");
        }
        else {
            header("Location: login.php?error=Invalid Password");
        }
    }
}
else {
    header('Loaction: login.php');
}

?>