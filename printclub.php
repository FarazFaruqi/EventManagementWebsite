<style>
div{
	font-family: 'Titillium Web', sans-serif; font-size:30px;font-style: italic;
}
</style>
 <head>
<h1 style = "font-size:50px; text-align:center;font-family: 'Titillium Web';font-weight: bold; text-decoration:underline;">LIST OF ALL CLUBS</h1>
<center><a href="index.html">Home</a></center>

</head>
<body style = "background: #c1bdba;font-weight: bold;
  font-family: 'Titillium Web', sans-serif; font-size:20px; background: url(partback2.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;">
<?php
$servername = "localhost";
$username = "FarazFaruqi";
$password = "makarov473";
$dbname = "project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT Club_Name,President,Department FROM Club";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<center><div>Club_Name: - " . $row["Club_Name"]. " , President: - " . $row["President"]. " , Department:  -  " . $row["Department"]. "</div></center><br><br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
</body>