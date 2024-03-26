<?php
// IMPORTS
include 'elf.php';

// DOOR AREA
function doorActions(string $userChoice) : void {
    echo CLEAR_CONSOLE;
    titleScreen();
    match ($userChoice) {
        "1" => screamingLoud(),
        "2" => shootTheDoor(),
        "3" => turnForLife(),
        "4" => waitAndSee(),
        "5" => mainArea()
    };

    readline();
    doorArea();
}

function screamingLoud() : void {
    echo "Face à tant d'impuissance, il vous vient soudain l'idée de crier tout votre désarroi, ".
        "que souhaitez-vous crier ?\n".YELLOW;
    $userScream = strtoupper(readline("Crier: "));

    if ($userScream === "ANTOINE") {
        echo "Le dieu du front vous ouvre les bras et vous pouvez le rejoindre dans son palais d'or et de diamant.";
    } else if ($userScream === "LAVA") {
        echo GREEN. "Soudain, un grondement se fit entendre. Un nuage de poussière sortit des interstices du temple \n".
            "Et en quelques secondes, les portes laissèrent place à un trou béant, menant tout droit vers les entrailles du temple\n";
        echo "Bravo vous avez fini le jeu ! Financez mon kickstarter pour une sortie plus rapide du chapitre 2.\n"
        ."(Non je rigole, mais vous pouvez me payez un café)\n";
        $userRestart = readline("Voulez-vous jouez à nouveau ? [oui/non]: ");
        echo COLOR_RESET;
        $userRestart === "oui" ? mainMenu() : exit();
    } else {
        echo RED.$userScream." !!!!!!\n";
        echo COLOR_RESET."Bon ça défoule, mais il est peut-être temps de réfléchir à des choses plus sérieuses.";
    }
    echo COLOR_RESET;
}

function shootTheDoor() : void{
    echo "Vous prenez votre élan et froncez les sourcils. Après tout, vous êtes un puissant aventurier.\n".
        "Peu de chance qu'une porte vous arrête...\n\n";
    echo GREEN. "Vous bondissez d'une traite et visez pile dans la jointure des portes. Un bruit sourd se fait entendre...\n";
    echo COLOR_RESET. "Ecran noir. Vous êtes au sol et de chaudes larmes coulent sur vos joues. En espérant que continuer l'aventure en boîtant ne vous affecte pas\n".
        "Un peu d'humilité, que diable...";
}

function turnForLife() : void {
    echo "Qu'est ce que vous faîtes exactement ? Vous comptez invoquer des esprits millénaires ou ce genre de choses ?\n".
        "Espérons juste que personne ne vous ait vu...";
}

function waitAndSee() : void {
    echo "Vous vous tenez fièrement devant la porte, l'oeil vif et le sourcil dressé. Votre intensité est remarquable.\n".
        "Pour autant, il semblerait que rien ne se passe. Après d'humiliantes minutes -et juste avant que d'imposants vautours ne viennent vous picorer le crâne-, vous abandonnez et tentez d'oublier ce long et douloureux moment.";
}

// TRUNK AREA
function trunkActions(string $userChoice) : void {
    echo CLEAR_CONSOLE;
    titleScreen();
    match ($userChoice) {
        "1" => whistling(),
        "2" => lookAtShoes(),
        "3" => philosophy(),
        "4" => mainArea()
    };

    readline();
    trunkArea();
}

function whistling() {
    echo "Un étrange air diablement envoûtant vous vient soudain en tête, vous ne pouvez pas vous empêcher d'en siffler l'air\n".
        MAGENTA."Never gonna give you up \xe2\x99\xaa\n".
        CYAN."Never gonna let you down \xe2\x99\xa9\n".
        YELLOW."Never gonna run around and desert you \xe2\x99\xaa\n".
        COLOR_RESET."Très étrange... Mais il est maintenant temps de reprendre la route.";
}

function lookAtShoes() {
    echo "Maintenant que vous êtes détendu, vous vous décidez de regarder vos pieds. On ne peut pas dire que vos chaussures ont fières allures...\n".
        MAGENTA."Mais vous constatez étrangement d'énormes plants de lavande épars tout autour de vous, depuis quand sont-ils là ?\n".
        COLOR_RESET."Déçu de la triste découverte que cette somptueuse et délicate odeur que vous sentez depuis tout à l'heure ne vient pas de votre douche mensuelle, vous partez la mine renfrognée";
}

