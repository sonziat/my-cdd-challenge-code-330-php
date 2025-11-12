# Programme PHP & MySQL – Détail jour par jour (30 jours)

Ce guide complète le `README.md` avec des **exercices pratiques** et des **mini-projets progressifs** pour chaque journée.

---

## Semaine 1 – Fondamentaux du PHP

### Jour 1 – Introduction & Syntaxe de base
**Objectifs :** Découvrir la structure d’un fichier PHP.  
**Exercices :**
- Crée un fichier `index.php` avec `echo "Hello PHP!";`
- Ajoute des commentaires (`//` et `/* */`)
- Affiche ton prénom dans une balise `<h1>`
**Mini-défi :** Page d’accueil simple avec ton nom et la date du jour.

---

### Jour 2 – Types de données & Conversion
**Objectifs :** Comprendre les types et le transtypage.  
**Exercices :**
- Crée des variables de types différents (`string`, `int`, `float`, `bool`)
- Utilise `var_dump()` pour inspecter leurs valeurs
- Convertis des types (ex : `(int)"42"`)
**Mini-défi :** Mini-calculatrice affichant des résultats dynamiques.

---

### Jour 3 – Opérateurs & Expressions
**Objectifs :** Manipuler les opérateurs.  
**Exercices :**
- Addition, soustraction, modulo, comparaison (`==`, `===`)
- Opérateurs logiques (`&&`, `||`, `!`)
**Mini-défi :** Script qui vérifie si un nombre est pair ou impair.

---

### Jour 4 – Conditions
**Objectifs :** Utiliser `if`, `else`, `elseif`, `switch`.  
**Exercices :**
- Test météo : si `$temp > 25`, affiche “Chaud !”
- `switch` pour afficher un jour de la semaine
**Mini-défi :** Affiche une appréciation selon une note (ex : “Très bien”, “Insuffisant”).

---

### Jour 5 – Boucles
**Objectifs :** Répéter des actions.  
**Exercices :**
- `for` de 1 à 10
- `while` pour afficher les nombres pairs
- `foreach` pour parcourir un tableau
**Mini-défi :** Table de multiplication.

---

### Jour 6 – Fonctions
**Objectifs :** Créer et utiliser des fonctions.  
**Exercices :**
- Fonction `addition($a, $b)`
- Paramètres par défaut
- Retourner des valeurs et les afficher
**Mini-défi :** Convertisseur euros → dollars.

---

### Jour 7 – Tableaux (arrays)
**Objectifs :** Manipuler des arrays.  
**Exercices :**
- Tableau de fruits (ajout/suppression/tri)
- Tableau associatif (`"nom" => "Alice"`)
**Mini-défi :** Carnet de contacts (nom, email) affiché en tableau HTML.

---

## Semaine 2 – Manipulation de données & formulaires

### Jour 8 – Fonctions sur les tableaux
**Exercices :**
- `sort()`, `array_merge()`, `in_array()`, `array_push()`
- `count()` pour compter les éléments
**Mini-défi :** Liste de tâches triable alphabétiquement.

---

### Jour 9 – Chaînes de caractères
**Exercices :**
- `strlen()`, `substr()`, `str_replace()`, `strpos()`
- Concaténer prénom + nom
**Mini-défi :** Générateur de mot de passe simple (aléatoire).

---

### Jour 10 – Superglobales
**Exercices :**
- Afficher `$_SERVER['PHP_SELF']`
- Utiliser `$_GET` pour lire un paramètre d’URL
**Mini-défi :** `bonjour.php?nom=Alice` → “Bonjour Alice”.

---

### Jour 11 – Formulaires
**Exercices :**
- Formulaire HTML avec `POST`
- Récupérer et afficher les données saisies
**Mini-défi :** Mini-formulaire de contact (nom, email, message).

---

### Jour 12 – Include & Require
**Exercices :**
- `header.php`, `footer.php`
- Inclure dans `index.php`
**Mini-défi :** Mini-site avec 3 pages et un menu inclus dynamiquement.

---

### Jour 13 – Dates & Heures
**Exercices :**
- `date()`, `time()`
- Différence entre deux dates
**Mini-défi :** Compte à rebours vers ta date (anniversaire, examen…).

---

### Jour 14 – Fichiers
**Exercices :**
- Créer, lire et écrire dans un `.txt`
- Afficher le contenu dans une page PHP
**Mini-défi :** “Journal” qui enregistre des messages saisis dans un fichier.

---

