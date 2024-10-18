<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test php </title>
</head>
<body>
    
</body>
</html>

<?php 
session_start();
echo $_SESSION["username"];
echo $_SESSION["class"];
session_unset();
?>