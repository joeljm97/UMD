<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "umd");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$id=$_REQUEST['mail'];
$date=$_REQUEST['date'];
$conditions=$_REQUEST['condition'];
$remarks=$_REQUEST['remarks'];
$medicine=$_REQUEST['medicine'];
$priority=$_REQUEST['priority'];
// Attempt insert query execution
$sql = "INSERT INTO data  VALUES ('$id', '$date', '$conditions','$remarks','$medicine','$priority')";
if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
