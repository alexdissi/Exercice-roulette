<?php

use LDAP\Result;

echo "rien ne va plus ! \n";
$resultat = rand(0, 36);
// plus joli
$is_odd = $resultat % 2;
$divise = $resultat / 2;
$is_pair = (floor($divise) === $divise);


$verif = intval($argv[1])  === $resultat;
$result = intval(1);

$mise = intval($argv[2]) * 35;
$miseInitial = $argv[2];
$misePasse = intval($argv[2]) * 2;


function verifMise($verif, $mise, $miseInitial)
{
    if ($verif == 'vous avez gagné') {
        $message = "tu a gagner" . " " . $mise . "€" . "\n";
    } else {
        $message = 'tu a perdu' . " " . $miseInitial . "€" . "\n";
    }
    return array(
        'message' => $message
    );
}


function passeManque($result, $misePasse, $resultat)
{
    if ($result >= 19 && $resultat >= 19) {
        $messagePasse = "Passe, tu a gagner" . " " . $misePasse . "€" . "\n";
    } else if ($result <= 18 && $resultat <= 18) {
        $messagePasse = "Manque, tu a gagner" . " " . $misePasse . "€" . "\n";
    } else {
        $messagePasse = "Tu a perdu looser \n";
    }
    return array(
        'messagePasse' => $messagePasse
    );
}

function VerifCouleur($divise, $result, $resultat, $miseInitial)
{
    if ($result === $divise && $resultat === $divise) {
        $messageCouleur = "Couleur Noir tu a gagner" . " " . $miseInitial . "€" . "\n";
    } else if ($result !== $divise && $resultat !== $divise) {
        $messageCouleur = "Couleur rouge tu a gagner" . " " . $miseInitial . "€" . "\n";
    } else {
        $messageCouleur = "tu a perdu \n";
    }
    return array(
        'messageCouleur' => $messageCouleur
    );
}

$verifMise = verifMise($verif, $mise, $miseInitial);
$passeManque = passeManque($result, $misePasse, $resultat);
$verifCouleur = VerifCouleur($divise, $result, $resultat, $miseInitial);

echo $resultat . " " . ($is_odd ? 'impair' : 'pair') . " " . ($is_odd ? "rouge" : "noir") . " " .  ($verif ? "vous avez gagné" : "vous avez perdu") . ", " . $verifMise['message'] . " " . $passeManque['messagePasse'] . $verifCouleur['messageCouleur'];
