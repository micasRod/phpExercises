<?php
$name = isset($_POST['name']) ?  $_POST['name'] : '';
$last_name = isset($_POST['last_name']) ?  $_POST['last_name'] : '' ;
$age = isset($_POST['age']) ?  $_POST['age'] : '';
$class = isset($_POST['class']) ?  $_POST['class'] : '';
$password = isset($_POST['password']) ?  $_POST['password'] : '';

setcookie("name", $name, time() + 3600);
echo "<p> ¡Bienvenido $name $last_name ! </p>";


// Define el nombre de la cookie que quieres verificar
$cookie_name = "name";

// Verifica si la cookie existe
if (isset($_COOKIE[$cookie_name])) {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
} else {
    echo "Cookie named '" . $cookie_name . "' is not set!";
}


?>



