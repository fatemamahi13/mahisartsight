<?php 

include "header.php";
?>

<main>
  <div class="container d-flex flex-column align-items-center">
    <h2>ADD PRODUCTS</h2>
    <form action=""  method="POST"class="mt-4 w-75">
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
      </div>
     
      

      <div class="mb-3">
        <label for="summary" class="form-label">summary</label>
        <textarea class="form-control"  name="summary" placeholder="Enter your summary"></textarea>
      </div>
      
      <div class="mb-3">
        <label for="content" class="form-label">content</label>
        <textarea class="form-control"  name="content" placeholder="Enter your content"></textarea>
      </div>
      <div class="mb-3">
        <label for="image" class="form-label">image</label>
        <input type="text" class="form-control" id="image" name="image" accept="image/*" placeholder="Enter image url">
      </div> 
      <div class="mb-3">
        <label for="price" class="form-label">price</label>
        <input type="text" class="form-control" id="price" name="price" placeholder="Enter price">
      </div> 
      <div class="mb-3">
        <input type="submit" name="submit" value="Send" class="btn btn-warning w-100">
      </div>
    </form> 
    </div>
</main>
<?php 

include "footer.php";
?>
<?php 
if (isset($_POST['submit'])){
    $name=$_POST['name'];
    $summary=$_POST['summary'];
    $content=$_POST['content'];
    $img=$_POST['image'];
    $price=$_POST['price'];

  
    $select="INSERT INTO `data` (`name`, `summary`,`content`,`image`,`price`)
    VALUES('$name','$summary','$content','$img','$price' ) ";
     $result =$conn->query ($select) ; 
    if ($result == TRUE){
        // header ("Location: view.php");
        echo "prodcut submited";
    }else{
        echo "ERROR:" .$select."<br>".$conn->error;

    }
$conn->close();

}

?>
