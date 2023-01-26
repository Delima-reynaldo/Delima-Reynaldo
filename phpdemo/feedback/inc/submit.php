<?php
    include_once 'dbh.php';

    $name = $_POST['name'];
    $email = $_POST['email'];
    $body = $_POST['body'];
   


    $sql = "INSERT INTO feedback ( Name, Email, Body, Date) VALUES ('$name','$email','$body' ,Now()); ";
    mysqli_query($conn, $sql);

    header("Location: ../feedback.php");