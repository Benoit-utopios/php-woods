<?php

// IMPORTS
include "areaDescriptions.php";
include "areaMenus.php";
include "areaActions.php";


// LOCALISATION
$chapterStartToggle = false;
$localisation = "Entrée du temple";
function localisationSet(string $newLocalisation) : string {
    return $GLOBALS['localisation'] = $newLocalisation;
}

function chapterOne() : void {
    echo CLEAR_CONSOLE;
    titleScreen();
    mainArea();
}

function titleScreen() : void {
    global $chapterStartToggle;
    global $localisation;

    echo CLEAR_CONSOLE;
    echo BLUE. SHARPSEPARATOR_LOW. SHARPSEPARATOR_LOW. SHARPSEPARATOR_HIGH;
    echo SHARPSEPARATOR_LOW. " Chapitre 1: Le seuil du sanctuaire ". PHP_EOL;
    echo SHARPSEPARATOR_LOW. SHARPSEPARATOR_LOW. SHARPSEPARATOR_HIGH . COLOR_RESET;

    if (!$chapterStartToggle) {
        echo "Appuyer sur ENTREE pour commencer...";
        $chapterStartToggle = true;
        readline();
    } else {
        echo CYAN. "Localisation: $localisation" . PHP_EOL . PHP_EOL;
        echo COLOR_RESET;
    }
}

function mainArea() : void {
    // Changement d'écran
    localisationSet("Entrée du temple");
    titleScreen();
    // Description de la zone
    mainAreaDesc();
    // Affichage du menu
    mainAreaMenu();
}

function doorArea() : void {
    // Changement d'écran
    localisationSet("Zone de la porte");
    titleScreen();
    // Description de la zone
    doorAreaDesc();
    // Affichage du menu
    $userChoice = doorAreaMenu();
    // Action de l'utilisateur
    doorActions($userChoice);
};

function trunkArea() {
    // Changement d'écran
    localisationSet("Tronc d'arbre");
    titleScreen();
    // Description de la zone
    trunkAreaDesc();
    // Affichage du menu
    $userChoice = trunkAreaMenu();
    // Action de l'utilisateur
    trunkActions($userChoice);
};

function bushArea() {
    // Changement d'écran
    localisationSet("Buisson inquiétant");
    titleScreen();
    // Description de la zone
    bushAreaDesc();
    // Affichage du menu
    $userChoice = bushAreaMenu();
    // Action de l'utilisateur
    bushActions($userChoice);
};

function elfArea() {
    // Changement d'écran
    localisationSet("Aux abords d'un elfe enchanteur");
    titleScreen();
    // Affichage du menu
    $userChoice = elfMenu();
    // Action de l'utilisateur
    elfActions($userChoice);
};