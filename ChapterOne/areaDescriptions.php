<?php
function mainAreaDesc() : void {
    echo "Devant vous se tient le temple majestueux. ".
        GREEN."Vous décidez de regarder autour de vous pour y trouver l'entrée.\n".
        MAGENTA."Une imposante porte de pierre ".
        COLOR_RESET."semble se tenir non loin de vous, elle paraît figée depuis des siècles. Majestueuse et grandiose, bordée d'améthystes précieuses.\n".
        "Pas très loin, de l'autre côté, vous scrutez ".
        MAGENTA."une souche mystérieuse ".
        COLOR_RESET."qui semble vous attirer inexorablement.\n".
        "Mais alors que vous êtes dans vos pensées, un bruit suspect semble provenir ".
        MAGENTA."d'un buisson ".
        COLOR_RESET."près de l'arrière des sculptures du temple...\n";

    readline();
}

function doorAreaDesc() : void {
    echo "Vous arrivez devant la porte. Celle-ci semble peser des tonnes, ".
        GREEN."il faudrait véritablement un miracle pour qu'elle puisse s'ouvrir.\n".
        COLOR_RESET."Après avoir judicieusement abandonné l'idée d'ouvrir une porte de 700kg du bout des ongles, ".
        "le désespoir semble soudain vous envahir...";

    readline();
}

function trunkAreaDesc() : void {
    echo "Vous approchez du mystérieux tronc d'arbre. Vu d'un peu plus près, il ne semble finalement pas si mystérieux que ça...\n".
        GREEN. "Maintenant que vous êtes arrivés ici, vous décidez de vous asseoir. Un peu de repos n'a jamais fait de mal";

    readline();
}

function bushAreaDesc() : void {
    echo MAGENTA."Vous vous rapprochez lentement et avec discrétion de l'inquiétant buisson, naviguant lentement entre les nombreux acacias bordant le temple et évitant soigneusement le moindre bruit.\n".
    COLOR_RESET."A votre arrivée, celui-ci se fige soudain, comme s'il vous avait aperçu.\n".
    "N'étant plus qu'à quelques pas de l'arbuste, vous vous décidez à agir, car le temps est compté...";

    readline();
}