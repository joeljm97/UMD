<!DOCTYPE HTML>
<html>
	<head>
		<title>Unified Medical Data</title>
		<link rel="stylesheet" type="text/css" href="styles.css">
    </head>
    
    <script>
        function patient(){
            alert("patient");
        }
    </script>
	<body>
        
        <div class="container">
            <div class="top">
                    <div class="nav">
                            <h3><u>UNIFIED MEDICAL DATA</u></h3>	
                        
                            <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="About.html">About</a></li>
                            </ul>
                        </div>
            </div>

            <div class="left">
                <h7 id="patient"><b>Patient</b></h7>
                <div><p>Login to your account to access you medical data</p>
                    <form action="" class="log-in" onsubmit="patient()"
                        autocomplete="off">
                        <h7 style="text-align: left;">Username</h7><br>
                        <input type="email" placeholder="Enter username" name="uname" required><br>
                        <h7 style="text-align: left;">Password</h7><br>
                        <input type="password" placeholder="Enter password" name="pword" required><br>
                        <button type="submit" >Login</button>  
                        <label>
                        <input type="checkbox" checked="checked" name="remeber"> Remember me
                        </label>  
                    </form>
                    
                    
                </div>
            </div>

            <div class="middle">
                    <h7 id="doctor"><b>Doctor</b></h7>
                    <div><p>Login to your account to access you medical data</p>
                        <form action="" class="log-in_d"
                            autocomplete="off">
                            <h7>Username</h7><br>
                            <input type="email" placeholder="Enter username" name="uname" required><br>
                            <h7 style="align:left;">Password</h7><br>
                            <input type="password" placeholder="Enter password" name="pword" required><br>
                            <button type="submit">Login</button>  
                            <label>
                            <input type="checkbox" checked="checked" name="remeber"> Remember me
                            </label>  
                        </form>
                        
                        
                    </div>
            </div>


            <div class="right"><h7 id="hospital"><b>Hospital</b></h7>
                <div><p>Login to your account to access you medical data</p>
                    <form action="" class="log-in_d"
                        autocomplete="off">
                        <h7>Username</h7><br>
                        <input type="email" placeholder="Enter username" name="uname" required><br>
                        <h7 style="align:left;">Password</h7><br>
                        <input type="password" placeholder="Enter password" name="pword" required><br>
                        <button type="submit">Login</button>  
                        <label>
                        <input type="checkbox" checked="checked" name="remeber"> Remember me
                        </label>  
                    </form></div>
        </div>


        <?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Print host information
echo "Connect Successfully. Host info: " . mysqli_get_host_info($link);
?>
        
        
		
    </body>
    

</html>