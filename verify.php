


<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "umd");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$email=$_REQUEST['u'];
$password=$_REQUEST['p'];
// Attempt select query execution
$sql = "SELECT * FROM paccount WHERE (email='$email' and password='$password')";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<h1>Welcome user</h1>";
        header ("Location: patient_dash.php");
        temp();
        // Close result set
        mysqli_free_result($result);
    } else{
        echo "Email or password combination doesn't match";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>

