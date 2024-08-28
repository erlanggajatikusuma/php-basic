<?php

include('connection.php');

$query = mysqli_query($connect, "SELECT * FROM employee");
$results = mysqli_fetch_all($query, MYSQLI_ASSOC);

?>

<html>
<body>
    <a href="add.php">Add Data</a>  
    <br/><br/>

    <table border="1">
    	<tr>
            <th>Name</th>
            <th>Address</th>
            <th>Age</th>
            <th>Gender</th>
    	</tr>
    	<?php foreach($results as $result) : ?>
	        <tr>
                        <td><?php echo $result['name']?></td>
                        <td><?php echo $result['adress']?></td>
                        <td><?php echo $result['age']?></td>
                        <td><?php echo $result['gender']?></td>
                        <td>
                                <a href="edit.php?id=<?php echo $result['id']?>">Edit</a> 
                        </td>
		</tr>
	<?php endforeach ?>
	</table>
</body>
</html>