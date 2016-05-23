<?php
// $path ="files/codecademy.txt";
// $file_connect = fopen($path, "a");
// fwrite($file_connect, "salam");


 include "model.php";
// $newDb= new Database("localhost","root","","files");
if (isset($_POST['submit'])) {
	$fileName=$_POST['fileName'];
	$fileEx=$_POST['fileEx'];

	$newFile = new File($fileName,$fileEx);
	# code...
}
?>
