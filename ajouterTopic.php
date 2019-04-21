 
<?php
session_start();
$id=0;
$topic="";
$detail="";
$name="";
$email="";
$categories="";
$edit_state=false;


$host="localhost"; // Host name 
$username=""; // Mysql username 
$password=""; // Mysql password 
$db_name="forum"; // Database name 
$tbl_name="forum_question"; // Table name 

// Connect to server and select database.
@mysql_connect("$host", 'root',"$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");


// get data that sent from form 
if (isset($_POST['save'])){
$topic=$_POST['topic'];
$detail=$_POST['detail'];
$name=$_POST['name'];
$email=$_POST['email'];
$categories=$_POST['categories'];
}
 
$sql="INSERT INTO $tbl_name(topic, detail, name, email, categories)VALUES('$topic', '$detail', '$name', '$email', '$categories')";
$result=@mysql_query($sql);

if($result){
echo "Topic is Successfully created <BR>";
echo "<a href=main-forum.php>Check your topic</a>";
}
else {
echo "ERROR";
}


if(isset($_POST['update'])){
	$topic=mysql_real_escape_string($_POST['']);

}

mysql_close();

?>