function philosophy() {
    echo "Le vent balayant vos cheveux, vous êtes soudain pris d'un puissant élan de grâce intellectuelle. Depuis combien de temps êtes-vous là ? Mais qu'est-ce donc que le temps ?\n".
        "Ah, le temps ! Ce concept si omniprésent et pourtant si insaisissable, qui a fasciné les philosophes, les scientifiques et les poètes depuis des siècles. Le temps, cette dimension mystérieuse qui semble s'écouler de manière implacable, nous entraînant dans son sillage vers un avenir incertain, tout en nous laissant des souvenirs plus ou moins fidèles du passé.

Le temps, cette réalité apparemment objective, et pourtant si subjective, qui peut sembler s'étirer à l'infini lorsque l'on s'ennuie, ou filer à toute allure lorsque l'on s'amuse. Le temps, cette illusion qui nous donne l'impression de contrôler notre vie, tout en nous rappelant sans cesse notre propre mortalité.

Le temps, cette notion complexe qui a donné lieu à de multiples théories et interprétations, depuis les conceptions cycliques de l'Antiquité jusqu'aux théories de la relativité d'Einstein. Le temps, cette réalité qui nous échappe constamment, et qui pourtant semble être le fondement même de notre expérience consciente.

Le temps, cette réalité énigmatique qui semble se dérober à toute tentative de définition, et pourtant qui imprègne notre langage, notre culture, notre pensée. Le temps, cette réalité qui nous rappelle notre finitude, mais qui nous invite aussi à profiter de chaque instant, à vivre pleinement l'instant présent, à savourer les petits bonheurs de la vie.

Le temps, cette réalité qui nous rappelle notre interdépendance, notre appartenance à un tout plus vaste, notre place dans l'univers. Le temps, cette réalité qui nous invite à réfléchir sur notre propre existence, notre propre identité, notre propre destinée.

Bref, le temps, cette réalité à la fois si familière et si mystérieuse, qui nous accompagne à chaque instant de notre vie, et qui pourtant reste un des plus grands mystères de l'univers. Alors, prenons le temps de réfléchir sur le temps, de savourer le temps, de vivre le temps, car après tout, comme le disait si bien Saint-Exupéry, ".'"le temps que tu as perdu pour ta rose, fait ta rose si importante"';
}

// TRUNK AREA
function bushActions(string $userChoice) : void {
    $toggleElf = false;
    echo CLEAR_CONSOLE;
    titleScreen();
    match ($userChoice) {
        "1" => shootArrow(),
        "2" => $toggleElf = true,
        "3" => talk(),
        "4" => run()
    };

    if ($toggleElf) {
        grabElf();
    }

    readline();
    bushArea();
}

function shootArrow() : void {
    echo "Vos années de crapahutage vous ont appris à manoeuvrer ces situations dangereuses\n".
    "Sans le moindre tremblement et avec une légèreté remarquable, vous hissez votre index à niveau de votre carquois \n".
    "Votre autre main étant déjà sur votre hanche, prête à dégainer. \n".
    "Concernant vos yeux, plus aucun clignement n'est perceptible, vous êtes tel le chat jouant avec sa proie, le temps s'est arrêté autour de vous\n".
    MAGENTA. "Une ultime danse avec la mort. Un baiser empoisonné entre la pointe de votre flèche et la chair démoniaque qui se meut devant vous.\n".
    "Dernière respiration, le rideau se ferme et le couperet s'abat\n\n".
    COLOR_RESET. "Puis, vous vous rappelez que vous n'avez pas d'arc, cette engeance du démon s'en sort bien pour cette fois";
}

function talk() : void {
    echo "Tel un coup de tonnerre, votre voix claque dans un vrombissement maîtrisé:\n".
        RED. "Qui êtes-vous ? Que me voulez-vous ?\n".
        COLOR_RESET."Aucune réponse. Vous esquissez un sourire. Cela ne peut vouloir dire qu'une chose:\n".
        "Cette créature n'a visiblement pas vos bonnes manières. Vous vous refusez donc à boire le thé avec elle et tournez les talons";
}

