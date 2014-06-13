php
===

Examen PHP session juin, année 2014


Défi: Inscription comme utilisateur à mon TFE, avec email de confirmation mis en forme. (max:14/20)

Contexte: l'utilisateur doit s'inscrire sur le site si il veut bénéficier de fonctionnalités supplémentaires. Il peut cependant effectuer sa recherche sans être obigatoirement connecté.

Concrètement, il s'inscrit via le formulaire d'inscription (page inscription), où il doit introduire un login, son adresse mail et un mdp.

Je vérifie si ceux-ci ne sont pas déjà utilisé. 

Ensuite, l'utilisateur reçoit un email de confirmation pour activer son compte. Si il ne clique pas sur le lien inclu dans l'email, son compte reste inactif et donc inutilisable. (système de clé d'activation qui passe de 0 à 1 ).

Ensuite il peut se connecter, profiter de ses avantages et puis se déconnecter quand il le souhaite. 
