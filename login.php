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
        <center>  
            <form action="check.php" method="post">
                <div marin-left="30000px"><div>
                    
                        <span>Name</span>
                        <input type = "text" name = "uname"><br>

                        <span>Password</span>
                        <input type = "password" name = "pword"><br>
                        
                        <input type='submit' value="Login">

                        <!--<select name = "y">
                            <option></option>
                        </select>
                        <select name = "m">
                            <option></option>
                        </select>
                        <select name = "d">
                         <?php// for ($i = 1; $s <= 10; $i++) { ?>
                            <option><?php //echo $i ?></option>
                         <?php //} ?>

                    </select>-->
                </div>
                <div>
                    <input type="submit" value="singUp">
                </div>
            </div>
            </form>

        </center>
    </body>
</html>