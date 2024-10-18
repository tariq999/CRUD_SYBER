<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login-style.css">
    <title>Login</title>
</head>
<body>
    <div class="center">
 <h1>Login</h1>
 <!-- <form action="#" method="POST" autocomplete="off">  -->
 <form action="#" method="POST"> 
 <div class="form">
 <input type="text" placeholder="Username" name="username" class="textfiled">
 <input type="password" placeholder="Password" name="pwd" class="textfiled">
 <div class="forgetpassword"> <a href="#" class="link" onclick="message()">Forgot Password?</a></div>
 <input type="submit" value="Login" class="btn" name="login">
 <div class="singup"> New Member ? <a href="form.php" class="link">SingUp Here</a></div>

 </div>
 </form>

    </div>

    <script>
    function message(){
        alert("Please contact your administrator");
    }

    </script>
</body>
</html>
<?php 
include("connection.php"); 
if(isset($_POST['login']))
{
$username = $_POST['username'];
$password = $_POST['pwd'];
$query = "SELECT * FROM form WHERE email='$username' AND pass='$password'";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);
//echo $total;
if($total == 1){
   // echo "Login Successful";
   $_SESSION['user_name'] = $username;
   header('location:display.php');
   
}
else{
    //echo "Login Failed";
    echo "<script>alert('Login Failed')</script>";
}


}

?>

<!--=
     ?>
     <meta http-equiv = "refresh" content = "0; url = https://visioncoder.com/crud_cyber/display.php" />
     <?php
