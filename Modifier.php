<?php
$host="localhost"; // Host name 
$username=""; // Mysql username 
$password=""; // Mysql password 
$db_name="forum"; // Database name 
$tbl_name="forum_question"; // Table name 
$detail="";
$categories="";
$topic="";
$mail="";
// Connect to server and select database.
@mysql_connect("$host", 'root',"$username", "$password")or die("cannot connect"); 
@mysql_select_db("$db_name")or die("cannot select DB");
if(isset($_GET['id'])) {
$id=$_GET['id'];
$sql="UPDATE $tbl_name SET topic:=topic, detail:=detail, name:=name, email:=email, categories:=categories WHERE id='$id'";
$result=mysql_query($sql);
}
else {echo "Probleme";}

?>