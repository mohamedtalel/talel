<?php
$host="localhost"; // Host name 
$username=""; // Mysql username 
$password=""; // Mysql password 
$db_name="forum"; // Database name 
$tbl_name="forum_answer"; // Table name 


// Connect to server and select database.
@mysql_connect("$host", 'root',"$username", "$password")or die("cannot connect"); 
@mysql_select_db("$db_name")or die("cannot select DB");
if(isset($_GET['a_id'])) {
$a_id=$_GET['a_id'];
$sql="DELETE FROM $tbl_name where a_id='$a_id'";
$result=mysql_query($sql);
}
else {echo "Probleme";}

?>