<?php
//database.php

class Database
{
	public $conn;

	public function __construct()
	{
	   $server_name ="localhost";
	   $user_name ="root";
	   $password ="123";
	   $database ="mydb";

	   $this->conn = mysqli_connect($server_name,$user_name,$password,$database);

      	   if(!$this->conn)
	   {
	    echo "Database Connection Error" . mysqli_connect_error($this->conn);
	   }
	}
	
	public function insert($table_name,$data)
        {
	 $string = "INSERT INTO ".$table_name." (";
	 $string .=implode(",",array_keys($data)) . ') VALUES (';
	 $string .= "'" . implode(",",array_values($data)) ."')";

	 if(mysqli_query($this->conn,$string))
	 {
	   return true;
	 }
	 else
	 {
	   echo mysqli_error($this->conn);
	 }
       }

	public function select($table_name)
	{
	 $array = array();
	 $query = "SELECT * FROM " .$table_name."";
 	 $result = mysqli_query($this->conn,$query);
	 while($row = mysqli_fetch_assoc($result))
		{
		 $array[] = $row;
		}
		return $array;
	}

	public function update($table_name,$field_name)
	{
	 $query = "UPDATE " .$table_name."";
	 $query .= "SET " .$qury. "WHERE ".$condition."";

	 if(mysqli_query($this->conn,$query))
	 {
	   return true;
	 } 	
	}
}

?>