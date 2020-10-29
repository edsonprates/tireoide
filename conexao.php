<?php

$conn = new mysqli("localhost", "root", "", "tireoide");

if ($conn->connect_error) {

	echo "Error:" . $conn->connect_error;


}






?>