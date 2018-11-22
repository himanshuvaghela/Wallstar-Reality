<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="images/favicon.png" />

    <title>Wallstar</title>

    <!-- CSS -->
    <link href="style.css" rel="stylesheet">
	<script src="js/jquery-1.9.1.min.js"></script>
	<script src="js/jquery.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->	
	

<style>
table {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #ddd;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2;}

tr:hover {background-color: #ddd;}

th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #333;
    color: orange;
}
</style>
</head>
<body>
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "project");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$location="";
$status="";
$type="";
$bedroom="";
$min=0;
$max=0;
if(isset($_POST['location'])){
$location = $_POST['location'];
}
if(isset($_POST['status'])){
$status = $_POST['status'];
}
if(isset($_POST['type'])){
$type = $_POST['type'];
}
if(isset($_POST['bedroom'])){
$bedroom = $_POST['bedroom'];
}
if(isset($_POST['min-price'])){
$min = $_POST['min-price'];
}
if(isset($_POST['max-price'])){
$max = $_POST['max-price'];
}

$query = "SELECT * FROM home_page WHERE Location='$location' and Status='$status' and Type='$type' and Bedroom='$bedroom' and Price>='$min' and Price<='$max'";
$results = mysqli_query($link, $query);
//echo $location." ".$status." ".$type." ".$bedroom." ".$min." ".$max." ".mysqli_num_rows($results)." ";
if(mysqli_num_rows($results) >= 1)
{
echo "<table>"; 
echo "<tr><th>Name</th><th>Location</th><th>Status</th><th>Type</th><th>Bedrooms</th><th>Price</th><th>Link</th></tr>"; 
while($row = mysqli_fetch_array($results))
{
  echo "<tr><td>"; 
  echo $row[0];
  echo "</td><td>";   
  echo $row[1];
  echo "</td><td>";    
  echo $row[2];
  echo "</td><td>";
  echo $row[3];
  echo "</td><td>";
  echo $row[4];
  echo "</td><td>";
  echo $row[5];
  echo "</td><td>";
  echo "<a href='".$row[6]."' target='_blank'>"."View Details-->"."</a>";
  echo "</td></tr>";  
}
echo "</table>";    
}
else{
$str="There are no matching properties at present, try another <a href=\"index_1.html\">search</a>";
echo $str;
}
mysqli_close($link);
?>
</body>
</html>