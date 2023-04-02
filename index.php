<?php
session_start();
if (!isset($_SESSION['email']) || !isset($_SESSION['role'])) {
    header('Location: login.php');
}
if ($_SESSION['role']=='admin') {
    require("admin.php");
}
if ($_SESSION['role']=='doctor') {
    require("doctorDash.php");
}
if ($_SESSION['role']=='receptionist') {
    require("receptionist.php");
}
?>