
# 📚 **Projet E-Learning - Documentation**

## 📝 **Introduction**
Ce projet est une plateforme d'apprentissage en ligne permettant aux utilisateurs d'accéder à divers cours classés par catégories et niveaux. L'administration peut gérer les cours, les utilisateurs, les ressources pédagogiques, les exercices et les messages.

---

# ⚙️ **1. Conception de l'application**  

## 📌 **1.1. Fonctionnalités principales**  
Le site web comprend **dix modules** accessibles via un menu :  
✅ Module de gestion des catégories  
✅ Module de gestion des cours  
✅ Module de gestion des niveaux  
✅ Module de gestion des séquences  
✅ Module de gestion des ressources de cours  
✅ Module de gestion des exercices  
✅ Module de gestion des utilisateurs  
✅ Module de gestion des commentaires  
✅ Tableau de bord  
✅ Module de gestion des messages  

## 🗂 **1.2. Diagrammes UML**  

### 📊 **Diagramme de classe**
<div align="center">
  <img src="storage/diagramme_classe.png" alt="Diagramme de classe" width="70%">
</div>
<p align="center">Ce diagramme présente la structure des classes et leurs relations.</p>

### 📌 **Diagrammes de séquence**  
#### 🔹 Inscription  
<div align="center">
  <img src="storage/diagramme_inscription.png" alt="Diagramme Inscription" width="70%">
</div>
<p align="center">Ce diagramme montre le processus d'inscription d'un utilisateur.</p>

#### 🔹 Authentification  
<div align="center">
  <img src="storage/diagramme_authentification.png" alt="Diagramme Authentification" width="70%">
</div>
<p align="center">Ce diagramme illustre l'authentification d'un utilisateur.</p>

#### 🔹 Consulter un cours  
<div align="center">
  <img src="storage/diagramme_consulter_cours.png" alt="Diagramme Consulter Cours" width="70%">
</div>
<p align="center">Diagramme de séquence pour la consultation d'un cours.</p>

#### 🔹 Ajouter un cours  
<div align="center">
  <img src="storage/diagramme_ajouter_cours.png" alt="Diagramme Ajouter Cours" width="70%">
</div>
<p align="center">Processus d'ajout d'un cours par un administrateur.</p>

#### 🔹 Contact  
<div align="center">
  <img src="storage/diagramme_contact.png" alt="Diagramme Contact" width="70%">
</div>
<p align="center">Diagramme de séquence pour l'envoi de messages via le formulaire de contact.</p>

### 🔄 **Diagrammes d’état-transition**  
<div align="center">
  <img src="storage/diagramme_etat_transition1.png" alt="Diagramme État Transition 1" width="60%">
  <img src="storage/diagramme_etat_transition2.png" alt="Diagramme État Transition 2" width="60%">
  <img src="storage/diagramme_etat_transition3.png" alt="Diagramme État Transition 3" width="60%">
</div>
<p align="center">Diagrammes d'état transition montrant les différents états du système.</p>

---

# 🖥 **2. Interfaces de l'application**  

## 🎓 **2.1. Interfaces de l’espace Apprenant**  

### 🏠 **Page d’accueil**
<div align="center">
  <img src="storage/page_accueil.png" alt="Page d'accueil" width="70%">
</div>
<p align="center">Page d’accueil affichée après l'authentification de l'apprenant.</p>

### 📂 **Consulter les catégories, niveaux et cours**  
#### 🔹 Catégories  
<div align="center">
  <img src="storage/consulter_categories.png" alt="Consulter Catégories" width="70%">
</div>
<p align="center">Liste des différentes catégories de cours disponibles.</p>

#### 🔹 Niveaux  
<div align="center">
  <img src="storage/consulter_niveaux.png" alt="Consulter Niveaux" width="70%">
</div>
<p align="center">Affichage des niveaux d'apprentissage disponibles.</p>

#### 🔹 Cours  
<div align="center">
  <img src="storage/consulter_cours.png" alt="Consulter Cours" width="70%">
  <img src="storage/consulter_cours2.png" alt="Consulter Cours 2" width="70%">
  <img src="storage/consulter_cours3.png" alt="Consulter Cours 3" width="70%">
</div>
<p align="center">Différentes vues de la liste des cours accessibles aux apprenants.</p>

---

## 🛠 **2.2. Interfaces de l’espace Administrateur**  

### 👤 **Gestion des utilisateurs**  
#### 🔹 Liste des utilisateurs  
<div align="center">
  <img src="storage/liste_utilisateurs.png" alt="Liste des Utilisateurs" width="70%">
</div>
<p align="center">Affichage des utilisateurs enregistrés avec leurs rôles.</p>

### 📂 **Gestion des catégories, niveaux, cours et séquences**  
#### 🔹 Catégories  
<div align="center">
  <img src="storage/gestion_categories.png" alt="Gestion des Catégories" width="70%">
</div>
<p align="center">Interface de gestion des catégories de cours.</p>

#### 🔹 Niveaux  
<div align="center">
  <img src="storage/gestion_niveaux.png" alt="Gestion des Niveaux" width="70%">
</div>
<p align="center">Interface pour gérer les niveaux d’apprentissage.</p>

#### 🔹 Cours  
<div align="center">
  <img src="storage/gestion_cours.png" alt="Gestion des Cours" width="70%">
  <img src="storage/gestion_cours2.png" alt="Gestion des Cours 2" width="70%">
</div>
<p align="center">Interface pour la gestion des cours disponibles.</p>

#### 🔹 Séquences  
<div align="center">
  <img src="storage/gestion_sequences.png" alt="Gestion des Séquences" width="70%">
  <img src="storage/gestion_sequences2.png" alt="Gestion des Séquences 2" width="70%">
</div>
<p align="center">Interface permettant la gestion des séquences d'un cours.</p>

### 📚 **Gestion des ressources et des messages**  
#### 🔹 Ressources  
<div align="center">
  <img src="storage/gestion_ressources.png" alt="Gestion des Ressources" width="70%">
  <img src="storage/gestion_ressources2.png" alt="Gestion des Ressources 2" width="70%">
</div>
<p align="center">Gestion des documents, vidéos et autres ressources pédagogiques.</p>

#### 🔹 Messages  
<div align="center">
  <img src="storage/gestion_messages.png" alt="Gestion des Messages" width="70%">
  <img src="storage/gestion_messages2.png" alt="Gestion des Messages 2" width="70%">
</div>
<p align="center">Interface de gestion des messages envoyés par les utilisateurs.</p>

---

## ✅ **Conclusion**
Ce projet E-Learning offre une solution complète pour l'enseignement en ligne avec une gestion simplifiée des cours, des utilisateurs et des ressources pédagogiques. Il garantit une expérience fluide et interactive pour les apprenants et les administrateurs. 🚀
