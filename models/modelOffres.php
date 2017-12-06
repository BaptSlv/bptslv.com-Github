<?php
require 'config.php';

function getOffreById($id) {
	$bdd = getBdd();
	$offid = $bdd->prepare('SELECT * FROM Offres WHERE id = ?');
	$offid->execute(array($id));
	return $offid->fetch(PDO::FETCH_ASSOC);
}

function getOffres() {
	$bdd = getBdd();
	$offres = $bdd->prepare('SELECT * FROM Offres');
	$offres->execute();
	return $offres->fetchAll(PDO::FETCH_ASSOC);
}