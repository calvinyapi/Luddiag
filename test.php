<?php
require_once "Organisateur.php";
require_once "Jeu.php";
require_once "Connexion.php";


Connexion::connect();

// Organisateur::AjouterOrganisateur(50, 'ezaaze','fazzer', 'ezazetzet', 'ezaatezze', 'zeaztzet', 'aezrzet', 'ezazzet', 'zeezate');
// Organisateur::AjouterExposant(30, 'ezaaze','fazzer', 'ezazetzet', 'ezaatezze', 'zeaztzet', 'aezrzet', 'ezazzet', 'zeezate');

Jeu::UpdateJeu(1, "gros cul", "grosse chate");

 ?>