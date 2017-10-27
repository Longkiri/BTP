<!DOCTYPE HTML>
<html>
<head>
<meta content = "charset =utf-8"/>
<title>Search Video</title>
<style>
 body {
	background-color: gray 
};	
</style>
</head>
<body>
<h1> Upload Videos </h2>
<div>
<form action="video.php" method='post' enctype="multipart/form-data">
Description of Video: <input type="text" name="description_entered" placeholder = "Enter the description of the video"/><br><br>
<input type="file" name="file"/><br><br>
	
<input type="submit" name="submit" value="Upload"/>

</form>
</div>

<div>
<h1>OR</h1>
<h2>Search Uploaded Video By Descriptions or Name</h2>
<form action = "Searchvideo.php" method ="POST" align = "centered" >
	<input type = "text" name = "Search" placeholder = "Search Video" />
	<input type = "submit" value = "GO!"/>
</form>
</div>
<br>
<br>
<?php
$user = "root"; 
$password = ""; 
$host = "localhost"; 
$dbase = "form"; 
$table = "Video"; 
 
// Connection to DBase 
mysql_connect($host,$user,$password); 
@mysql_select_db($dbase) or die("Unable to select database");

//collect

if(isset($_POST['Search']))
{
	$searchq = $_POST['Search'];
	$searchq = preg_replace("#[^0-9a-z]i#", "", $searchq );

	$query = mysql_query("SELECT * FROM $table WHERE Descriptions LIKE '%$searchq%' OR Video_name LIKE '%$searchq%' ") or die ("Could not search!");	
	$count = mysql_num_rows($query);
	if($count == 0){
		$output = 'There are no search result' ;
}else {
	while($row = mysql_fetch_array($query)){ 
$videos_field= $row['Video_name'];
$video_show= "upload/$videos_field";
$descriptionvalue= $row['Descriptions'];
$fileextensionvalue= $row['Video_extension'];
print "<tr>\n"; 
print "\t<td>\n"; 
echo "<font face=arial size=4/>$descriptionvalue</font>"."<br />"."<br />";
echo "<font face=arial size=4/>$videos_field</font>";
print "</td>\n";
print "\t<td>\n"; 
echo "<div align=center><video width='800' controls><source src='$video_show' type='video/$fileextensionvalue'>Your browser does
not support the video tag.</video></div>";
print "</td>\n";
print "</tr>\n"; 
} 
print "</table>\n";  

	}
	
}
?>

</body>
</html>

