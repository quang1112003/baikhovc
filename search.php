<?php
session_start();
echo $_GET ["q"]."<br/>";
echo $_GET ["year"]."<br/>";

$user = $_SESSION["user"];
var_dump($user);