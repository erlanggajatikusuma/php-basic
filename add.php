<html>
    <form action="insert.php" method="post">
        <label>Name</label><br/>
        <input type="text" name="name"/>
        <br/><br/>
        
        <label>Address</label><br/>
        <textarea name="address" cols="30" rows="10"/></textarea>
        <br/><br/>
        
        <label>Age</label><br/>
        <input type="number" name="age"/>
        <br/><br/>
        
        <label>Gender</label><br/>
        <select name="gender">
            <option value="Man">Man</option>
            <option value="Woman">Woman</option>
        </select>
        <br/> </br>

        <button type="submit">Add</button>
    </form>
</html>