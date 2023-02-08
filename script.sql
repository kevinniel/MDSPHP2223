-- Sélectionner tous les éléments de ma table
SELECT * FROM todos;

-- Sélectionner tous les id de la table todos
SELECT id FROM todos;

-- Sélectionner tous les noms et toutes les descriptions de la table todos
SELECT name, description FROM todos;

-- Récupération d'une seul ligne
SELECT * FROM todos WHERE id = 3;

-- Création d'une ligne
INSERT INTO `todos` (`name`, `description`, `state`)
VALUES ('aozudnib', 'azodunaziudb', 1);

-- Suppression d'une ligne
DELETE FROM todos WHERE id = 2;

-- Modification
UPDATE todos
SET name = 'poi', description = 'poipoipoizer'
WHERE id = 3;

