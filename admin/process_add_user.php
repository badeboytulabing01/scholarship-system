<?php require_once("../scholarClass.php"); ?>
<?php require_once("../inc/conn.php"); ?>
	<?php 
	  if (isset($_POST)) {
		    $lastname        = $_POST['lastname'];
	 	  	$fname 	   	     = $_POST['fname'];
	 	  	$mname   	     = $_POST['mname'];
	 	  	$email       	 = $_POST['email'];
	 	  	$username        = $_POST['username'];
	        $password    = md5($_POST['password']);
	 	  	
	 	  	
	         $query = mysqli_query($conn, "INSERT INTO admininfo
	         	(
	         	lname,
	         	fname,
	         	mname,
	         	email,
	         	username,
	         	password	
	         	)
	         	VALUES
	         	(
	         	'$lastname',
	         	'$fname',
	         	'$mname',
	         	'$email',
	         	'$username',
	         	'$password'
	         	
	         	 )");		
	          
	          echo "Succesfully Add User";
           }else{
	 	 echo "no data";
	 	}//nd of else

	 ?>