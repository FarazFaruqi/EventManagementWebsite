 
<?php
 
 $servername = "localhost";
$username = "FarazFaruqi";
$password = "makarov473";

// Create connection

$connect = new mysqli($servername, $username, $password,'project');

$reg=$_POST['registration_number'];
//Execute the query
 $sql = "DELETE FROM Partic WHERE Participant_ID='$reg'";
// create a variable
if ($connect->query($sql) === TRUE) {
    header("Location:successdel.html");
    // echo "<p>Employee Added</p>";
}

?>