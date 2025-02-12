# Documentation du Projet E-Learning

## Introduction
Ce projet est une plateforme d'apprentissage en ligne (E-Learning) permettant aux utilisateurs d'accéder à divers cours classés par catégories et niveaux. L'administration du site peut gérer les cours, les utilisateurs, les ressources pédagogiques, les exercices et les messages.

## Fonctionnalités principales du site web
Le site web comprend dix modules accessibles via des menus :

1. **Module de gestion des catégories**
2. **Module de gestion des cours**
3. **Module de gestion des niveaux**
4. **Module de gestion des séquences**
5. **Module de gestion des ressources de cours**
6. **Module de gestion des exercices**
7. **Module de gestion des utilisateurs**
8. **Module de gestion des commentaires**
9. **Tableau de bord**
10. **Module de gestion des messages**

### 1. Module de gestion des catégories
Une catégorie regroupe des cours ayant des caractéristiques communes (Grammar, Reading, Writing, Listening…). Elle joue un rôle clé dans l'organisation des cours. L’administrateur peut :
- Ajouter, modifier, supprimer ou désactiver une catégorie
- Affecter un cours à une catégorie

**Interface de gestion des catégories :**
![Gestion des catégories](images/gestion_categories.png)

### 2. Module de gestion des cours
Ce module permet de gérer les cours, qui sont composés de plusieurs séquences.
- Ajouter, supprimer, modifier ou désactiver un cours

**Interface de gestion des cours :**
![Gestion des cours](images/gestion_cours.png)

### 3. Module de gestion des niveaux
Chaque cours possède un niveau de difficulté, permettant de proposer un contenu adapté aux apprenants.
- Ajouter, supprimer, modifier ou affecter un cours à un niveau

**Interface de gestion des niveaux :**
![Gestion des niveaux](images/gestion_niveaux.png)

### 4. Module de gestion des séquences
Une séquence est une partie d’un cours, facilitant l'organisation de l’apprentissage.
- Ajouter, supprimer, modifier ou affecter une séquence à un cours

**Interface de gestion des séquences :**
![Gestion des séquences](images/gestion_sequences.png)

### 5. Module de gestion des ressources de cours
Ce module gère les documents et ressources audiovisuelles des cours.
- Ajouter, supprimer, modifier ou affecter des ressources à un cours

**Interface de gestion des ressources :**
![Gestion des ressources](images/gestion_ressources.png)

### 6. Module de gestion des exercices
Permet d’organiser les exercices liés aux cours.
- Ajouter, supprimer, modifier ou affecter des exercices à un cours

**Interface de gestion des exercices :**
![Gestion des exercices](images/gestion_exercices.png)

### 7. Module de gestion des utilisateurs
Gère l'inscription et les droits des utilisateurs.
- Créer des utilisateurs
- Définir les droits d'accès

**Interface de gestion des utilisateurs :**
![Gestion des utilisateurs](images/gestion_utilisateurs.png)

### 8. Module de gestion des commentaires
Permet aux apprenants de commenter les cours.

**Interface de gestion des commentaires :**
![Gestion des commentaires](images/gestion_commentaires.png)

### 9. Tableau de bord
Suivi des taux d’apprentissage et des cours affectés.

**Interface du tableau de bord :**
![Tableau de bord](images/tableau_bord.png)

### 10. Module de gestion des messages
Permet l'envoi et la réception de messages.
- Créer et envoyer un message
- Consulter les messages reçus

**Interface de gestion des messages :**
![Gestion des messages](images/gestion_messages.png)

## Diagrammes UML
### Diagramme de classe

Le diagramme de classes représente les entités du système, leurs attributs, leurs méthodes et leurs relations.

**Diagramme de classe :**
![Diagramme de classe](images/diagramme_classe.png)

### Diagrammes de séquence

Illustrent les interactions entre les acteurs et le système.

- **Inscription** ![Diagramme Inscription](images/diagramme_inscription.png)
- **Authentification** ![Diagramme Authentification](images/diagramme_authentification.png)
- **Consulter un cours** ![Diagramme Consulter Cours](images/diagramme_consulter_cours.png)
- **Ajouter un cours** ![Diagramme Ajouter Cours](images/diagramme_ajouter_cours.png)
- **Contact** ![Diagramme Contact](images/diagramme_contact.png)

### Diagrammes d’état-transition
Représente les changements d’état d’un objet au cours de son cycle de vie.

**Diagramme d’état-transition :**
![Diagramme état-transition](images/diagramme_etat_transition.png)

### Diagrammes d’Activité
Modélisent le comportement du système.

- **Inscription** ![Diagramme Activité Inscription](images/diagramme_activite_inscription.png)
- **Authentification** ![Diagramme Activité Authentification](images/diagramme_activite_authentification.png)
- **Consulter un cours** ![Diagramme Activité Consulter Cours](images/diagramme_activite_consulter_cours.png)
- **Ajouter un cours** ![Diagramme Activité Ajouter Cours](images/diagramme_activite_ajouter_cours.png)
- **Contact** ![Diagramme Activité Contact](images/diagramme_activite_contact.png)

## Interfaces Utilisateur
### Interfaces de l’espace Apprenant

#### Page d’accueil

**Interface :**
![Page d'accueil](images/page_accueil.png)

#### Consulter catégories, niveaux, et cours

**Interfaces :**
![Consulter catégories](images/consulter_categories.png)
![Consulter niveaux](images/consulter_niveaux.png)
![Consulter cours](images/consulter_cours.png)

#### Profil de l’apprenant

**Interface :**
![Profil](images/profil_apprenant.png)

#### Contact

**Interface :**
![Contact](images/contact.png)

#### Mot de passe oublié et inscription

**Interfaces :**
![Mot de passe oublié](images/mot_de_passe_oublie.png)
![Inscription](images/inscription.png)

### Interfaces de l’espace Administrateur

#### Interface principale

**Interface :**
![Interface admin](images/interface_admin.png)

#### Gestion des utilisateurs

**Interfaces :**
![Liste utilisateurs](images/liste_utilisateurs.png)
![Détails utilisateurs](images/details_utilisateurs.png)

#### Gestion des catégories, niveaux, cours et séquences

**Interfaces :**
![Gestion catégories](images/gestion_categories.png)
![Gestion niveaux](images/gestion_niveaux.png)
![Gestion cours](images/gestion_cours.png)
![Gestion séquences](images/gestion_sequences.png)

#### Gestion des ressources et des messages

**Interfaces :**
![Gestion ressources](images/gestion_ressources.png)
![Gestion messages](images/gestion_messages.png)

## Conclusion
Ce projet E-Learning offre une solution complète pour l'enseignement en ligne, avec une gestion simplifiée des cours, des utilisateurs et des ressources pédagogiques. Il garantit une expérience fluide et interactive pour les apprenants et les administrateurs.

---
