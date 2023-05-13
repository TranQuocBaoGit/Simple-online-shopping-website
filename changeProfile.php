<?php
	require_once "database/dtb.php";
    session_start();
    $name = $_POST['name'];
    $birthdate = intval($_POST['birthdate']);
    $address = $_POST['address'];
    $sql = 'UPDATE users 
            SET name =\''. $name. '\', birthdate ='.$birthdate.', address = \''.$address.'\' 
            WHERE userId = '. $_SESSION["userId"];
    mysqli_query($connection, $sql);
    header("Location: ../index.php?page=userSetting");
    ?>