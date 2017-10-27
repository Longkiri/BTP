<?php
$dbc = new mysqli('localhost', 'root', '', 'Students_database');
require_once('../project1/mysql_connect.php');


$query = "SELECT * FROM Students_info";

$response = @mysqli_query($dbc, $query);

if($response){

	echo '<table align = "center" cellspacing ="6" cellpadding= "8">

	<tr> 
	<td align = "left"><b>_____</b></td>
	<td align = "left"><b>Student_id</b></td>
	<td align = "left"><b>First_name</b></td>
	<td align = "left"><b>Last_name</b></td>
	<td align = "left"><b>Gender</b></td>
	<td align = "left"><b>email_id</b></td>
	<td align = "left"><b>State</b></td>
	</tr>';

	while ($row = mysqli_fetch_array($response)) {

		echo '<tr>
		<td align = left'.
		$row['Student_id'] .'</td><td align = "left">'.		
		$row['Student_id'] .'</td><td align = "left">'.
		$row['First_name'] .'</td><td align = "left">'. 
		$row['Last_name'] .'</td><td align = "left">'.
		$row['Gender'] .'</td><td align = "left">'. 
		$row['email_id'] .'</td><td align = "left">'. 
		$row['State'] .'</td><td align = "left">';
		# code...

		echo "</tr>";
	}
	
	echo "</table>";
}
else {
	echo "Couldn't issue database";
	echo mysqli_error($dbc);
}

mysqli_close($dbc);

?>
