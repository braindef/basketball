<?php
class DBController {
	private $host = "marcland.mysql.db.internal";
	//private $host = "localhost"; 
	private $user = "marcland_telli";
	private $password = "qayxswedc$";  //bitte das produktive Passwort nicht öffentlich auf dem Github Server speichern.
	private $database = "marcland_telli";
	private $conn;
	
	function __construct() {
		$this->conn = $this->connectDB();
	}
	
	function connectDB() {
		$conn = mysqli_connect($this->host,$this->user,$this->password,$this->database);
                if($conn==false)
                echo "<font color=red>Database Connection Error</font>";
                else
                echo "<!--Connected to database-->";
		return $conn;
	}
	
	function runQuery($query) {
		$result = mysqli_query($this->conn,$query);
		while($row=mysqli_fetch_assoc($result)) {
			$resultset[] = $row;
		}		
		if(!empty($resultset))
			return $resultset;
	}
	
	function numRows($query) {
		$result = mysqli_query($this->conn,$query);
		$rowcount = mysqli_num_rows($result);
		return $rowcount;	
	}
	function executeUpdate($query) {
        $result = mysqli_query($this->conn,$query);        
		return $result;		
    }
}
?>
