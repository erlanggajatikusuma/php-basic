<?php 

include('connection.php');

$id = $_GET['id']; // Untuk mengambil id yang dilempar dari form list.php

$query = mysqli_query($connect,"SELECT * FROM employee WHERE id='$id' LIMIT 1"); //mengambil data sesuai dengan id nya
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>

<html>
    <form action="update.php" method="post">
        
        <input type="hidden" name="id" value=<?php echo $result[0]['id']?>> <!--untuk menyimpan id tanpa menampilkan data id pada form-->
         
        <label>Name</label><br/>
        <input type="text" name="name" value="<?php echo $result[0]['name']?>"/> <!--menampilkan data sesuai dr variabel $result diatas-->
        <br/><br/>
        
        <label>Address</label><br/>
        <textarea name="address" cols="30" rows="10"><?php echo $result[0]['address'] ?></textarea>
        <br/><br/>
        
        <label>Age</label><br/>
        <input type="text" name="age" value="<?php echo $result[0]['age'] ?>" />
        <br/><br/>
        
        <label>Gender</label><br/>
        <select name="gender">
            <option value="Man" <?php echo ($result[0]['gender'] == 'Man') ? 'selected' : '';?>>Man</option>
            <option value="Woman" <?php echo ($result[0]['gender'] == 'Woman') ? 'selected' : '';?>>Woman</option>
        </select>
        <br/><br/>
        
        <button type="submit">Update</button>
    </form>
</html>