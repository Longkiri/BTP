<html>
   
   <head>
      <title>Add New Record</title>
   </head>
   
   <body>
      <?php
	$nameErr = "";
         if(isset($_POST['add'])) {
            $dbhost = 'localhost:3036';
            $dbuser = 'root';
            $dbpass = '';
            $conn = mysql_connect($dbhost, $dbuser, $dbpass);
            
            if(!$conn ) {
               die('Could not connect: ' . mysql_error());
            }
            
            if(! get_magic_quotes_gpc() ) {
               $f_name = addslashes ($_POST['First_name']);
		$student_id = addslashes ($_POST['Student_id']);
            }else {
               $f_name = addslashes ($_POST['First_name']);
		$student_id = addslashes ($_POST['Student_id']);
            }
            
         	
		$l_name = addslashes ($_POST['Last_name']);
		$M_name= addslashes($_POST['Middle_name']);
		$gender = addslashes ($_POST['Gender']);
               $email = addslashes ($_POST['email_id']);
		$state = addslashes ($_POST['State']);
		
            
            $sql = "INSERT INTO Students_info ". "(First_name,  Middle_name, Last_name, Gender, email_id, State, Student_id) ". "VALUES('$f_name', '$M_name' ,'$l_name', '$gender', '$email', '$state', '$student_id')";
               
            mysql_select_db('Students_database');
            $retval = mysql_query( $sql, $conn );
            
            if(! $retval ) {
               die('Could not enter data: ' . mysql_error());
            }
            
            echo "Entered data successfully\n";
            
            mysql_close($conn);
         }else {
            ?>
            
               <form method = "post" action = "<?php $_PHP_SELF ?>">
                  <table width = "400" border = "0" cellspacing = "1" 
                     cellpadding = "2">
                  
                     <tr>
                        <td width = "100">First Name</td>
                        <td><input name = "First_name" type = "text" 
                           id = "First_name"></td>
                     </tr>
			
                     <tr>
                        <td width = "100">Middle Name</td>
                        <td><input name = "Middle_name" type = "text" 
                           id = "Middle_name"></td>
                     </tr>

		     <tr>
                        <td width = "100">Last Name</td>
                        <td><input name = "Last_name" type = "text" 
                           id = "Last_name"></td>
                     </tr>
                     <tr>
                        <td width = "100">Email_id</td>
                        <td><input name = "email_id" type = "text" 
                           id = "e-mail_id"></td>
                     </tr>
                  
                     <tr>
                        <td width = "100">State</td>
                        <td><input name = "State" type = "text" 
                           id = "State"></td>
                     </tr>
			<tr>
                        <td width = "100">Student ID</td>
                        <td><input name = "Student_id" type = "text" 
                           id = "Student_id"></td>
                     </tr>
			<tr>
		<td width = "10"> Gender: </td>
		<td width = "10">
		    <input type = "radio" name = "Gender" />F
		    <input type = "radio" name = "Gender"/>M
		    
		</td>
		</tr>
                     
                     <tr>
                        <td width = "100"> </td>
                        <td> </td>
                     </tr>
                  
                     <tr>
                        <td width = "100"> </td>
                        <td>
                           <input name = "add" type = "submit" id = "add" 
                              value = "Add Student">
                        </td>
                     </tr>
                  
                  </table>
               </form>
            
            <?php
         }
      ?>
   
   </body>
</html>
