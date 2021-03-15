<?php 

class db
{
  private $db_handle;
 
  private $host = 'localhost';
  private $database = 'm133';
  private $userid = 'root'; 
  private $password = '';
 
 
     public function __construct() {
        
         $this->db_handle = mysqli_connect($this->host, $this->userid, $this->password, $this->database); 
 
         if (!$this->db_handle)
         {
             die("Connection not established: " . mysqli_error());
         }
 
         if (!mysqli_select_db($this->db_handle,$this->database))
         {
                 die("Unable to select database: " . mysqli_error());
         }
 
     }
 
     public function select($sql) {
 
         $result = mysqli_query($this->db_handle,$sql);
 
         if (!$result)
         {
             die("Unable to access database: " . mysqli_connect_error());
         }
 
         $rows = mysqli_num_rows($result);
 
         $rowdata = array();
 
         if ($rows)
         {
             while ($row = mysqli_fetch_assoc($result))
             {
                 $rowdata[] = $row;
             }
         }
 
         return $rowdata;
 
     }
    
 
     public function insert($sql)
     {
         $result = mysqli_query($this->db_handle,$sql);
         
         return $result;
     }
 
     public function __destruct()
     {
         mysqli_close($this->db_handle);
 
     }
 
 }
 
 ?>