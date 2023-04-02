<?php
if (isset($_POST['data'])) {
    require ("connection.php");
    $query = "select * from user where id =".$_POST['data'];
    $result = $conn->query($query);
    $row=$result->fetch_assoc();
    echo json_encode($row);
}
else {
    echo 1;
}
?>