<?php

	class DatabaseConnection
    {
       protected $host = 'localhost';
	   private $username = 'root';
	   public $pass =""; 
	   public $database ="user_management"; 
       
	  
	  
	   function establish_conn()
	   {
	     
		  $conn= mysql_connect($this->host,$this->username,$this->pass,$this->database);

         if(!$conn)
         {
            die ("Cannot connect to the database <br /> ");
         }

         else
         {

            $this->myconn = $conn;

            echo "You're connected to database <br /> ";

          }

        return $this->myconn;


	   }
	   
	   
	   function execute($getSelect)
	   {
		  /* $query2 = "SELECT * FROM user";
          $result2 = mysql_query($query2,$this->establish_conn()) or die (mysql_error());
          //confirm_query($result2);
         // $num = mysql_num_rows($result2); 
          while($msginfo = mysql_fetch_array($result2))
		  {
            echo $msginfo['username'];
            echo  $msginfo['email'];
            
           }
	     return $query2;*/
		  
       $getSelect = mysql_query("select * from user");
        print "<label for='user'> Your information: <br>";
        print "<select name='user'>";
        while ($l= mysql_fetch_array ($getSelect)) {
            $this->cat_id = $l['email'];
            $this->cat_name = $l['username'];
		
            print "<option value='{$this->cat_id}'>{$this->cat_nome} </option>";
        
        print "</select>";
        print "</label>";
         }
	   
		}
	}
?>

















