<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="../CSS/style.css">
        
    </head>
    <body>
        <?php
        // put your code here
        ?>
        <form action="dReg.php" method="post">
            Name: <input type="text" name="uname" id="uname"> <br>
            BirthDay: <input  type="date" name="bd" ><br>
            Email:<input type="email" name="em"><br>
            
                    <table>
        <tr>
            <th>id</th><td>name</th><th>birthday</th><th>email</th>

        </tr>
        <?php
        include './dbConnection.php';
        $query = "SELECT id,name,birthday,email FROM users";
        $result = $connection->query($query);
        while ($row= $result->fetch_assoc()){
        ?>
        <tr>
            <td><input type="number" name="id" value="<?php echo $row["id"]; ?>"></td>
            <td><input type="text" name="name" value="<?php echo $row["name"]; ?>"></td>
            <td><input type="date" name="date" value="<?php echo $row["birthday"]; ?>"></td>
            <td><input type="email" name="email" value="<?php echo $row["email"]; ?>"></td>
        </tr>
        <?php } ?>
    </table>
            
            <input type="submit" value="register">
        </form>
    </body>
</html>
