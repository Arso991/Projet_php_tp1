<?php
$age_du_visiteur = 17;
echo "Le visiteur a $age_du_visiteur ans <br>";

$var1 = 30;
$var2 = 23;
echo $var3 = $var1 + $var2;

//Afficher
if ($var3 == "53") {
    echo "success";
} else {
    echo "error";
}

$result = ($var3 == 55) ? "success" : "error";
echo $result;

$maChaine = "Je suis un etudiant de l'ecole 229 en dev web";
echo strlen($maChaine) . "<br>"; //nombre de chaine qu'il y a dans une chaine
echo str_replace("etudiant", "eleve", $maChaine) . "<br>"; //remplacer un mot dans une chaine
echo str_shuffle($maChaine) . "<br>"; //mélanger une chaine de caractere
echo strtoupper($maChaine) . "<br>"; //pour mettre en majuscule
echo strtolower($maChaine) . "<br>"; //pour mettre en miniscule
$madate = date("H:i:s") . "<br>";
echo $madate;
$jour = date('d');
$mois = date('m');
$annee = date('Y');
$heure = date('H');
$minute = date('i');

echo 'Bonjour ! Nous sommes le ' . $jour . '/' . $mois . '/' .
    $annee . ' et il est ' . $heure . ' h ' . $minute . "<br>";

function DireBonjour($nom)
{
    echo "Bonjour $nom <br>";
}

DireBonjour("Tom");
DireBonjour("Didier");
DireBonjour("Coman");
DireBonjour("Lesly");

function VolumeCone($rayon, $hauteur)
{
    $volume = $rayon * $rayon * 3.14 * $hauteur * (1 / 3);
    return $volume;
}

$volume = VolumeCone(4, 21);
echo "Le volume du cone de rayon 4 et de hauteur 21 est $volume m3";