<?php
function demander_creneau(string $arg1 = "Veuillez entrer une heure :"): array {
    echo $arg1 . "\n"; 
    while (true) {
        $ouverture = (int)readline('Heure ouverture : ');
        if ($ouverture >= 0 && $ouverture <= 23) {
            break; 
        }
    }
    while (true) {
        $fermeture = (int)readline('Heure fermeture : ');
        if ($fermeture >= 0 && $ouverture <= 23 && $fermeture > $ouverture) {
            break; 
        }
    }
    return [$ouverture, $fermeture];
}

function demander_creneaux(string $arg1 = "Veuillez entrer vos créneaux"): array {
    $creneaux = []; 
    $continuer = true; 
    while ($continuer) {
        $creneaux[] = demander_creneau($arg1); 
        $continuer = repondre_oui_non('Voulez vous continuer ? '); 
    }
    return $creneaux;
}