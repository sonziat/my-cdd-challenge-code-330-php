# Checklist : créer son premier repo Git & GitHub

## 1. Préparer son environnement

- [ ] Installer **Git**  
  👉 https://git-scm.com/downloads

- [ ] Configurer ton nom et ton email  
  ```bash
  git config --global user.name "Ton Nom"
  git config --global user.email "ton.email@example.com"
  ```

- [ ] Créer un compte **GitHub**  
  👉 https://github.com

- [ ] (Optionnel) Configurer une clé SSH  
  👉 https://docs.github.com/fr/authentication/connecting-to-github-with-ssh

---

## 2. Créer un dossier de projet local

```bash
mkdir mon-premier-projet
cd mon-premier-projet
git init
echo "# Mon premier projet 🚀" > README.md
git status
```

---

## 3. Faire ton premier commit

```bash
git add .
git commit -m "Premier commit : initialisation du projet"
```

---

## 4. Créer le repo sur GitHub

1. Va sur https://github.com/new  
2. Donne un **nom** à ton repo  
3. Choisis *Public* ou *Private*  
4. Clique sur **Create repository**

---

## 5. Lier ton repo local à GitHub

```bash
git remote add origin https://github.com/tonpseudo/mon-premier-projet.git
git branch -M main
git push -u origin main
```

---

## 6. Vérifie ton repo

- [ ] Va sur ton profil GitHub → ton projet est en ligne 🎉  
- [ ] Vérifie les fichiers et l’historique des commits

---

## 7. Mettre à jour ton repo

```bash
git add .
git commit -m "Ma nouvelle fonctionnalité"
git push
```

---

## Bonus : bonnes pratiques

- ✅ Ajoute un `.gitignore`
- ✅ Mets à jour ton README
- ✅ Commit souvent avec des messages clairs
- 🚫 Ne mets **jamais** de mots de passe ou `.env`