## Semaine 3 – Fichiers, sessions et base de données

### Jour 15 – Uploads
**Exercices :**
- Formulaire `input type="file"`
- `move_uploaded_file()` pour enregistrer le fichier
**Mini-défi :** Mini-upload d’image avec affichage de la vignette.

---

### Jour 16 – Erreurs & exceptions
**Exercices :**
- `try-catch`
- Simuler une erreur de fichier, afficher un message clair
**Mini-défi :** Page qui gère proprement une erreur de connexion.

---

### Jour 17 – Sessions
**Exercices :**
- `session_start()`
- Stocker et récupérer le nom d’un utilisateur
**Mini-défi :** Page “Bonjour [nom]” après connexion.

---

### Jour 18 – Cookies
**Exercices :**
- Créer un cookie `theme=dark`
- Lire le cookie et afficher le thème choisi
**Mini-défi :** Sélecteur de thème clair/sombre sauvegardé en cookie.

---

### Jour 19 – Expressions régulières
**Exercices :**
- `preg_match()` pour valider un email
- `preg_replace()` pour nettoyer une chaîne
**Mini-défi :** Validateur de mot de passe fort.

---

### Jour 20 – Filtres & validation
**Exercices :**
- `filter_var()` pour emails / URLs
- Valider un entier entre 1 et 100
**Mini-défi :** Formulaire avec validation complète et messages d’erreurs.

---

## Semaine 4 – MySQL, CRUD et mini-projet

### Jour 21 – Introduction à MySQL
**Exercices :**
- Base `apprentissage`
- Table `utilisateurs (id, nom, email, mot_de_passe)`
**Mini-défi :** Insérer quelques lignes via phpMyAdmin.

---

### Jour 22 – Connexion à MySQL
**Exercices :**
- Connexion avec `mysqli_connect()`
- Vérifier et afficher l’état de la connexion
**Mini-défi :** Page `connexion.php` : “Connexion réussie !” ou “Erreur”.

---

### Jour 23 – Requêtes SQL en PHP
**Exercices :**
- `SELECT * FROM utilisateurs`
- Afficher les résultats avec `mysqli_fetch_assoc()`
**Mini-défi :** Tableau HTML listant les utilisateurs.

---

### Jour 24 – CRUD (Read)
**Exercices :**
- Lire les données d’une table
- Boutons “Modifier” / “Supprimer” pour chaque ligne
**Mini-défi :** Page `liste.php` listant les utilisateurs.

---

### Jour 25 – CRUD (Create)
**Exercices :**
- Formulaire d’ajout
- Insertion via `INSERT INTO`
**Mini-défi :** Formulaire “Ajouter un utilisateur” avec validation.

---

### Jour 26 – CRUD (Update)
**Exercices :**
- Préremplir un formulaire depuis un `id`
- Mettre à jour via `UPDATE`
**Mini-défi :** `edit.php` fonctionnel + messages de succès/erreur.

---

### Jour 27 – CRUD (Delete)
**Exercices :**
- Suppression via `DELETE`
- Confirmation avant suppression
**Mini-défi :** Suppression sécurisée + redirection vers `liste.php`.

---

### Jour 28 – CRUD amélioré
**Exercices :**
- Recherche (`LIKE`)
- Pagination (`LIMIT`, `OFFSET`)
- Tri par colonne
**Mini-défi :** Recherche dynamique sur les utilisateurs.

---

### Jour 29 – Sécurité & nettoyage
**Exercices :**
- `mysqli_real_escape_string()`
- Validation/assainissement systématique des entrées
- Protection des pages par session (routes privées)
**Mini-défi :** Login “classique” sécurisé (sans POO) avec `$_SESSION`.

---

### Jour 30 – Mini-projet final
**Objectif :** Assembler tout :  
- Login + sessions
- Tableau de bord (liste + pagination + recherche)
- CRUD complet (ajout/édition/suppression)
- Upload de photo de profil
- Validation & sécurité

**Astuce :** Utilise Bootstrap pour le style et messages d’alerte (success/danger).

---

## Structure suggérée du répertoire
```
/php-apprentissage
├── jour01/ ... jour30/
├── includes/        # header.php, footer.php, db.php
├── public/          # assets statiques
└── README.md
```

## Conseils d’évaluation
- Commits clairs : `feat(day-12): include header/footer`  
- Tests manuels : scénarios d’erreur et de succès  
- Revue en fin de semaine : récapitulatif + TODO pour la suivante

Bon code ! 💻
