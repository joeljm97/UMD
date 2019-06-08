<!DOCTYPE html>
<html>
<head>
    <title>UMD</title>    
</head>

<body>
<h1 align="center">THIS WILL PERMANENTLY DELETE ALL DATA</h1>
<hr>

Email:<br>
<input type="email" name="email" required> <br> <br>
Password:<br>
<input type="password" name="password" required> <br> <br>
OTP:<br>
<input type="text" name="otp" required> <br> <br>
<input type="checkbox"> <h3 >I acknowledge</h3>
<input type=button value="Delete" onclick="verify()">

</body>
<script>
    function verify(){ 
    var x=document.getElementById("otp").innerHTML();
    if(x=1000)and{
        
    }
    else
    {
        alert("OTP Incorrect");
    }
    }

    function delete_()
    {
        <?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "umd");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt delete query execution
$sql = "DELETE FROM accounts WHERE first_name='John'";
if(mysqli_query($link, $sql)){
    echo "Records were deleted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
    }
</script>

</html>