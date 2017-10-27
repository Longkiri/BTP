<html>
<head>
<title>Form</title>
</head>
<body>
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
		<td>  <select name = "subject[]" size = "2" multiple>
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
