<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
    <?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "umd");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$id=$_REQUEST['email'];
$password=$_REQUEST['password1'];
$name=$_REQUEST['name'];
$address=$_REQUEST['address'];
$mobile=$_REQUEST['mobile'];
$hieght=$_REQUEST['hieght'];
$weight=$_REQUEST['weight'];
$bloodgroup=$_REQUEST['bloodgroup'];
// Attempt insert query execution
$sql = "INSERT INTO paccount  VALUES ('$id', '$password', '$name','$address','$mobile','$hieght','$weight','$bloodgroup')";
if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>

    </body>