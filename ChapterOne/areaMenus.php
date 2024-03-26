<?php
// MAIN AREA
function mainAreaMenu() {
    $mainMenuArray = array(
        1 => "Description\n",
        2 => "Se rapprocher de la porte\n",
        3 => "Aller s'asseoir sur la souche\n",
        4 => "Fouiller dans le buisson\n",
    );

    // Affichage de l'entête
    titleScreen();

    // Affichage de la sélection du menu
    $userChoice = menuTemplate($mainMenuArray);
    echo CLEAR_CONSOLE;
    match ($userChoice) {
        "1" => mainArea(),
        "2" => doorArea(),
        "3" => trunkArea(),
        "4" => bushArea()
    };

}

// DOOR AREA
function doorAreaMenu() : string {
    $doorMenuArray = array(
        1 => "Crier de désespoir\n",
        2 => "Mettre un coup de pied dans la porte\n",
        3 => "Tourner 5 fois sur soi-même\n",
        4 => "Attendre avec une concentration impressionnante\n",
        5 => "Revenir en arrière\n"
    );

    // Affichage de l'entête
    titleScreen();

    // Affichage de la sélection du menu
    return menuTemplate($doorMenuArray);

}

// TRUNK AREA
function trunkAreaMenu() : string {
    $trunkMenuArray = array(
        1 => "Siffloter\n",
        2 => "Regarder ses chaussures\n",
        3 => "Philosopher\n",
        4 => "Revenir en arrière\n"
    );

    // Affichage de l'entête
    titleScreen();

    // Affichage de la sélection du menu
    return menuTemplate($trunkMenuArray);
}

// BUSH AREA
function bushAreaMenu() : string {
    $bushMenuArray = array(
        1 => "PRUDENCE. Vous décidez de tirer une flèche à l'intérieur du buisson\n",
        2 => "TEMERITE. Vous retroussez vos manches et plongez les deux bras au coeur des branches\n",
        3 => "DIPLOMATIE. Après quelques raclements de gorge, vous prenez votre voix la plus affirmée pour communiquer avec l'étrange entité\n",
        4 => "COUARDISE. Se sauver\n"
    );

    // Affichage de l'entête
    titleScreen();

    // Affichage de la sélection du menu
    return menuTemplate($bushMenuArray);
}

// ELF
function elfMenu() {
    $elfArray = array(
        1 => '"Je souhaite une culotte."'. PHP_EOL,
        2 => '"Je souhaite que tu m\'ouvres la porte."'. PHP_EOL,
        3 => '"Je souhaite quitter ce jeu qui m\'a déjà coûté beaucoup trop de temps. Je suis pressé et j\'optimise ma vie."'. PHP_EOL,
        4 => "Par pure méchanceté, vous mettez un coup de pied à l'elfe et repartez vous occupez de cette fichue porte\n"
    );

    // Affichage de l'entête
    titleScreen();

    // Affichage de la sélection du menu
    return menuTemplate($elfArray);
}