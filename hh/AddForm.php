<html>
<head>
<meta charset="UTF-8">
<title>Add gym</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
	

<table id="content" cellpadding="10">
<tr>
<td colspan="2" align="center">
	<script type = "text/javascript">
      function validate() {
      	if( document.myForm.service_type.value == "-1" ) {
            alert( "Please provide your service type!" );
            return false;
         }
         if( document.myForm.description.value == "" ) {
            alert( "Please provide description !" );
            document.myForm.description.focus() ;
            return false;
         }
         if( document.myForm.attach1.value == "" ) {
            alert( "Please provide your attachment 1!" );
            document.myForm.attach1.focus() ;
            return false;
         }
         
         return( true );
      }
   //-->
</script>
<?php 
	if(isset($_POST['submit'])) {
		$flag1 = 0;
		$flag2 = 0;

		$service_type = $_POST['service_type'];
		$description = $_POST['description'];


		 $main = "attachs/";

		if ($_FILES['attach1']['size'] == 0) {
			$flag1 = NULL;
		} else {
		  $file1 = $_FILES['attach1']['name'];
		  $target1 = $main . "-" .  $file1;
		  $flag1 = move_uploaded_file($_FILES["attach1"]["tmp_name"], $target1);
	   }

	   if ($_FILES['attach2']['size'] == 0) {
			$flag2 = NULL;
		} else {
		  $file2 = $_FILES['attach2']['name'];
		  $target2 = $main . "-" .  $file2;
		  $flag2 =move_uploaded_file($_FILES["attach2"]["tmp_name"], $target2);
	   }

		$q1 = "";
		
		if($flag1 && $flag2) {
			$q1 = "INSERT INTO request VALUES(NULL, $employee_ID, $service_type, '$description', '$target1',  '$target2', 1)";
		} else if($flag1 && !$flag2) {
			$q1 = "INSERT INTO request VALUES(NULL, $employee_ID, $service_type,  '$description', '$target1', NULL, 1)";
		} else if(!$flag1 && $flag2) {
			$q1 = "INSERT INTO request VALUES(NULL,$employee_ID,  $service_type, '$description', NULL,'$target2', 1)";
		} else if(!$flag1 && !$flag2) {
			$q1 = "INSERT INTO request VALUES(NULL, $employee_ID, $service_type, '$description', NULL,NULL, 1)";
		}
		
		$run = mysqli_query($db, $q1);
	
	}	
?>	
</td>
</tr>


            <form name="myform" method='post' onsubmit="return(validate());">
            <ul>
            <li><label for="gym_name">Gym Name:</label></li>
            <li><input type="text" name='Name'></li>
            <li><label for="gym_description">Gym description:</label></li>
            <li><textarea name='description' placeholder="Enter gym description here ....."></textarea> </li><!--hieeght and width-->
            <li><label for="subscribe_URL">Subscription URL:</label></li>
            <li><input type="text" name='URL'></li>
            <li><label for="logo">Upload gym's logo:</label></li>
            <li> <input type="file" name='logo'></li>
            <li> <label for="loc">Location in Riyadh:</label></li>
            <li> <input type="text" name='Location'></li>
            <li> <label for="locationURL">Location URL:</label></li>
            <li><input type="text" name='LocURL'></li>
            <li><input type="submit" name="submitAddition"></li>
</ul>
            </form>
            <?php 
            include("connection.php");
            if (isset($_POST['submitAddition'])){
                $name=$_POST['name'];
                $des=$_POST['description'];
                $sub=$_POST['URL'];
                $logo=$_POST['logo'];
                $locurl=$_POST['LocURL'];
                $loc=$_POST['Location'];

                $query="INSERT into gym_info (name,description,subscribe,photo,location,loc) VALUES 
                ('$name','$des','$sub','$logo','$locurl','$loc')";
                if ($p=mysqli_query($db,$query)){
                    echo 'Gym has been added successfully';
                }
                else {
                    echo 'Failed';
                }
                      }
				
			?>
<!--<form method="post"  name="myForm" onsubmit = "return(validate());" enctype="multipart/form-data">

<tr>

<td colspan="2" align="center">
	<h2>Add Request</h2>
</td>
</tr>
		<tr>
	<td align="right">
		gym 
	</td>
	<td align="center">
		<select name="service_type" id="service_type">
			<option value="-1"></option>
			
		</select>
	</td>
</tr>
<tr>
	<td align="right">
		Description
	</td>
	<td align="center">
		<textarea rows="6" id="description" name="description" placeholder="request  Description.."></textarea>
	</td>
</tr>
<tr>
	<td align="right">
		Attachment 1
	</td>
	<td align="center">
		<input type="file" id="attach1" name="attach1">
	</td>
</tr>
<tr>
	<td align="right">
		Attachment 2
	</td>
	<td align="center">
		<input type="file" id="attach2" name="attach2">
	</td>
</tr>

<tr>
	<td colspan="2" align="right">
		<input type="submit" value="Add Request" id="button" name="submit">
</td>
	</tr>

	<tr>
	<td colspan="2" align="center">

</td>
	</tr>
</form>-->
</table>

</body>
</html>
