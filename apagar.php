<?php

include('database.php');

if(empty($_GET["id"])) {
	header('Location: ./');
	exit;
}

$query = mysqli_query($conecta, "DELETE FROM user WHERE id = " . $_GET["id"]);

header('Location: ./index.php');




?>