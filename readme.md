# cours PHP PP & OO

Pour les étudiants de BTS SIO + B2 MDS

1 - serveur web MAMP / WAMP / XAMPP


## TP 1 - RPG

Coder les classes PHP permettant de gérer un RPG comme suit : 

- Character
    - attributes
        - name
        - lifePoints
        - defense
        - attack
    - methods
        - attack(Ennemy)
        - defense(Ennemy)
        - mount(Mount)
        - getWeapon(Weapon)
        - getShield(Shield)
- Weapon
    - attributes
        - damage
        - sustainability
- Shield
    - attributes
        - defense
        - sustainability
- Mount
    - attributes
        - damageBonus
        - defenseBonus
- Ennemy
    - attributes
        - name
        - lifepoints
        - attack
        - defense
        - boss
    - methods
        - attack(Character)
        - defense(Character)
        - mount(Mount)
        - getWeapon(Weapon)
        - getShield(Shield)



## TP 2

rendre fonctionnelle la page todo.php

En bonus :
1. Lors de la suppression d'une ligne, une modale de confirmation doit apparaître. (Pas d'alert JS)
2. Lors du clic sur le bouton "modifier", la LIGNE du tableau correspondante doit se transformer grâce à Javascript en formulaire. Les boutons "modifier et supprimer" disparaissent au profit de boutons "confirmer" ou "annuler"

Objectif final : Traiter le tout en orienté objet en php :D