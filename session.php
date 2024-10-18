<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
</head>
<body>
    
</body>
</html>
<?php 
session_start();
$_SESSION["username"] = 'Tariq';
$_SESSION["class"] = 'MCA';
echo $_SESSION["username"];
echo $_SESSION["class"];

session_unset();


?>