# Apprendre PHP & MySQL en 30 Jours

## 🎯 Objectifs du projet

> Ce parcours a pour but de t’apprendre **PHP pas à pas** à travers des exemples concrets et des exercices quotidiens.  
> À la fin des 30 jours, tu seras capable de créer une **application web complète avec PHP et MySQL** (CRUD, login, upload, sécurité).

---

## Objectifs principaux

🔹 Apprendre PHP **par la pratique quotidienne**.  
🔹 Comprendre les bases du **langage PHP** et de **MySQL**.  
🔹 Manipuler les **formulaires**, les **fichiers**, les **sessions** et la **validation de données**.  
🔹 Construire un **mini-projet final** : gestion d’utilisateurs avec login et upload.  
🔹 Poser des bases solides avant d’aborder la **POO**, **les APIs** ou **Laravel**.

---

## Prérequis & Outils nécessaires

### Prérequis
Aucun prérequis technique n’est nécessaire, mais il est recommandé d’avoir :
- Des notions de **HTML/CSS** (pour créer les interfaces des formulaires),
- Un peu de curiosité et de régularité (30 jours = 30 pas en avant 😉).

### ⚙️ Outils à installer
- 🖥️ **Serveur local** :  
  - [XAMPP](https://www.apachefriends.org/fr/index.html) *(Windows, Mac, Linux)*  
  - ou [Laragon](https://laragon.org/) *(Windows, rapide et pratique)*  
- 💾 **Éditeur de code** :  
  - [Visual Studio Code](https://code.visualstudio.com/) (recommandé)  
  - ou Sublime Text / PHPStorm  
- 🌐 **Navigateur web** (Chrome, Firefox, Brave, etc.)  
- 🛢️ **phpMyAdmin** (inclus avec XAMPP/Laragon) pour gérer ta base de données.  

---

## 📈 Progression du programme

| Étape | Niveau | Description |
|--------|---------|-------------|
| **Semaine 1** | 🧩 Fondamentaux du PHP | Syntaxe, variables, conditions, boucles, fonctions, tableaux |
| **Semaine 2** | 🧠 Manipulation de données | Formulaires, fichiers, dates, erreurs, sessions, cookies |
| **Semaine 3** | 🗃️ Bases de données | Introduction à MySQL, connexions, requêtes SQL |
| **Semaine 4** | ⚙️ CRUD complet & projet final | Application CRUD + login + upload + sécurité |

Chaque semaine renforce les bases avant de passer à la suivante.  
L’objectif est d’appliquer chaque jour ce que tu apprends pour consolider les acquis.

---

## 🗓️ Roadmap PHP & MySQL — 30 jours

| Jour | Thème | Concepts clés abordés |
|------|--------|------------------------|
| **01** | Introduction & Syntaxe de base | `echo`, `print`, variables, commentaires, structure d’un script PHP |
| **02** | Types de données & Conversion de types | chaînes, entiers, flottants, booléens, transtypage |
| **03** | Opérateurs & Expressions | arithmétiques, d’affectation, de comparaison, logiques |
| **04** | Conditions | `if`, `else`, `elseif`, `switch` |
| **05** | Boucles | `for`, `while`, `do-while`, `foreach` |
| **06** | Fonctions : bases | définition, paramètres, valeurs de retour, portée des variables |
| **07** | Tableaux (arrays) | tableaux indexés & associatifs |
| **08** | Fonctions sur les tableaux | tri, recherche, manipulation (`sort`, `array_merge`, `array_push`, etc.) |
| **09** | Manipulation de chaînes | concaténation, `strlen`, `substr`, `str_replace`, `strpos`, `explode` |
| **10** | Superglobales | `$_GET`, `$_POST`, `$_SERVER`, `$_REQUEST` |
| **11** | Gestion des formulaires | création de formulaires HTML, envoi par `POST` et `GET`, validation simple |
| **12** | Inclusion de fichiers | `include`, `require`, organisation de code réutilisable |
| **13** | Dates & Heures | `date()`, `time()`, `strtotime()`, formats, fuseaux horaires |
| **14** | Manipulation de fichiers | `fopen`, `fread`, `fwrite`, `fclose`, lecture et écriture simples |
| **15** | Téléversement de fichiers | formulaire d’upload, `move_uploaded_file()`, gestion des erreurs |
| **16** | Gestion des erreurs & exceptions | `try-catch`, erreurs PHP, niveaux de rapport (`error_reporting()`) |
| **17** | Sessions | `session_start()`, `$_SESSION`, `session_destroy()`, variables persistantes |
| **18** | Cookies | `setcookie()`, `$_COOKIE`, expiration, préférences utilisateur |
| **19** | Expressions régulières | `preg_match`, `preg_replace`, validation de formulaires |
| **20** | Filtres & Validation | `filter_var`, `filter_input`, assainissement des données utilisateur |
| **21** | Introduction à MySQL | notions de base SQL, tables, colonnes, clés primaires, phpMyAdmin |
| **22** | Connexion PHP ↔ MySQL | `mysqli_connect`, test de connexion, gestion d’erreurs |
| **23** | Requêtes SQL depuis PHP | `SELECT`, `INSERT`, `UPDATE`, `DELETE` avec `mysqli_query()` |
| **24** | CRUD étape par étape – Lecture (Read) | afficher les données d’une table dans une page PHP |
| **25** | CRUD étape par étape – Création (Create) | formulaire d’ajout, insertion de données, validation |
| **26** | CRUD étape par étape – Modification (Update) | formulaire d’édition, mise à jour des enregistrements |
| **27** | CRUD étape par étape – Suppression (Delete) | confirmation, suppression d’enregistrements, sécurité |
| **28** | CRUD amélioré | tri, recherche, pagination, affichage dynamique |
| **29** | Sécurité et finalisation | échapper les entrées (`mysqli_real_escape_string`), prévention des injections SQL, organisation du projet |
| **30** | Mini-projet final | mini application complète : gestion d’utilisateurs + login + CRUD + upload d’images |

---

## Structure recommandée du projet

```
/php-apprentissage
├── jour01/
├── jour02/
├── ...
├── jour30-mini-projet/
├── assets/
│   ├── css/
│   ├── js/
│   └── uploads/
└── README.md
```

---

## Mini-projet final

> **Application CRUD + Login + Upload**

Fonctionnalités à implémenter :
- 🧾 Formulaire d’inscription et de connexion (sessions)
- 📊 Tableau de bord affichant les données MySQL
- ➕ Ajout, ✏️ modification et ❌ suppression d’entrées
- 🖼️ Téléversement d’images ou de fichiers
- 🔒 Sécurisation des entrées (prévention SQL injection)
- 🎨 Interface simple en HTML/CSS (Bootstrap conseillé)

---

## Pour aller plus loin après ces 30 jours

Une fois ce programme terminé, tu peux :
- 🔸 Apprendre la **Programmation Orientée Objet (POO)** en PHP  
- 🔸 Découvrir les **APIs REST** et le format **JSON**  
- 🔸 Explorer les frameworks comme **Laravel**, **Symfony** ou **CodeIgniter**  
- 🔸 Publier ton projet sur un **hébergement gratuit** (000webhost, InfinityFree) ou ton propre serveur

---

## ❤️ Contribution

Tu peux :
- 💬 Ouvrir une **issue** pour proposer une amélioration,  
- 🔧 Soumettre une **pull request** avec un exemple ou un exercice supplémentaire,  
- 🌟 Partager ton **mini-projet final** pour inspirer d’autres débutants.

---

## 📜 Licence

Ce projet est sous licence **MIT** — libre à toi de le copier, modifier et partager.  

---

> *« La meilleure façon d’apprendre PHP, c’est d’écrire du PHP. »*  
> — Ce dépôt est ton terrain d’entraînement.
