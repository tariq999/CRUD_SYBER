
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Log Out</title>
</head>
<body>
    
</body>
</html>

<?php 
session_start();

session_unset();
header('location:login.php');

?>