<?php
// Définition des constantes pour les couleurs
const RED = "\033[31m";
const GREEN = "\033[32m";
const YELLOW = "\033[33m";
const BLUE = "\033[34m";
const MAGENTA = "\033[35m";
const CYAN = "\033[36m";
const COLOR_RESET = "\033[0m";

// Nettoyage de la console
const CLEAR_CONSOLE = "\033c";

// Définition des constantes pour la mise en page
define("SHARPSEPARATOR_HIGH", str_repeat("#", 30) . PHP_EOL);
define("SHARPSEPARATOR_MEDIUM", str_repeat("#", 20) . PHP_EOL);
define("SHARPSEPARATOR_LOW", str_repeat("#", 5));
