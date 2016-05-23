<?php

class Database
{
	public $server;
	public $username;
	public $userpass;
	public $dbname;
	public $conn;

	function __construct($server,$username,$userpass,$dbname){
		self::server=$server;
		self::username=$username;
		self::userpass=$userpass;
		self::dbname=$dbname;
		self::db_connect();
	}
	function db_connect(){
		$this->connection=mysqli_connect($this->server,$this->username,$this->userpass,$this->dbname);
		if ($this->connection) {
			echo "connected";
			# code...
		}
		else{
			echo "false";
		}
	}
}

class File {
	public $fileName;
	public $fileEx;
	public $filePath;
	public $fileConn;

	function __construct($fileName,$fileEx){
		$this->fileName=$fileName;
		$this->fileEx=$fileEx;
		$this->filePath="files/".$this->fileName.$this->fileEx;
		if (file_exists($this->filePath)) {
			echo "this file already exist";
			# code...
		}
		else{
			$this->fileConn=fopen($this->filePath, "w");
			fwrite($this->fileConn, $this->filePath);
		}
	}
}
?>