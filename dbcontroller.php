<?php
//if $_GET["install"]==1

if ($_GET["install"]==1)
{
	echo "Installing Database";
	$db_handle = new DBController();
	$db_handle->installDatabase();
}


if ($_GET["test"]==1)
{
	echo "Testing Database";
	$db_handle = new DBController();
	$db_handle->test();
}

class DBController {
	private $host = "marcland.mysql.db.internal";
	//private $host = "localhost"; 
	private $user = "marcland_telli";
	private $password = "qayxswedc$";  //bitte das produktive Passwort nicht öffentlich auf dem Github Server speichern.
	private $database = "marcland_telli";
	private $conn;
	private $db;
	
//	function __construct() {
//		$this->conn = $this->connectDB();
//	}
	
	function __construct() {
		$this->db = $this->connectDB();
	}
	
//	function connectDB() {
//		$conn = mysqli_connect($this->host,$this->user,$this->password,$this->database);
//                if($conn==false)
//                echo "<font color=red>Database Connection Error</font>";
//                else
//		{
//                echo "<!--Connected to database-->";
//		if ($result = mysqli_query($this->conn,"SHOW TABLES LIKE 'basketball'")) {
//		    if($result->num_rows == 1) {
//			return;
//		    }
//		}
//		else {
//			echo "Table does not exist";
//			$this->installDatabase();
//		}
//		}
//		return $conn;
//	}

	function connectDB() {
		$db = new PDO('mysql:host='.$this->host.';dbname='.$this->database.';charset=utf8mb4',$this->user, $this->password);
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		return $db;
	}

	function test() {
		try {
			//connect as appropriate as above
			$this->db->query('hi'); //invalid query!
		} catch(PDOException $ex) {
			echo "An Error occured!"; //user friendly message
			//some_logging_function($ex->getMessage());
		}

		foreach($this->db->query('SELECT * FROM test') as $row) {
			
	}


	
//	function runQuery($query) {
//		$result = mysqli_query($this->conn,$query);
//		while($row=mysqli_fetch_assoc($result)) {
//			$resultset[] = $row;
//		}		
//		if(!empty($resultset))
//			return $resultset;
//	}

	function runQuery($query) {
		foreach($this->db->query($query) as $row) {
			array_push($resultset,$row)		
			print_r($resultset);
		}
		if(!empty($resultset))
		return $resultset;
	}
	
//	function numRows($query) {
//		$result = mysqli_query($this->conn,$query);
//		$rowcount = mysqli_num_rows($result);
//		return $rowcount;	
//	}

	function executeUpdate($query) {
        $result = mysqli_query($this->conn,$query);        
		return $result;		
    	}

	//added:
	function query($query) {
        $result = mysqli_query($this->conn,$query);        
		return $result;		
    	}

	//added:
	function close() {
        $result = $this->conn->close();        
		return $result;		
    	}

	//added:
        function installDatabase() {

		# MySQL with PDO_MYSQL  
		$db = new PDO("mysql:host=$this->host;dbname=$this->database", $this->user, $this->password);

		$query = file_get_contents("termine.sql");

		$stmt = $db->prepare($query);

		if ($stmt->execute())
		     echo "Success";
		else 
		     echo "Fail";

	}
}
?>
