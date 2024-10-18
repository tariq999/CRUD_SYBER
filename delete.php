<?php include("connection.php"); 
 $id = $_GET['id'];
 $query = "DELETE FROM form WHERE id = '$id'";
 $data = mysqli_query($conn,$query);

 if($data)
 {
    echo "<script>alert('Record Delete Successfully')</script>";
    ?>
              <meta http-equiv = "refresh" content = "0; url = https://visioncoder.com/crud_cyber/display.php" />
    <?php
 }
else {
    echo "Record Not Deleted";
}
?>