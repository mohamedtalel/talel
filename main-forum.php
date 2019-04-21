
<?php
$host="localhost"; // Host name 
$username=""; // Mysql username 
$password=""; // Mysql password 
$db_name="forum"; // Database name 
$tbl_name="forum_question"; // Table name 

// Connect to server and select database.
@mysql_connect("$host", 'root',"$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
$sql="SELECT * FROM $tbl_name ORDER BY id DESC";
$result=@mysql_query($sql);
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
               <img src="https://img.icons8.com/metro/20/000000/user-group-man-man.png">
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

<center><caption>Here is the list of the forums</caption></center>
<table width="90%" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<td width="6%" align="center" bgcolor="#E6E6E6"><strong>Id</strong></td>
<td width="53%" align="center" bgcolor="#E6E6E6"><strong>Topic</strong></td>
<td width="15%" align="center" bgcolor="#E6E6E6"><strong>Views</strong></td>
<td width="13%" align="center" bgcolor="#E6E6E6"><strong>Replies</strong></td>
<td width="13%" align="center" bgcolor="#E6E6E6"><strong>Categories</strong></td>
<td width="53%" align="center" bgcolor="#E6E6E6"><strong>Action</strong></td>
</tr>



<?php
while ($rows=mysql_fetch_array($result)) {
?>

<tr>
<td bgcolor="#FFFFFF"><?php echo $rows['id']; ?></td>
<td bgcolor="#FFFFFF"><a href="consulter-topic.php?id=<?php echo $rows['id']; ?>"><?php echo $rows['topic']; ?></a><BR></td>
<td align="center" bgcolor="#FFFFFF"><?php echo $rows['view']; ?></td>
<td align="center" bgcolor="#FFFFFF"><?php echo $rows['reply']; ?></td>
<td align="center" bgcolor="#FFFFFF"><?php echo $rows['categories']; ?></td>
<th colspan="2"><a href="deleteTopic.php?id=<?php echo $rows['id']; ?>"><button>Delete</button></th></a>
<th colspan="2"><a href="Modifier.php?id=<?php echo $rows['id']; ?>"><button>Update</button></th></a>

</tr>
<?php	
}
mysql_close();
?>
<tr><td colspan="5" align="right" bgcolor="#E6E6E6"><a href="forum-logged.php"><strong>Create New Topic</strong> </a></td></tr>
</table>
