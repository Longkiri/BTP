<html>
<head>
	<title> Add Students</title>
</head>
<body>
<?php
	$dbc = new mysqli('localhost', 'root', '', 'Students_database');
	require_once('../project1/mysql_connect.php');
	 $nameErr = $emailErr =  '';
	//create a variables
	$f_name = $_POST['First_name'];
	$l_name = $_POST['Last_name'];
	$gender = $_POST['Gender'];
	$email = $_POST['e-mail_id'];
	$state = $_POST['State'];
	$Student_id = $_POST['Student_id'];
	
 
	//Execute the query 
	$sql = "INSERT INTO Students_info(First_name, Last_name, Gender, e-mail_id, State, Student_id) VALUES('$f_name', '$l_name', '$Gender','$email', '$state', '$Student_id') ";



?>
<p><span class = "error " textcolor = "red">* required field.</span></p>

<form action = "http://localhost/project1/studentadded.php" method = "POST">


<table>
	<tr>
		<td> First_name:<td/>
		<td><input type = "text" name = "First_name"/>
	 		<span class = 'error'>* <?php echo $nameErr ; ?> </span>
		</td>
	</tr>
	<tr>
		<td> Last_name:<td/>
		<td><input type = "text" name = "Last_name"/>
			 <span class = 'error'>* <?php echo $nameErr ; ?> </span>
		</td>
	</tr>
	<tr>
		<td> Student_id:<td/>
		<td><input type = "text" name = "Student_id"/>
	 		<span class = 'error'>* <?php echo $nameErr ; ?> </span>
		</td>
	</tr>
	<tr>
		<td> email_id:<td/>
		<td><input type = "text" name = "e-mail_id"/>
	 		<span class = 'error'>* <?php echo $nameErr ; ?> </span>
		</td>
	</tr>
	<tr>
		<td> Gender:<td/>
		<td><input type = "radio" name = "Gender" value = "Female"/>Female
			<input type = "radio" name = "Gender" value = "Male" /> Male
		 <span class = 'error'>* <?php echo $nameErr ; ?> </span>
		</td>
	</tr>
	<tr>
		<td> State:<td/>
		<td>  <select name = "subject[]" size = "4" multiple>
                     <option value = "Assam">Assam</option>
                     <option value = "Java">Arunachal</option>
                     <option value = "Manipur">Manipur</option>
                     <option value = "Mizoram">Mizoram</option>
                     <option value = "Nagaland">Nagaland</option>
                     <option value = "Tripura">Tripura</option>
		     <option value = "Meghalaya"> Meghalaya</option> 
                	  </select>
		</td>
		</tr>

	<tr>
               <td>
                  <input type = "submit" name = "submit" value = "Submit"> 
               </td>
            </tr>
</table>
</form>


</body>
</html>

