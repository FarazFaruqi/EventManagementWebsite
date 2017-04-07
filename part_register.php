 
<?php
 
 $servername = "localhost";
$username = "FarazFaruqi";
$password = "makarov473";

// Create connection

$connect = new mysqli($servername, $username, $password,'project');

$reg=$_POST['registration_number'];
$event=$_POST['event_name'];
$name=$_POST['full_name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$dept=$_POST['dept'];
$year=$_POST['year'];
 
//Execute the query
 $sql = "INSERT INTO Partic VALUES ('$reg','$event','$name','$email','$phone','$dept','$year')";
// create a variable
if ($connect->query($sql) === TRUE) {
    header("Location:success.html");
    // echo "<p>Employee Added</p>";
}

?>