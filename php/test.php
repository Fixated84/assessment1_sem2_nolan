<?php
$db_hostname = 'localhost';
$db_username = 'root';
$db_password = '';
$db_database = 'ICTDBS504';

// Database Connection String
 $con = mysqli_connect($db_hostname,$db_username,$db_password,$db_database) or die("Connection failed");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
<form action="" method="post">  
Search: <input type="text" name="term" /><br />  
<input type="submit" value="Submit" />  
</form>  
<?php
if (!empty($_REQUEST['term'])) {

$term = $_REQUEST['term'];     

$sql = "SELECT * FROM Contacts WHERE lastname LIKE '%".$term."%'"; 
$r_query = mysqli_query($con,$sql); 

while ($row = mysqli_fetch_array($r_query)){ 
 
echo 'Primary key: ' .$row['firstname'];  
echo '<br /> Code: ' .$row['lastname'];  
echo '<br /> Description: '.$row['phone'];  
echo '<br /> Category: '.$row['email'];  
echo '<br /> Cut Size: '.$row['facebook'];  
echo '<br>'; 
echo '<br>'; 
 
}  

}
?>
    </body>
</html>