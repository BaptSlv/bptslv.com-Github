<?php
session_start();
require '../models/modelOffres.php';

$items = 0;
$total = 0;
if(!isset($_SESSION['panier'])) {
	$_SESSION['panier'] = array();
} else {
	foreach ($_SESSION['panier'] as $panier) {
		$items += $panier['quantity'];
		$offresult = getOffreById($panier['id']);
		$total += $offresult['price'] * $panier['quantity'];
	}
}

require '../views/vueButtonPanier.php';

if(isset($_POST['SavePanier'], $_POST['offresid'])
	&& !empty($_POST['offresid'])) {
	$tabid = array_search(htmlspecialchars($_POST['offresid']), array_column($_SESSION['panier'], 'id'));
		if($tabid === false) {
			array_push($_SESSION['panier'], array( 'id' => htmlspecialchars($_POST['offresid']), 'quantity' => 1));
			header('Location:/bptslv.com/controlers/indexOffres.php');
		} else {
			$_SESSION['panier'][$tabid]['quantity']++;
			header('Location:/bptslv.com/controlers/indexOffres.php');
		}
}

$offres = getOffres();
if($offres) {
	require '../views/vueOffres.php';
} else {
	$msgErreur = 'Tache introuvable';
	require '../views/vueErreur.php';
}

require '../templates/offres.php';