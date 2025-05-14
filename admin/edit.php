<?php 

include "header.php";
?>

<main>
<?php
    if(isset($_POST['submit'])){
        $d_id=$_POST['d_id'];
        $name=$_POST['name'];
        $summary=$_POST['summary'];
        $content=$_POST['content'];
        $image=$_POST['image'];
        $price=$_POST['price'];


        $sql="UPDATE `data` SET `name`='$name', `summary`='$summary' ,`content`='$content' ,`image`='$image', `price`=$price WHERE `id`='$d_id'";
        $result=$conn->query($sql);
        if ($result== TRUE){
            header('Location:home.php');

        }else{
            echo "ERROR:".$sql."<br>". $conn->error;

        }

    }
     if (isset($_GET['id'])){
        $d_id=$_GET['id'];
        $sql="SELECT * FROM data WHERE id='$d_id'";
        $result=$conn->query($sql);
        if($result-> num_rows>0){
            while($row=$result->fetch_assoc()){
                $id=$row['id'];
                $name=$row['name'];
                $summary=$row['summary'];
                $content=$row['content'];
                $image=$row['image'];
                $price=$row['price'];


            }
            ?>
  <div class="container d-flex flex-column align-items-center">
  <div>  <h2> UPDATE PRODUCTS</h2></div>

    <form action=""  method="POST"class="mt-4 w-75">
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>

        <input type="text" name="name" value="<?php echo $name;?>">
                 <input type="hidden" name="d_id" value="<?php  echo $id ;?>">
      </div>
     
      

      <div class="mb-3">
        <label for="summary" class="form-label">summary</label>
        
        <input type="text" name="summary" value="<?php echo $summary;?>">
                 <input type="hidden" name="d_id" value="<?php  echo $id ;?>">
      </div>
      
      <div class="mb-3">
        <label for="content" class="form-label">content</label>
        
        <input type="text" name="content" value="<?php echo $content;?>">
                 <input type="hidden" name="d_id" value="<?php  echo $id ;?>">
      </div>
      <div class="mb-3">
        <label for="image" class="form-label">image</label>
        
        <input type="text" name="image" value="<?php echo $image;?>">
                 <input type="hidden" name="d_id" value="<?php  echo $id ;?>">
      </div> 
      <div class="mb-3">
        <label for="price" class="form-label">price</label>
        
        <input type="text" name="price" value="<?php echo $price;?>">
                 <input type="hidden" name="d_id" value="<?php  echo $id ;?>">
      </div> 
      <div class="mb-3">
        <input type="submit" name="submit" value="Send" class="btn btn-warning w-100">
      </div>
    </form> 
    </div>
</main>
</body>
</html>
<?php 
        }else{
            header('Location: home.php');
        }
    }

?>