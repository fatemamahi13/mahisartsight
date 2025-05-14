<?php
include "header.php";
?>

    <div class="content py-5">
        <!-- Product Stats -->
        

        <!-- Recent Products -->
        <div class="card ">

            <table class="product-table ">
                <thead>
                    <tr>
                         <th>Image</th>
                        <th>Product Name</th>
                        <th>Price</th>

                        <th>Actions</th>
                    </tr>
                </thead>
         <tbody>
            
            <?php
            include '../config.php';
            $sqlSelect = "SELECT * FROM data ";
            $result = mysqli_query($conn,$sqlSelect);
            while($data = mysqli_fetch_array($result)){
            ?>
            <tr>
            <td><?php echo $data["image"]?></td>
            <td><?php echo $data["name"]?></td>
            <td><?php echo $data["price"]?></td>
            <td>
              
                <a class="btn btn-primary"  href="edit.php?id=<?php echo $data["id"]?>"><i class="bi bi-pencil-square"></i></a>
                <a class="btn btn-danger" href="delete.php?id=<?php echo $data["id"]?>"><i class="bi bi-trash-fill"></i></a>
               
            </td>
            </tr>
            <?php
            }
            ?>
           
        </tbody>
    </table>
</div>
                    
<a class="btn btn-success" href="add.php">ADD NEW PRODUCTS</a>

        <!-- Add New Product -->

        </div>