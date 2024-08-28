<?php

include('connection.php'); // Mengkoneksikan dengan database

$id = $_POST['id'];
// Karena form menggunakan method post kita gunakan $_POST
$name = $_POST['name']; // Index didalamnya sesuai dengan input name yang ada di form
$address = $_POST['address'];
$age = $_POST['age'];
$gender = $_POST['gender'];

$update = mysqli_query($connect,"UPDATE employee SET name='$name', address='$address', age='$age', gender='$gender' WHERE id='$id' "); //menggunakan kondisi where untuk menyimpan dengan data spesifik

if($update) 
    header('Location:list.php'); // Jika berhasil akan di arahkan ke halaman list.php
else
    echo 'Input data gagal'; // Jika gagal akan keluar pesan tersebut
?>