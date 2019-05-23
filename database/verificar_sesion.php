<?php
    if(isset($_SESSION['rol']) != 'user'){
        header("Location: ../vista/login.html");
	}
?>