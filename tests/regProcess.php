<?php 
	$mysqli = new mysqli("localhost", "u422352348_admin", "marta20", "u422352348_ordy");
	if ($mysqli->connect_errno) {
		echo "�� ������� ������������ � MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}
	print_r($_POST);
?>