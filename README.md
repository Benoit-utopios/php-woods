# php-woods
Php-woods est un jeu fictif se déroulant dans la forêt magique aux abords de la ville d'Utopolis. Vous incarnez un aventurier qui veut s'emparer du mystérieux trésor d'Ihabacchus mais votre parcours est semé d'embuches.

## Installation
Le jeu a été conçu autour du terminal powershell. Il fonctionne également avec d'autres terminaux mais pourrait rencontrer des problèmes de compatibilité.
Le jeu nécessite **PHP version 8.0 ou supérieur**

Vous aurez besoin de PHP pour faire tourner ce programme. La façon la plus facile de l'installer est via Chocolatey:
Pour installer Chocolatey, tapez la commande suivante en mode administrateur dans votre terminal **powershell**:
```powershell
Set-ExecutionPolicy Bypass -Scope Process -Force; [System.Net.ServicePointManager]::SecurityProtocol = [System.Net.ServicePointManager]::SecurityProtocol -bor 3072; iex ((New-Object System.Net.WebClient).DownloadString('https://community.chocolatey.org/install.ps1'))
```

Une fois Chocolatey installé, vous pouvez lancer l'installation de PHP:
```bash
choco install php
```

Redémarrez votre ordinateur, mettez-vous à la racine de PHP-Woods et lancer-le:
```bash
php index.php
```

Bon jeu dans la contrée d'Utopolis.