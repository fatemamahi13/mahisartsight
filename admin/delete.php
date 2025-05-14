​<?php
include "../config.php";
if (isset($_GET['id'])) {
    $p_id = $_GET['id'];
    $sqls= "DELETE FROM data WHERE id ='$p_id'";
     $result = $conn->query($sqls);
     if ($result == TRUE) {
        // echo "Record deleted successfully.";
        header('Location: home.php');
    }else{
        echo "Error:" . $sql . "<br>" . $conn->error;
    }
}
?>