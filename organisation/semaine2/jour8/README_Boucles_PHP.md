
# 📘 Exercices PHP : Boucles et Instructions de Contrôle

Ce document contient **20 exercices PHP** pour s'entraîner à utiliser les boucles (`for`, `while`, `do...while`, `foreach`) ainsi que les instructions **`break`**, **`continue`** et **`return`**.

## 🎯 Objectif
Choisir la boucle la plus adaptée à chaque problème **sans indication directe** du type de boucle à utiliser.

---

## 📋 Liste des 20 exercices

1. Afficher les nombres de 1 à 100 sur des lignes séparées.  
2. Calculer et afficher la somme des nombres de 1 à 50.  
3. Afficher uniquement les nombres pairs entre 1 et 30.  
4. Afficher un compte à rebours de 10 à 0, puis afficher "Décollage !".  
5. Afficher le contenu d’un tableau contenant des prénoms :  
   ```php
   $prenoms = ["Ali", "Sara", "Mina", "Youssef", "Lina"];
   ```  
6. Dans un tableau de produits, afficher un message dès qu’on trouve le produit "Pain" et arrêter la recherche.  
7. Afficher les clés et valeurs d’un tableau associatif comme :  
   ```php
   $personne = ["nom" => "Khalid", "age" => 29, "ville" => "Tanger"];
   ```  
8. Calculer la somme des valeurs contenues dans le tableau suivant :  
   ```php
   $notes = [10, 12, 15, 18, 9];
   ```  
9. Afficher uniquement les valeurs supérieures ou égales à 10 dans le tableau précédent.  
10. Simuler un mot de passe et redemander tant qu’il est incorrect. Afficher "Accès autorisé" lorsqu’il est correct.  
11. Afficher les nombres de 1 à 20 et arrêter la boucle dès que le nombre vaut 13.  
12. Afficher les nombres de 1 à 10, mais ignorer le nombre 5.  
13. Afficher la table de multiplication de 7, de 7×1 à 7×10.  
14. À partir du tableau suivant, afficher chaque produit et son prix, puis calculer le total à payer :  
    ```php
    $panier = ["Pain" => 1.20, "Lait" => 0.90, "Beurre" => 2.50];
    ```  
15. Simuler un compteur qui augmente jusqu’à atteindre une valeur aléatoire entre 1 et 10. Quand la valeur est atteinte, afficher "Trouvé !" et stopper la boucle.  
16. Afficher tous les utilisateurs d’un tableau, mais ignorer ceux qui ont le statut "inactif" :  
    ```php
    $users = [
        ["nom" => "Ali", "statut" => "actif"],
        ["nom" => "Sara", "statut" => "inactif"],
        ["nom" => "Lina", "statut" => "actif"]
    ];
    ```  
17. Calculer la moyenne générale à partir du tableau suivant :  
    ```php
    $notes = [14, 9, 16, 12, 8, 10];
    ```  
18. Afficher les numéros de facture de F001 à F010 (avec les zéros devant).  
19. Simuler un lancer de dé (valeurs entre 1 et 6) jusqu’à obtenir un 6, puis afficher le nombre de tentatives nécessaires.  
20. Écrire une fonction `chercherProduit($nom)` qui cherche dans le tableau suivant et retourne un message selon le résultat :  
    ```php
    $produits = ["Pain", "Lait", "Beurre", "Sucre"];
    ```  

---

💡 **Conseil :**
Pour chaque exercice, réfléchis avant de coder :
- Ai-je besoin d’un **compteur** → `for`
- Ai-je besoin de **tester une condition** → `while` / `do...while`
- Ai-je un **tableau** → `foreach`
- Ai-je besoin d’**interrompre ou sauter une boucle** → `break`, `continue`, `return`
