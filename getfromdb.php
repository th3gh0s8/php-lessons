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
    </head>
    <body>
        <?php
        // put your code here
        ?>
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
            <td><?php echo $row["id"]; ?></td>
            <td><?php echo $row["name"]; ?></td>
            <td><?php echo $row["birthday"]; ?></td>
            <td><?php echo $row["email"]; ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
