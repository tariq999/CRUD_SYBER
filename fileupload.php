<?php 
 error_reporting(0);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>
    <form action="#" method="POST" enctype="multipart/form-data" >
        <input type="file" name="uploadfile"> <br/><br/>
        <input type="submit" value="Upload File" name="submit">
    </form>
</body>
</html>
<?php 

//   print_r($_FILES["uploadfile"]);
   $filename =  $_FILES["uploadfile"]["name"];
   $tmpname = $_FILES["uploadfile"]["tmp_name"];
   $folder = "images/".$filename;
   // echo $folder;
   move_uploaded_file($tmpname,$folder);
   echo " <img src='$folder ' height='90px' width='90px' > ";
?>
<!--<img src="images/6.jpg" height="100px" width="100px" alt=""> -->