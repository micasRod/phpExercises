<?php
$name = isset($_POST['name']) ?  $_POST['name'] : '';
$last_name = isset($_POST['last_name']) ?  $_POST['last_name'] : '' ;
$age = isset($_POST['age']) ?  $_POST['age'] : '';
$class = isset($_POST['class']) ?  $_POST['class'] : '';
$password = isset($_POST['password']) ?  $_POST['password'] : '';


echo "<p> ¡Bienvenido $name $last_name ! </p>";
?>



