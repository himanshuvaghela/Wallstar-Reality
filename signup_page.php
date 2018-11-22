<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "project");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt insert query execution
$email="";
$user="";
$psw="";
$num="";
if(isset($_POST['email'])){
$email = $_POST['email'];
}
if(isset($_POST['uname'])){
$user = $_POST['uname'];
}
if(isset($_POST['psw'])){
$psw = $_POST['psw'];
}


$sql = "INSERT INTO login (email_id, username, password) VALUES ('$email','$user','$psw')";
if(mysqli_query($link, $sql)){
    echo "You have signed up successfully, Go to <a href=\"login.html\">login.html</a>";
} else{
    echo "Sorry!!Unable to sign up please <a href=\"index.html\">try again</a>";
}
 
// Close connection
mysqli_close($link);
?>