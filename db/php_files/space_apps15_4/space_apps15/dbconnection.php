<?php
 
 
 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "personal_doc_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


function empty2null($value) {
   return $value===''||$value==='undefined-undefined-' ? null : $value;
}



?>