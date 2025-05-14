<?php 
include "header.php";
?>
    <body>
   
        <!-- Product section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                <?php 
        $_id=$_GET['id'];
        if($_id){
           $sql = "SELECT * FROM  data  WHERE id=$_id";
           $result=mysqli_query($conn,$sql);
           while ($data=mysqli_fetch_array($result)){

        ?>
                    <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="<?php echo $data['image'];?>" alt="..." /></div>
                    <div class="col-md-6">
                        <div class="small mb-1">SKU: BST-498</div>
                        <h1 class="display-5 fw-bolder"><?php echo $data['name'];?></h1>
                        <div class="fs-5 mb-5">price :
                        <?php echo $data['price'];?>
                        </div>
                        <p class="lead"><?php echo $data['content'];?></p>
                        <div class="d-flex">
                           
                            <button class="btn btn-outline-warning flex-shrink-0" type="button" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Top popover" onclick="addToCart()">
                                <i class="bi-cart-fill me-1" onclick="addToCart()"></i>
                                Add to cart
                            </button>
                            <button class="btn btn-outline-warning flex-shrink-0" type="button" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Top popover" onclick="addToCart()">
                                <i class="bi-cart-fill me-1"></i>
                                Buy now
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php 
                        }
                    }
                    else {
                        echo "No product found!";
                    }
                    ?>
        <!-- Related items section-->
