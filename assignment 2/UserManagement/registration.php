<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Registration Page</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>

<table width="1123" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutDefaultTable-->
 
  <tr>
    <td height="315">&nbsp;</td>
    <td valign="top">
	
	<!--Code taken from my previous semester(ISY23BT Project  registration form )and I just add a code for validation using regular expression from www.phpjabbers.com -->
	<h2>Registration</h2>
	<?php 
        require("user.class.php");
	   
		$email = $_POST['email']; 
		$username = $_POST['username']; 
		$password = $_POST['password']; 
	

		
		if(!$email || !$username ||!$password)
		{
		  echo 'All fields are required<br />';
		}
		
		
		if (!eregi('^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.([a-zA-Z]{2,4})$', $email))
		{
		 
			echo 'Enter valid Email<br />'; 
		}

	
		if (!eregi('^[A-Za-z0-9!@#$%^&*()_].{6,20}$',$password))
		{
		
			echo 'Enter valid Password min 6 Chars.<br />'; 
		}

		if(!$_POST['insert'])
         {
            echo "Fail to send<br />";
          }else
		  {
			  $ins = new User();
          $myinsert = $ins->save();
           echo "<br />".$myinsert;
			
			  }
	
	
    ?>
	<form action="" method="post">
	  <p>Username:<br /><input type="text" name="username" /></p>
    <p>Email :<br /><input type="text" name="email"  /></p>
    <p>Password:<br /><input type="password" name="password" /></p>
    <p><input type="submit" name="insert" value="Sign Up" /></p>
   </form>

	  
	  
	  
	  
	  
	  &nbsp;</p></td>
  </tr>
</table>
</body>
</html>
