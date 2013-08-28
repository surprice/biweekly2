<?php

class User 
{
	//data memebers
	 var $username;
	 var $email;
	 var $password;
	// constructor
   function __construct($username,$email)
    {
       $this->username = $username;
       $this->email = $email;
    }
	//set methods
    function setUsername($username)
    {
	    $this->username = $username;
		
    }
    function setEmail($email)
    {
		$this->email = $email;
		
    }
	
	//get methods
   function getUsername()
    {
		return $this->username;
		
    }
    function getEmail()
    {
		return $this->email;
		
    }
  
   
   //set a password using md5 hash
   function setPassword($password)
   {
    $this->password = md5($password); 
   }
   
   //display user information
   function display_user_info()
   {
     //$username = "simangaliso@yahoo.com";
	 return "<p>".$username. " \t " .$email. "</p>";	   
	      
   }
   
   function save()
	 {
		   $email = $_POST['email']; 
		   $username = $_POST['username']; 
		   $password = $_POST['password']; 
		 
			$db=mysqli_connect("localhost","root","","user_management");

           if (mysqli_connect_errno())
           {
               echo "Failed to connect to MySQL: " . mysqli_connect_error();
           }
 
	      $query = "INSERT INTO user(username, email, password) VALUES ('".$username."','".            $email."','".$password."')";
	
	      
              $result = $db->query($query);
if ($result) {
echo $db->affected_rows."  inserted into database.";
} else {
echo "An error has occurred. The data was not added.";
}
$db->close();
          // mysqli_close($con);
	 }
   
   
   
  
   
}

?>
