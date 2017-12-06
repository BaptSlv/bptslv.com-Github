<?php
function getBdd() {
	$hostbdd = 'localhost';
	$bddname = 'todo_project';
	$unamebdd = 'root';
	$pwdbdd = 'root';
  	$bdd = new PDO("mysql:host=$hostbdd;dbname=$bddname;charset=utf8",
  	"$unamebdd", "$pwdbdd", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
return $bdd;
}