<?php 
session_start();
//echo "Well Come ".$_SESSION['user_name']
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Display Data</title>
    <style>
        body{
            background-color: #cbe6ce;
        }
        table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  background-color: #FEF9D9;
}
.update {
	box-shadow:inset 0px 1px 0px 0px #a4e271;
	background:linear-gradient(to bottom, #89c403 5%, #77a809 100%);
	background-color:#89c403;
	border-radius:5px;
	border:1px solid #74b807;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:15px;
	font-weight:bold;
	padding:5px 17px;
	text-decoration:none;
	text-shadow:0px 1px 0px #528009;
}
.update:hover {
	background:linear-gradient(to bottom, #77a809 5%, #89c403 100%);
	background-color:#77a809;
}
.update:active {
	position:relative;
	top:1px;
}

.delete {
	box-shadow: 3px 4px 0px 0px #8a2a21;
	background:linear-gradient(to bottom, #c62d1f 5%, #f24437 100%);
	background-color:#c62d1f;
	border-radius:6px;
	border:1px solid #d02718;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:17px;
	padding:5px 17px;
	text-decoration:none;
	text-shadow:0px 1px 0px #810e05;
}
.delete:hover {
	background:linear-gradient(to bottom, #f24437 5%, #c62d1f 100%);
	background-color:#f24437;
}
.delete:active {
	position:relative;
	top:1px;
}

    </style>
</head>
<body>
    
</body>
<?php 
 include("connection.php"); 

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

  $query = "SELECT * FROM `form`";
  $data = mysqli_query($conn,$query);
  $total = mysqli_num_rows($data);
  //$result = mysqli_fetch_assoc($data);
 // echo "Total no of records are: ".$total;
  if($total!=0)
  {
    ?>
    <h2 align="center">  Dispaying All Records </h2>
   <center>   <table border="1" cellspacing="7" width="100%">
        <tr> 
         <th width="5%"> ID </th> 
         <th width="5%"> Img </th> 
        <th width="8%"> First Name </th>
        <th width="8%"> Last Name </th>
        <th width="9%"> Gender </th>
        <th width="20%"> Email </th>
        <th width="10%"> Phone </th>
        <th width="25%"> Address </th>
        <th width="15%"> Operation </th>
        </tr>
   
    <?php
   // echo "Table has Records";
   while($result = mysqli_fetch_assoc($data)){

   echo " <tr> 
              <td>".$result['id']."</td>
              <td><img src='".$result['sdt_img']."' width='100' height='100'></td>
              <td>".$result['fname']."</td>
              <td>".$result['lname']."</td>
              <td>".$result['gender']."</td>
              <td>".$result['email']."</td>
              <td>".$result['phone']."</td>
              <td>".$result['address']."</td>
              <td><a href='update_design.php?id=$result[id]'> <input type='submit' value='Update' class='update'> </a>

               <a href='delete.php?id=$result[id]'> <input type='submit' value='Delete' class='delete' onclick = 'return checkdelete()'> </a></td>
         </tr>
        ";
   }
  }
 else{
    echo "No Records Found";
 }
 ?>
  </table>
  </center>
  <a href="logout.php"> <input type="submit" name="" value="Log Out" class="logout"> </a>
  <script>
  function checkdelete(){
    return confirm('Are you sure you want to delete this record ?');
  }
  </script>
  </script>
  </html>
