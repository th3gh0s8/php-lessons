<?php
include './actions/dbconnection.php';
$query = "SELECT * FROM product_category";
$result = $conn->query($query);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <div align="center">
            <form method="get" action="advancedSearch.php">
                <input type="text" nsme="keywords"/>
                <select name="selectedCategory">
                    <option value="">all categories</option>
                    <?php
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            ?>
                            <option value="<?php echo $row['id_product_category'] ?>"><?php echo $row ['category_name'] ?></option>

                            <?php
                        }
                    }
                    ?>
                    
                </select>
                <input type="submit" value="search" />
            </form>
            <img src="images/photo_2021-02-10_14-00-43.jpg">
        </div>
        
    </body>
</html>
