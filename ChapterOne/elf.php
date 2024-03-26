<?php
function grabElf() : void {
    titleScreen();
    echo "N'écoutant que votre courage, vous plongez la moitié de votre corps dans ce magnifique arbuste aux feuilles odorantes.\n".
    "Après plusieurs secondes de sensations ambivalentes, que vous ne savez identifier comme des morsures ou des griffures, vous parvenez à sortir vos membres de la masse sombre.\n".
    MAGENTA. "Stupéfaction. Vous avez une prise.\n". COLOR_RESET. "Vous tenez par la cheville un petit être, certes élégant et avec un magnifique chapeau, mais toutefois passablement en colère.\n".
    "Celui-ci vous hèle: ". YELLOW. '"Laisse-moi tranquille vaurien. Ne me connais-tu pas ? Je suis '. RED. 'Arthur le musculeux'. YELLOW . ', dévoreur de cités et destructeur des temps oubliés".'. PHP_EOL.
    COLOR_RESET. "Vous froncez les sourcils.\nIl est vrai que sa présentation en jette un max. Vous n'en attendiez pas moins d'un petit être farceur au chapeau rigolo.\n\n".
    MAGENTA. "Vous décidez donc de le reposer". COLOR_RESET;
    readline();
//    echo CLEAR_CONSOLE;

    // Partie 2
    titleScreen();
    echo "Une fois celui-ci à terre, vous remarquez sa toute petite taille, celui-ci ne dépasse pas votre genou.\n".
        "Vous décidez cependant de ne pas faire de remarques sur votre surprise. D'une part, car vous êtes bien éduqué. D'autre part, parce que, souvenez-vous, ce farfadet était passablement en colère.\n".
        "Ignorant vos profondes réflexions, le petit être se dépoussiera ses habits bouffants vert à paillettes puis vous fixa du regard.\n".
        YELLOW. "Arthur: Merci bien étranger. Pour te remercier de ne pas m'avoir violenté sans raison, je vais t'accorder un voeu, mais ce sera le seul, alors réfléchis bien...\n\n".
        MAGENTA. "\nVous réfléchissez bien...". COLOR_RESET;
    readline();
    elfArea();
}
