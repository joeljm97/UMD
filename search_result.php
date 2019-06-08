<!DOCTYPE html>
<html>
<body>
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "umd");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$id_=$_REQUEST['mail'];
// Attempt select query execution
$sql = "SELECT * FROM data WHERE id='$id_'";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Date</th>";
                echo "<th>Conditions</th>";
                echo "<th>Remarks</th>";
                echo "<th>Medicine</th>";
                echo "<th>Priority</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['date'] . "</td>";
                echo "<td>" . $row['conditions'] . "</td>";
                echo "<td>" . $row['remarks'] . "</td>";
                echo "<td>" . $row['medicine'] . "</td>";
                echo "<td>" . $row['priority'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Close result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
</body>
</html>