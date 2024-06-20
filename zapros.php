<?php
    require_once 'connect.php';
    $input = $_POST['input'];
    $textarea = $_POST['text_area'];

    $sql = "INSERT INTO `Blog211`(`input`, `text_area`) VALUES ('$input','$textarea')";

   mysqli_query($connect, $sql);
   header('Location:index.html');