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
![Gestion des catégories](storage/gestion_categories.png)

### 2. Module de gestion des cours
Ce module permet de gérer les cours, qui sont composés de plusieurs séquences.
- Ajouter, supprimer, modifier ou désactiver un cours

**Interface de gestion des cours :**
![Gestion des cours](storage/gestion_cours.png)

### 3. Module de gestion des niveaux
Chaque cours possède un niveau de difficulté, permettant de proposer un contenu adapté aux apprenants.
- Ajouter, supprimer, modifier ou affecter un cours à un niveau

**Interface de gestion des niveaux :**
![Gestion des niveaux](storage/gestion_niveaux.png)

### 4. Module de gestion des séquences
Une séquence est une partie d’un cours, facilitant l'organisation de l’apprentissage.
- Ajouter, supprimer, modifier ou affecter une séquence à un cours

**Interface de gestion des séquences :**
![Gestion des séquences](storage/gestion_sequences.png)

### 5. Module de gestion des ressources de cours
Ce module gère les documents et ressources audiovisuelles des cours.
- Ajouter, supprimer, modifier ou affecter des ressources à un cours

**Interface de gestion des ressources :**
![Gestion des ressources](storage/gestion_ressources.png)

### 6. Module de gestion des exercices
Permet d’organiser les exercices liés aux cours.
- Ajouter, supprimer, modifier ou affecter des exercices à un cours

**Interface de gestion des exercices :**
![Gestion des exercices](storage/gestion_exercices.png)

### 7. Module de gestion des utilisateurs
Gère l'inscription et les droits des utilisateurs.
- Créer des utilisateurs
- Définir les droits d'accès

**Interface de gestion des utilisateurs :**
![Gestion des utilisateurs](storage/gestion_utilisateurs.png)

### 8. Module de gestion des commentaires
Permet aux apprenants de commenter les cours.

**Interface de gestion des commentaires :**
![Gestion des commentaires](storage/gestion_commentaires.png)

### 9. Tableau de bord
Suivi des taux d’apprentissage et des cours affectés.

**Interface du tableau de bord :**
![Tableau de bord](storage/tableau_bord.png)

### 10. Module de gestion des messages
Permet l'envoi et la réception de messages.
- Créer et envoyer un message
- Consulter les messages reçus

**Interface de gestion des messages :**
![Gestion des messages](storage/gestion_messages.png)

## Diagrammes UML
### Diagramme de classe

Le diagramme de classes représente les entités du système, leurs attributs, leurs méthodes et leurs relations.

**Diagramme de classe :**
![Diagramme de classe](storage/diagramme_classe.png)

### Diagrammes de séquence

Illustrent les interactions entre les acteurs et le système.

- **Inscription** ![Diagramme Inscription](storage/diagramme_inscription.png)
- **Authentification** ![Diagramme Authentification](storage/diagramme_authentification.png)
- **Consulter un cours** ![Diagramme Consulter Cours](storage/diagramme_consulter_cours.png)
- **Ajouter un cours** ![Diagramme Ajouter Cours](storage/diagramme_ajouter_cours.png)
- **Contact** ![Diagramme Contact](storage/diagramme_contact.png)

### Diagrammes d’état-transition
Représente les changements d’état d’un objet au cours de son cycle de vie.

**Diagramme d’état-transition :**
![Diagramme état-transition](storage/diagramme_etat_transition.png)

### Diagrammes d’Activité
Modélisent le comportement du système.

- **Inscription** ![Diagramme Activité Inscription](storage/diagramme_activite_inscription.png)
- **Authentification** ![Diagramme Activité Authentification](storage/diagramme_activite_authentification.png)
- **Consulter un cours** ![Diagramme Activité Consulter Cours](storage/diagramme_activite_consulter_cours.png)
- **Ajouter un cours** ![Diagramme Activité Ajouter Cours](storage/diagramme_activite_ajouter_cours.png)
- **Contact** ![Diagramme Activité Contact](storage/diagramme_activite_contact.png)

## Interfaces Utilisateur
### Interfaces de l’espace Apprenant

#### Page d’accueil

**Interface :**
![Page d'accueil](storage/page_accueil.png)

#### Consulter catégories, niveaux, et cours

**Interfaces :**
![Consulter catégories](storage/consulter_categories.png)
![Consulter niveaux](storage/consulter_niveaux.png)
![Consulter cours](storage/consulter_cours.png)

#### Profil de l’apprenant

**Interface :**
![Profil](storage/profil_apprenant.png)

#### Contact

**Interface :**
![Contact](storage/contact.png)

#### Mot de passe oublié et inscription

**Interfaces :**
![Mot de passe oublié](storage/mot_de_passe_oublie.png)
![Inscription](storage/inscription.png)

### Interfaces de l’espace Administrateur

#### Interface principale

**Interface :**
![Interface admin](storage/interface_admin.png)

#### Gestion des utilisateurs

**Interfaces :**
![Liste utilisateurs](storage/liste_utilisateurs.png)
![Détails utilisateurs](storage/details_utilisateurs.png)

#### Gestion des catégories, niveaux, cours et séquences

**Interfaces :**
![Gestion catégories](storage/gestion_categories.png)
![Gestion niveaux](storage/gestion_niveaux.png)
![Gestion cours](storage/gestion_cours.png)
![Gestion séquences](storage/gestion_sequences.png)

#### Gestion des ressources et des messages

**Interfaces :**
![Gestion ressources](storage/gestion_ressources.png)
![Gestion messages](storage/gestion_messages.png)

## Conclusion
Ce projet E-Learning offre une solution complète pour l'enseignement en ligne, avec une gestion simplifiée des cours, des utilisateurs et des ressources pédagogiques. Il garantit une expérience fluide et interactive pour les apprenants et les administrateurs.

---
