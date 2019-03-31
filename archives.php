<?php 
/* if ($notes >= 10) {
    echo 'Tu as a la moyenne';
} else if ($notes === 10) {
    echo 'Tu a juste la moyenne !'; 
} else {
    echo 'Dommage tu n\'a pas la moyenne !'; 
} */
/* if ((9 <= $heure && $heure <= 12) || (14 <= $heure && $heure <= 17)) {
    echo 'Le magasin est ouvert'; 
} else {
    echo 'Le magasin est fermé !'; 
}
 */
/* True && true = true 
true && false = false 
false && false = false 

true || true = true 
true || false = true 
false || false = false  */

/* $notes = []; 
while (true) {
    $userAction = readline('Inserer note ou marquer fin ! :');
    if ($userAction === "fin") {
        break; 
    } else {
        $notes[] = (int)$userAction; 
    }
} 
foreach ($notes as $note) {
    echo "- $note \n"; 
} */

/* $creneaux = [];
# Demande user d'entrer un créneaux 
while (true) {
    # Demande heure de debut 
    $debut = (int)readline('Heure ouverture : ');
    # Demande heure de fin  
    $fin = (int)readline('Heure de fin :'); 
    # verifie que heure de debut < heure de fin 
    if ($debut >= $fin) {
        echo "Warning : Impossible d'enregistrer heure $debut est sup. à heure de fin $fin";
    } else { 
        $creneaux[] = [$debut, $fin]; 
        $userAction = readline('Voulez vous save un nouveau créneau : ');
        # Rajouter un nouveau créneau (0/n) 
        if ($userAction === "n") {
            break; 
        }
    }
}

# Demande user de rentrer une heure
$heure = (int)readline("A qu'elle heure visiter le magasin : ");
$valider = false; 

foreach($creneaux as $creneau) {
    if ($heure >= $creneau[0] && $heure <= $creneau[1]) {
        $valider = true; 
        break; 
    }
}

# Affiche etat ouverture du magasin
if ($valider) {
    echo 'Le magasin seras ouvert !'; 
} else {
    echo 'No dsl'; 
}
 */

/* # On demande a user mot 
$userMot = readline('Entrer votre chaine de caratere : ');
$userMot = strtoupper($userMot);
# On inverve les lettre du mot 
$mot = strrev($userMot);
    # si paleindrome alors affiche oui c'est un palendrome 
    if ($mot === $userMot) {
        echo 'Le mot est un palindrome'; 
    } else {
    # sinon affiche c'est pas un palindrome 
        echo 'Ce n\'est pas un palindrome'; 
    } */
 
# Somme ensemble des valeurs / nombre des éléments (taille du tableau)
/* $notes = [10, 20, 13]; 

$moyenne = (array_sum($notes) / count($notes)); 

echo 'La moyenne est ' . round($moyenne, 2);  */

/* $insultes = ['merde', 'con'];
$userMot = readline('Entrer une phrase :'); 
foreach ($insultes as $insulte) {
    $replace = str_repeat('*', strlen($insulte)); 
    $userMot = str_replace($insulte, $replace, $userMot);
}
echo $userMot;  */


