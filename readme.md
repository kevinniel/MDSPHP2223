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