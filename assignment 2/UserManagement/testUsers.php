<?php
	require "user.class.php";
	require "dbconn.class.php";
	
    $objUser = new User();
	$resultUser  = $objUser->display_user_info();
	//$resultUser2  = $objUser->save();
	
	$objConn = new DatabaseConnection();
    $resultCon = $objConn->establish_conn();
	$resultCon1 = $objConn->execute($myQuery);
    //$myConn2 = $obj->execute($myQuery);
	

?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<p><?php echo "Your Information:\t\t".$resultUser ;?></p>
<p><?php echo "Your Information:\t\t".$resultCon ;?></p>
<p><?php echo $resultCon1 ;?></p>
<p><?php echo "Inserted data:\t\t".$resultUser2 ;?></p>

<!--form id="form1" name="form1" method="post" action="">
  <table width="352" border="0">
    <tr>
      <td width="96">&nbsp;</td>
      <td width="145">&nbsp;</td>
      <td width="89">&nbsp;</td>
    </tr>
    <tr>
      <td>username</td>
      <td><input type="text" name="username"></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>email address </td>
      <td><input type="text" name="email"></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="submit"  value="Submit" /></td>
      <td>&nbsp;</td>
    </tr>
  </table>
  
  <p><?php echo "Your Information:\t\t".$answ ;?></p>
  <p>&nbsp;</p>
</form-->
</body>
</html>
