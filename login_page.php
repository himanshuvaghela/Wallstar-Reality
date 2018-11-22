<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "project");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$user = $_POST['uname'];
$pass = $_POST['psw'];
$sql="SELECT * FROM login WHERE username='$user' and password='$pass'";
$result=mysqli_query($link,$sql);

// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);
// If result matched $username and $password, table row must be 1 row
if($count==1){
        //echo "Login Successful";
        header("Location: index_1.html");
		//return true;
    }
    else {
        header("Location: login.html");
    }
mysqli_close($link);
?>