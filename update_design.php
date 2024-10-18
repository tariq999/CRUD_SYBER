<?php 
session_start();
?>

<?php include("connection.php"); 
 $id = $_GET['id'];
 // Session Update start Here ===============

 $userprofile = $_SESSION['user_name'];
 if($userprofile == true)
 {
  //echo '<h2>Welcome: '.$userprofile.'</h2>';
 }
 else
 {
  header('location:login.php');
 }
// Session Update End Here ===============

$query = "SELECT * FROM `form` WHERE id = '$id'";
$data = mysqli_query($conn,$query);
//$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Update Oppration</title>
</head>
<body>
    <div class="container">
        <form action="#" method="POST"> 
        <div class="title">
         Update Form
        </div>
        <div class="form">
            <div class="input_field">
                <label for="name"> First Name</label>
                <input type="text" class="input" name="fname" value="<?php echo $result['fname'];?>">
            </div>
            <div class="input_field">
                <label for="name"> Last Name</label>
                <input type="text" class="input" name="lname" value="<?php echo $result['lname'];?>" >
            </div>
            <div class="input_field">
                <label for="name"> Password</label>
                <input type="password" class="input" name="pass" value="<?php echo $result['pass'];?>" >
            </div>
            <div class="input_field">
                <label for="name"> Confirm password</label>
                <input type="password" class="input" name="cpass" value="<?php echo $result['cpsaa'];?>" >
            </div>
            <div class="input_field">
                <label for="name"> Gender</label>
                <div class="selectbox"> 

             <select name="gender">
                <!--====== Gender Oppotion start Here ======-->
                <option value=""> Select</option>

                <option value="male"
                <?php 
                       if($result['gender'] == 'male') 
                       {
                           echo "selected";
                       }
                ?>
                
                >  
                Male</option>
                <option value="female"
                <?php 
                       if($result['gender'] == 'female') 
                       {
                           echo "selected";
                       }
                ?>
                >
                Female</option>
             </select>

             </div>
            </div>
             <!--====== Gender Oppotion end Here ======-->
            <div class="input_field">
                <label for="name"> Email Address</label>
                <input type="text" class="input" name="email" value="<?php echo $result['email'];?>" >
            </div>
            <div class="input_field">
                <label for="name"> Phone Number</label>
                <input type="text" class="input" name="phone" value="<?php echo $result['phone'];?>" >
            </div>
            <div class="input_field">
                <label for="name"> Address</label>
               <textarea name="address" class="textarea"> <?php echo  $result['address']; ?></textarea>
            </div>
            <div class="input_field terms">
              <label for="" class="check"> 
              <input type="checkbox" required>
              <span class="checkmark"> </span>
              </label>
              <p> Agree to Termes and Conditions</p>
            </div>
            <div class="input_field">
                <input type="submit" value="Update Details" class="btn" name="update" >
            </div>
        </div>
        </form>
    </div>
</body>
</html>
 <?php 


 //===================================
 
  if($_POST['update'])
 { 
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
        $query = "UPDATE FORM SET fname='$fname', lname='$lname', pass='$pass', cpsaa='$cpass', gender='$gender', email='$email', phone='$phone', address='$address' WHERE id='$id'";

   $data = mysqli_query($conn, $query);


   if($data)
   {
       echo "<script>alert('Record Updated Successfully')</script>";
       ?>
       <meta http-equiv = "refresh" content = "0; url = https://visioncoder.com/crud_cyber/display.php" />
       <?php
   }
   else
   {
       echo "Failed to Update";
 }
    }
 else
 {
    echo "Please Fill All the Fields";
}
 }
 ?>