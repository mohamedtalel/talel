<?php

$host="localhost";// Host name 
$username="";// Mysql username 
$password="";// Mysql password 
$db_name="forum";// Database name 
$tbl_name="forum_question"; // Table name 

// Connect to server and select database.
@mysql_connect("$host", 'root',"$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

$id=$_GET['id'];
$sql="SELECT * FROM $tbl_name WHERE id='$id'";       
$result=mysql_query($sql);
$rows=mysql_fetch_array($result);
?>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Forum</title>
<link rel="icon" href="img/index/favicon.png" sizes="16x16">
<!--css-->
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/style-1.css" rel="stylesheet" type="text/css">
<!--BOOTSTRAP-->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<!--fonts-->
<link href="https://fonts.googleapis.com/css?family=Karla:400,700" rel="stylesheet">
<link href="fonts/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="fonts/font/flaticon.css" rel="stylesheet" type="text/css">

<!--Revolution-->
<script src="../../ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script>
<link rel="stylesheet" type="text/css" href="revolution/css/settings.css">
<script src="revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="revolution/js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="notif.js"></script>
</head>

 
<body onUnload="pass()">

<div class="blog-detail"><!--page wrap-->

<a href="javascript:" id="return-to-top"><i class="fa fa-angle-up"></i></a>

<!--header-->
<header class="border">
<div class="container header-sec">

      <div class="col-md-5 header">
          <div class="header-left">
                <div class="top-bar-list phone">
               <img src="https://img.icons8.com/metro/20/000000/user-group-man-man.png"><strong><p>You can respond to forums here</p></strong>
                </div>
                <div class="top-bar-list">
                    <i class="flaticon-e-mail-envelope"></i>
                    <p>aziz.belhajyahia@esprit.tn</p>
                </div>
          </div>
      </div>
      
      <div class="col-md-7 col-sm-12 header">
        	<div class="header-right">
            	<div class="top-bar-list">
                <i class="flaticon-placeholder"></i>
                <a href="#"><p>Store locator</p></a>
                </div>
                <div class="top-bar-list">
                <i class="flaticon-delivery"></i>
                <a href="#"><p>Track order</p></a>
                </div>
                <div class="top-bar-list">
                <i class="flaticon-login"></i>
                <p><b><a href="#" data-toggle="modal" data-target="#myModal">Register</a></b> or <b><a href="#" data-toggle="modal" data-target="#myModal2">Sign in</a></b></p>
                </div>
        	</div>
      </div>
      <div class="clearfix"></div>
      
    </div>
</header>
</div>
</body>
<table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<td><table width="100%" border="0" cellpadding="3" cellspacing="1" bordercolor="1" bgcolor="#FFFFFF">
<tr>
<td bgcolor="#F8F7F1"><strong>Topic :</strong><?php echo $rows['topic']; ?></td>
</tr>

<tr>
<td bgcolor="#F8F7F1"><strong>Commentaire :</strong><?php echo $rows['detail']; ?></td>
</tr>

<tr>
<td bgcolor="#F8F7F1"><strong>By :</strong> <?php echo $rows['name']; ?></br></td>
</tr> 

<tr>
	<td bgcolor="#F8F7F1"><strong>Email :</strong> <?php echo $rows['email']; ?></br></td>
</tr>


<tr>
<td bgcolor="#F8F7F1"><strong>Categories : </strong><?php echo $rows['categories']; ?></td>
</tr>
</table>
</td>
</tr>
</table>



<BR>
<?php

$tbl_name2="forum_answer"; // Switch to table "forum_answer"

$sql2="SELECT * FROM $tbl_name2 WHERE question_id='$id'";
$result2=mysql_query($sql2);

while($rows=mysql_fetch_array($result2)){
?>

<table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<td><table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<td bgcolor="#F8F7F1"><strong>ID</strong></td>
<td bgcolor="#F8F7F1">:</td>
<td bgcolor="#F8F7F1"><?php echo $rows['a_id']; ?></td>
</tr>
<tr>
<td width="18%" bgcolor="#F8F7F1"><strong>Name</strong></td>
<td width="5%" bgcolor="#F8F7F1">:</td>
<td width="77%" bgcolor="#F8F7F1"><?php echo $rows['a_name']; ?></td>
<th colspan="2"><a href="deleteReponse.php?a_id=<?php echo $rows['a_id']; ?>"><button>Delete</button></th></a>
</tr>
<tr>
<td bgcolor="#F8F7F1"><strong>Email</strong></td>
<td bgcolor="#F8F7F1">:</td>
<td bgcolor="#F8F7F1"><?php echo $rows['a_email']; ?></td>
</tr>
<tr>
<td bgcolor="#F8F7F1"><strong>Answer</strong></td>
<td bgcolor="#F8F7F1">:</td>
<td bgcolor="#F8F7F1"><?php echo $rows['a_answer']; ?></td>
</tr>
<tr>
<td bgcolor="#F8F7F1"><strong>Date/Time</strong></td>
<td bgcolor="#F8F7F1">:</td>
<td bgcolor="#F8F7F1"><?php echo $rows['a_datetime']; ?></td>
</tr>
</table></td>
</tr>
</table><br>

 

<?php
}

$sql3="SELECT view FROM $tbl_name WHERE id='$id'";
$result3=mysql_query($sql3);

$rows=mysql_fetch_array($result3);
$view=$rows['view'];

 

// if have no counter value set counter = 1
if(empty($view)){
$view=1;
$sql4="INSERT INTO $tbl_name(view) VALUES('$view') WHERE id='$id'";
$result4=mysql_query($sql4);
}

 

// count more value
$addview=$view+1;
$sql5="update $tbl_name set view='$addview' WHERE id='$id'";
$result5=mysql_query($sql5);
mysql_close();
?>


<BR>
<table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<form name="form1" method="post" action="consulter-reponse.php">
<td>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<td width="18%"><strong>Name</strong></td>
<td width="3%">:</td>
<td width="79%"><input name="a_name" type="text" id="a_name" size="45"></td>
</tr>
<tr>
<td><strong>Email</strong></td>
<td>:</td>
<td><input name="a_email" type="text" id="a_email" size="45"></td>
</tr>
<tr>
<td valign="top"><strong>Answer</strong></td>
<td valign="top">:</td>
<td><textarea name="a_answer" cols="45" rows="3" id="a_answer"></textarea></td>
</tr>
<tr>
<td>&nbsp;</td>
<td><input name="id" type="hidden" value="<?php echo $id; ?>"></td>
<td><input type="submit" name="Submit" value="Submit"> <input type="reset" name="Submit2" value="Reset"></td>


 

</form>
</tr>
</table>
</td>
</form>
</tr>
</table>