<?php

	session_start();
	session_destroy();
	$_SESSION = array(); #	Reiniciando arreglo por precaucion
	header('Location: ../');

?>