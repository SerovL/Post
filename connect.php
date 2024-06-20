<?php
$connect = mysqli_connect(hostname: 'localhost', username: 'root', password: '', database: 'Blog211' );

if(!$connect){
    die('ошибка ');
}