<?php

// Inclusion du fichier tools.php
include 'tools.php';
include 'prologue.php';
include './ChapterOne/chapter-one.php';

// Mise en place des menus
function menuTemplate($choices) : string
{
    do {
        echo COLOR_RESET . "Veuillez indiquer votre choix: ";
        echo PHP_EOL . PHP_EOL . YELLOW;
        foreach ($choices as $nb => $choice) {
            echo "[$nb]- $choice";
        }
        echo COLOR_RESET;
        // Demande de saisie à l'utilisateur
        echo "Entrez le nombre correspondant à votre sélection : ";
        $userChoice = trim(fgets(STDIN));

        // Vérification de la validité de la saisie
        if (!in_array($userChoice, array_keys($choices))) {
            // Demande de saisie à nouveau
            echo RED . "Saisie erronée. Veuillez entrer un choix valide : ";
            $userChoice = trim(fgets(STDIN));
        }
    } while (!in_array($userChoice, array_keys($choices)));

    return $userChoice;
}


// Ecran principal
function mainMenu() : void
{
    $mainMenuArray = array(
        1 => "Commencer l'aventure\n",
        2 => "Credits\n",
        3 => "Quitter\n"
    );

    echo CLEAR_CONSOLE . GREEN . SHARPSEPARATOR_HIGH;
    echo SHARPSEPARATOR_LOW . " PHP-Woods V1.0 " . PHP_EOL;
    echo SHARPSEPARATOR_HIGH;

    // Affichage de la sélection du menu
    $userChoice = menuTemplate($mainMenuArray);
    echo CLEAR_CONSOLE;
    match ($userChoice) {
        "1" => mainGame(),
        "2" => creditsChoice(),
        "3" => exit()
    };
}

function mainGame() : void {
    prologue();
    chapterOne();
}

function creditsChoice() : void {
 echo CLEAR_CONSOLE . GREEN . "Programme réalisé avec amour par Benoît Lecoeuvre (benoit@utopios.solutions). Si jamais il y a des bugs, contactez moi mais j'aurai probablement la flemme";
 echo COLOR_RESET . "\nAppuyez sur ENTREE pour revenir au menu...";
 readline();
}

while (true) {
    mainMenu();
}