<?php

function prologue() : void {
    $titleScreen = function() {
        echo BLUE . str_repeat("#", 20). PHP_EOL;
        echo str_repeat("#", 5);
        echo " PROLOGUE ";
        echo str_repeat("#", 5). PHP_EOL;
        echo str_repeat("#", 20) . PHP_EOL . PHP_EOL;
    };

    echo COLOR_RESET . $titleScreen() ."Vous êtes un explorateur dans une forêt ancienne bordant la magnifique cité d'Utopolis.\n".
        "Les rumeurs disent que le trésor secret d'Ihabacchus, l'éminent monarque, se trouverait dans son sanctuaire oublié, ".
        "lieu de danger et de mystères.\n".
        "Au cours de votre aventure, vous rencontrerez divers défis et ferez des choix qui influenceront votre capacité à trouver le trésor.\n";
    echo RED . "Donc, prenez garde aventurier. La mort peut vous attendre à chaque tournant.\n\n";

    echo GREEN . "Vous plongez dans la forêt mystérieuse...\n";
    echo COLOR_RESET . "Appuyez sur ENTREE pour continuer";
    readline();
    echo CLEAR_CONSOLE;

    echo COLOR_RESET . $titleScreen() ."Après de longues heures de marches à travers les ronces et les orties, vous vous décidez à déguster de ".
        RED . "succulentes baies rouges\n".
        COLOR_RESET . "De toute évidence, celles-ci semblent contenir du javascript, terrible poison qui vous fait tourner la tête.\n".
        "Vous perdez la raison mais vos mouvements erratiques vous mènent tout droit devant l'entrée du temple d'Ihabacchus, fondateur lui-même d'Utopolis.\n".
        "C'est ici que votre aventure commence.\n\n";

    echo GREEN . "Démarrer l'aventure...\n";
    echo COLOR_RESET . "Appuyez sur ENTREE pour continuer";
    readline();
}