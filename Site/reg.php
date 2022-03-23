<?php
$mysqli = new mysqli("localhost", "root", "pass", "testbase");

$fname = htmlspecialchars($_POST['firstname']);
$lname = htmlspecialchars($_POST['lastname']);
$login = htmlspecialchars($_POST['login']);
$pass = htmlspecialchars($_POST['password']);

echo "Вы зарегестрированы как $login <br> <a href='/Site/authorization.html'>Войти</a>";

$mysqli->query("INSERT INTO users VALUES ('$fname', '$lname', '$login', '$pass')");

?>