<?php
// Nous utilisons déjà les classes natives de PHP comme DateTime
$maDate = new DateTime();
var_dump($maDate);

// Mais nous pouvons aussi créer nos propres classes pour palier au fait que les classes existantes n'ont pas exactement (voir pas du tout) le comportement que nous voudrions avoir lors du développement d'une application
// En effet, dans les classes existantes, il n'existe pas de classe Personnage dont on pourrait se servir pour créer de nouveau personnage dans notre jeu vidéo en ligne par exemple

// Appel de notre fichier contenant la classe
require "Personnage.php";

// Instanciation de la classe avec le mot-clé new, que l'on enferme dans une variable pour pouvoir réutiliser l'instanciation plus facilement
$gandalf = new Personnage();
var_dump($gandalf);

// A partir du moment où l'on a instancié la classe, on peut accéder à toutes ses variables et ses méthodes

// On peut accéder à un attribut (ou variable) de la classe via la flèche ->
$gandalf->pointsDeVie;
var_dump($gandalf->pointsDeVie);

$gandalf->nom = "Gandalf";
var_dump($gandalf->nom);

// On peut accéder à une méthode (ou fonction) de la classe également via la flèche ->
$gandalf->perteDePointsDeVie();

// Si on réaffiche la variable de points de vie, alors elle a perdu 10 points de vie
var_dump($gandalf->pointsDeVie);

// Appel du fichier contenant la classe avec constructeur
require "Personnage2.php";

$magicien = new Personnage2("Gandalf");
var_dump($magicien->getNom());
$magicien->setNom("Sarumane");
var_dump($magicien);