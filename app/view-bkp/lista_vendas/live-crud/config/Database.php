<?php
class Database{
	
	private $host  = 'localhost:10040';
    private $user  = 'root';
    private $password   = "root";
    private $database  = "phpzag_demos"; 
    
    public function getConnection(){		
		$conn = new mysqli($this->host, $this->user, $this->password, $this->database);
		if($conn->connect_error){
			die("Error failed to connect to MySQL: " . $conn->connect_error);
		} else {
			return $conn;
		}
    }
}
?>