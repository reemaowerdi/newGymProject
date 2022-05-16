<?php session_start(); ?>
<html>
<head>
<meta charset="UTF-8">
<title>DO IT - SPORTS CLUBS</title>
<link href="style1.css" rel="stylesheet" type="text/css">
</head>
<body>

<table id="content" cellpadding="10">
<tr style="border-radius: 20px;">
	<td valign="middle" colspan="2" style="height: 70px;background: #C4C2C2">

	</td>
</tr>
<tr>
<td  align="right">
<img src="imgs/logo1.png" id="logo">
</td>
	<td>
	<h1 align="left">
	DO IT - SPORTS CLUBS </h1>
</td>
</tr>
	<script type = "text/javascript">
      function validate() {

         if( document.myForm.UserID.value == "" ) {
            alert( "Please provide User ID!" );
            document.myForm.UserID.focus() ;
            return false;
         }
         if( document.myForm.Password.value == "" ) {
            alert( "Please provide your Password!" );
            document.myForm.Password.focus() ;
            return false;
         }
			var len = document.myForm.Password.value.length;
		  if(len <8) {
			  alert( "Password must be at least 8 letters!" );
			   document.myForm.Password.focus() ;
			   return false;
		  }

         return( true );
      }
   //-->
</script>
<?php
include("connection.php");
if(isset($_POST['submit'])) {
	$AdminID = $_POST['AdminID'];
	$password = $_POST['password'];
	 $q = "SELECT * FROM gym_info WHERE admin_num='$AdminID'";
	$run = mysqli_query($db, $q);
	$no = mysqli_num_rows($run);

	if($no ==1) {
		$rec = mysqli_fetch_array($run);
		if(password_verify($password, $rec["password"]))
		 {
			$_SESSION['admin_id'] =  $rec['id'];
			$_SESSION['admin_num'] =  $rec['admin_num'];

		//	$_SESSION['firstname'] = $rec['first_name'];
			//$_SESSION['lastname'] = $rec['last_name'];
		//	$_SESSION['job_title'] = $rec['job_title'];

//CREATE TABLE `gym_info` (
//  `id` int(1) NOT NULL,
 // `name` varchar(255) DEFAULT NULL,
//  `admin_id` varchar(150) NOT NULL,
//  `description` text,
//  `subscribe` text,
//  `photo` text,
//  `location` text,
//  `loc` varchar(255) DEFAULT NULL


//) ENGINE=InnoDB DEFAULT CHARSET=utf8;

			echo '<META HTTP-EQUIV="Refresh" Content="1; URL="admin.php">';
			exit();
		} else {
			echo '<p id="not">password is not correct</p>';
		}
	} else {
		echo '<p id="not">username is not correct</p>';
	}
}
?>



<form action="Admin.html"  name = "myForm" onsubmit = "return(validate());">
<tr>
<td colspan="2" align="center">
	<h2>Admin Log-In</h2>
</td>
</tr>
		<tr>
	<td align="right">
		User ID
	</td>
	<td align="center">
		<input type="text" id="UserID" name="UserID" placeholder="Your User ID..">
	</td>
</tr>

<tr>
	<td align="right">
		Password
	</td>
	<td align="center">
		<input type="password" id="Password" name="Password" placeholder="Your  Password..">
	</td>
</tr>
<tr>
	<td colspan="2" align="right">
		<input type = "submit" value = "Log-In" id="UserButton"  />
</td>
	</tr>
</form>


</table>


</body>
</html>
