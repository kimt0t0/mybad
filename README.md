# MyBad

This is my Symfony exam application.
It is not working properly as I could not manage to install PDO drivers properly on my machine, as illustrated by the screenshots in my final files.
I spent some time trying to fix this issue, then skipped to other questions as the only solutions I could find on php's official website and StackOverflow were for Linux machines.

## Requirements

- docker
- php, composer

## How to install

Run:

```
composer install
```

## How to start project

Run:

```
symfony serve -d
```

(Normally you would have had to start docker and run _docker-compose up -d_ too but as I have driver issues this doesn't work.)

## Réponses

### Définir _Service Container_

Le _Service Container_ est un objet spécifique au framework Symfony. Il permet de centraliser la façon dont les objets de l'application sont construits - or Symfony est un framework orienté objet.

Il contient lui-même des services (= objets php) et est mis à disposition des contrôleurs. Cela permet d'y injecter des objets (= instances de classes) venant de n'importe-où ailleurs dans l'application.

### MCD

Voire MCD en pièce-jointe. Réalisé avec [Mocodo](https://www.mocodo.net/)

## Commentaires

### Projet incomplet, problème de driver

Ayant rencontré visiblement un problème de _drivers_ (que je n'avais déjà pas pu résoudre sur mon projet de révisions), je n'ai pas pu effectuer les migrations vers la base de données - donc pas pu non plus faire fonctionner de formulaire ou de requêtes à la base de données avec Doctrine. Je n'ai malheureusement pas trouvé de solution à cette difficulté dans le temps imparti.

Sur le temps restant après une longue tentative de recherche de solution, j'ai donc tenté de proposer une solution codée tout de même pour chaque étape demandée mais n'ai pas eu l'opportunité de pouvoir les tester et déboguer.

J'ai tenté de générer via le cli les entités et contrôleurs mais pour les mêmes raisons (driver) la console a renvoyé une erreur.

J'ai donc produit:

- Un fichier de formulaire dont l'appel est commenté dans le contrôleur sensé l'appelé, et dans le fichier twig sensé l'afficher.
- Un template twig dédié au formulaire, qui s'affiche correctement tant que l'on ne tente pas de charger le formulaire en question.
- Un exemple de requête à l'API dans le ReservationsController en utilisant l'entité, avec une proposition de prise en compte des erreurs (commenté également pour ne pas casser l'application).

### Hypothétique prise en compte des terrains indisponibles

J'ai créé dans le fichier d'entité _Timeslot_ en plus de la relation avec l'entité _Reservation_ un champ booleen _blocked_. Chaque instance de _timeslot_ étant liée à un unique terrain, si un créneau (timeslot) devait être bloqué il faudrait indiquer _blocked: true_ pour chaque instance de créneau correspondante à ce moment et à ce terrain.
Lors du chargement des _timeslots_ de chaque terrain, on pourrait indiquer en plus de "réservé" la mention "bloqué" et bloquer le formulaire d'une part, faire vérifier d'autre part par le code métier que le champ _blocked_ n'est pas actif avant de créer une réservation.

Cela impliquerait de générer beaucoup de timeslots, pour économiser de la mémoire on pourrait donc limiter le temps de visibilité et d'archivage d'informations de l'application.

** Possibilités alternatives **

- Ne pas créer de timeslots et simplement créer une réservation, soit avec un utilisateur (= réservé) soit sans utilisateur (= blocked) afin de sauver de la mémoire.
- Avoir directement dans la table de chaque terrain de jeu (_field_)un champ "reservations" qui serait un array de créneaux d'une part, et d'autre part un champ "blocks" (array de dates). Chaque créneau pourrait être un objet ou un array comprenant un _datetime_ de début et un _datetime_ de fin. On pourrait alors afficher le calendrier des jours souhaités et charger la liste de "reservations" et la liste de "blocks" pour chaque instance de _Field_.

### MCD

J'ai utilisé la plateforme **_Mocodo_**, qui permet de générer un MCD en indiquant dans son interface textuelle les tables à créer et les relations entre elles. C'est un outil intéressant que j'ai découvert récemment, vraisemblablement souvent utilisé pour gagner du temps et éviter les erreurs sur des schémas plus complexes (l'outil peut réorganiser lui-même l'ordre dans lequel sont posées les relations pour produire le modèle le mieux organisé possible visuellement).

J'ai choisi de créer des tables à part pour les réservations et les créneaux-horaires afin de respecter le principe d'atomicité.

### Conclusion

Je ne suis clairement pas expérimenté·e avec Symfony ni avec php donc relativement lent à trouver les solutions, en revanche je commence à mieux m'accoutumer à consulter la documentation pour avancer sur un projet. J'ai mieux compris l'architecture MVC et le fonctionnement de Symfony, comment utiliser la console pour générer le fichier de migrations puis exécuter une migration ou annuler la précédente (en théorie du moins).