function run() : void {
    echo "Lucide jusqu'au bout, vous vous dîtes que toutes ces années de bataille et d'entraînement acharné ne peuvent pas n'avoir servies à rien\n".
        MAGENTA. "Après un spectaculaire volte-face, vous prenez vos jambes à votre cou en couinant sobrement de peur panique.".
        COLOR_RESET;
        readline();
        mainArea();
}

// ELF AREA
function elfActions(string $userChoice) : void {
    echo CLEAR_CONSOLE;
    titleScreen();
    match ($userChoice) {
        "1" => elfDragonBall(),
        "2" => elfEnigma(),
        "3" => quitGame(),
        "4" => shootElf()
    };

    readline();
    elfArea();
}

function elfDragonBall() : void {
    echo "Le petit être vous regarde et sort une étrange boule orangé de sa poche.\n".
    YELLOW. "Arthur: Désolé mais cette blague a déjà été faite dans Dragon Ball il y a 30ans, il serait temps de mûrir...\n".
    COLOR_RESET. "Le lutin semble de nouveau passablement énervé. C'est malin.";
}

function elfEnigma() : void {
    echo "Comme peu surpris par votre demande, il se met soudain à rire à gorge déployé\nIl s'arrêta net et vous regarda dans le blanc des yeux.\n\n".
        YELLOW. "Arthur: \"Ecoute petit... Il m'a fallu 500 lignes de code pour faire ce jeu, tu crois vraiment t'en sortir comme ça ? Non...\n".
        "Je vais d'abord augmenter artificiellement la durée de vie de ce jeu en te proposant une énigme, si tu parviens à la résoudre, tu auras ce que tu souhaites.\"\n\n";
        readline();
        echo CLEAR_CONSOLE;
        titleScreen();

        echo COLOR_RESET. "Il se racle la gorge, c'est à ce moment là que vous sentez que vous devez être attentif malgré vos troubles de l'attention.\n\n".
        YELLOW. "Arthur: \"La voici: Pour ouvrir la porte, rien de plus simple. Regarde tout autour de toi, tout a un sens. Ce temple...\n".
        "Ce temple... ". MAGENTA. "Tu dois en trouver la pierre précieuse remarquable, l'animal protecteur, l'arbre fondateur et la fleur omniprésente ". YELLOW ."qui en compose son pourtour.\n".
        "Lorsque tu les auras trouvé, ". MAGENTA. "tires en la première lettre de chaque mot.\n". YELLOW.
        "Remets les dans l'ordre, et tu en tireras le signifiant de ". MAGENTA. "l'ardence des feux mouvants.\n".
        "HURLE LE AU PLUS PRONFOND DE TON AME ". YELLOW ."et tu auras ce que tu souhaites...\"\n\n".
        COLOR_RESET. "Cela étant dit, il se mit à faire la sieste, probablement épuisé par tant de révélations ou par une si longue phrase.\n".
        "Fraîchement nourri de ces informations, vous décidez de repartir voir cette satanée porte.";

    readline();
    mainArea();
}

function quitGame() : void {
    echo "Le petit être semble très déçu. Avez-vous bien réfléchi aux conséquences de vos actions ?[oui/non] ";
    $quitGame = readline();

    if ($quitGame == "oui") {
        mainMenu();
    } else {
        elfArea();
    }
}

function shootElf() : void {
    echo "Vous frappez le petit être de toutes vos forces. Vous pouvez sentir la douleur de cet adorable créature, vous pardonnera-t-elle ?\n".
        RED. "C'était vraiment très méchant de votre part. Il serait temps de relativiser vos comportements. Pour vous permettre de réfléchir à vos actes,".
        " maintenez la touche Entrée pour 30 secondes. Et qu'on ne vous y reprenne plus\n\n". COLOR_RESET;

        $userPunishment = 0;
        while ($userPunishment <= 30) {
            sleep(1);
            readline();
            $userPunishment++;
            echo "ENTER: " . $userPunishment;
        }
    mainArea();
}
