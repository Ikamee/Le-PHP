# Le-PHP
Il est decrit
Une bibliothèque offre à ses usagers la possibilité d'emprunter des documents.
Selon la nature de ces documents, les conditions de prêt sont différentes.
La bibliothèque dispose de vidéos, de livres et de périodiques.
Les périodiques ne peuvent pas être empruntés.
Les vidéos peuvent être empruntées.
Certains livres peuvent être empruntés, mais d'autres non.
Les informations à représenter concernent le titre et le nom de l'auteur.
En plus, pour les périodiques, il est demandé de stocker le numéro.
En plus, pour les vidéos, il est demandé de représenter le type de support
(DVD, Blu-Ray, Blu-Ray3D sous la forme d'un type énuméré).
Enfin, le nombre de pages doit être représenté pour les documents écrits car il
permet de calculer le coût du document.
Le coût des documents écrits est de 0,50 € la page, alors que le coût d'une
vidéo est le même pour toutes les vidéos : 70 €.
Définir des classes pour représenter les différents types de documents, la
possibilité de les emprunter, et leur coût, en factorisant au mieux le code.
Tester les classes en écrivant une fonction main() appelant les
différentes méthodes afin de tester leur fonctionnement.
Écrire une classe Bibliothèque contenant un ensemble de documents.
On ne déclarera dans cette classe qu'un seul conteneur pour manipuler tous
les documents.
Écrire une (des) méthode(s) permettant d'ajouter un document à la
bibliothèque.
Écrire les accesseurs.
Écrire une méthode retournant le nombre de DVD de la bibliothèque
