<?php
$conn = @mysqli_connect('localhost', 'root', '', 'new') or die('Could not connect ' .mysqli_connect_error());
// if(!$conn){
//   die('Could not connect ' .mysqli_connect_error());
// }else{
//   echo "Welcome";
// }

$sqlsel = "SELECT * FROM address WHERE barangay = 'Barangay IV (Poblaci' AND municipality = 'Santa Cruz'";
$query = mysqli_query($conn, $sqlsel);
$row = mysqli_fetch_array($query);
echo $row['address_id'];
?>
