<?php 

include('connection.php');

$employee_name = $_POST['name'];
$employee_address = $_POST['address'];
$age = $_POST['age'];
$gender = $_POST['gender'];

// $insert = mysqli_query($connect, "INSERT INTO employee SET name='$employee_name', address='$employee_address', age='$age', gender='$gender' ");
$insert = mysqli_query($connect, "INSERT INTO `employee`(`name`, `adress`, `age`, `gender`) VALUES ('$employee_name','$employee_address','$age','$gender')");
// $insert = mysqli_query($connect, "INSERT INTO employee (id, name, address, age, gender) VALUES (1, '$employee_name', '$employee_address', '$age', '$gender')");


if ($insert) echo $employee_name;
// if($insert) 
 header('Location:list.php');
else 
 echo 'Data input failed...'

?>