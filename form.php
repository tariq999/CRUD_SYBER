<?php include("connection.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sing Up </title>
</head>
<body>
    <div class="container">
        <form action="#" method="POST" enctype="multipart/form-data"> 
        <div class="title">
         Registration Form
        </div>
        <div class="form">
            <div class="input_field">
                <label for="name">Upload Imge</label>
                <input type="file" name="uploadfile" style=" width:100%">
            </div>
            <div class="input_field">
                <label for="name"> First Name</label>
                <input type="text" class="input" name="fname">
            </div>
            <div class="input_field">
                <label for="name"> Last Name</label>
                <input type="text" class="input" name="lname">
            </div>
            <div class="input_field">
                <label for="name"> Password</label>
                <input type="password" class="input" name="pass">
            </div>
            <div class="input_field">
                <label for="name"> Confirm password</label>
                <input type="password" class="input" name="cpass">
            </div>
            <div class="input_field">
                <label for="name"> Gender</label>
                <div class="selectbox"> 
             <select name="gender">
                <option value=""> Select</option>
                <option value="male"> Male</option>
                <option value="female"> Female</option>
             </select>
             </div>
            </div>
            <div class="input_field">
                <label for="name"> Email Address</label>
                <input type="text" class="input" name="email">
            </div>
            <div class="input_field">
                <label for="name"> Phone Number</label>
                <input type="text" class="input" name="phone">
            </div>
            <div class="input_field">
                <label for="name"> Address</label>
               <textarea name="address" class="textarea"></textarea>
            </div>
            <div class="input_field terms">
              <label for="" class="check"> 
              <input type="checkbox" required>
              <span class="checkmark"> </span>
              </label>
             <a href="#">   <p> Agree to Termes and Conditions</p> </a>
            </div>
            <div class="input_field">
                <input type="submit" value="Register" class="btn" name="register" >
            </div>
            <div class="singup"> Already Member <a href="login.php" class="link">Login Here</a></div>
        </div>
        </form>
    </div>
</body>
</html>

 <?php 
 //===================================
 
  if($_POST['register'])
 { 
    //   print_r($_FILES["uploadfile"]);
   $filename =  $_FILES["uploadfile"]["name"];
   $tmpname = $_FILES["uploadfile"]["tmp_name"];
   $folder = "images/".$filename;
   // echo $folder;
   move_uploaded_file($tmpname,$folder);
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $pass = $_POST['pass'];
    $cpass = $_POST['cpass'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    if($fname !="" && $lname !="" && $pass !="" && $cpass !="" && $gender !="" && $email !="" && $phone !="" && $address !="")
    {
        $query = "INSERT INTO form (sdt_img, fname, lname, pass, cpsaa, gender, email, phone, address) VALUES ('$folder','$fname', '$lname', '$pass', '$cpass', '$gender', '$email', '$phone', '$address')";
   $data = mysqli_query($conn, $query);
   if($data)
   {
    echo "<script>alert('Deta Insert Successfully')</script>";
    ?>
    <meta http-equiv = "refresh" content = "0; url = https://visioncoder.com/crud_cyber/form.php" />
<?php
   }
   else
   {
    echo "<script>alert('Failed')</script>";
 }
    }
 else
 {
    echo "<script>alert('Please Fill All the Failed')</script>";
    ?>
    <meta http-equiv = "refresh" content = "0; url = https://visioncoder.com/crud_cyber/form.php" />
<?php
    //echo "Please Fill All the Fields";
}
 }
 ?>