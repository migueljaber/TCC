<?php

	session_start();// para destruir a sess�o tem que abrir 
	session_destroy();
	header("Location:index.php");// este c�digo fecha as p�ginas.



?>