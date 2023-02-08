<!-- ustilisateur BDD : testphp | testphp -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo</title>
    <style>
        .row-form {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <h1>Todo List</h1>
    <hr>
    <h2>Formulaire d'ajout</h2>
    <form action="">
        <div class="row-form">
            <label for="name">Nom : </label>
            <input type="text" name="name" id="name">
        </div>
        <div class="row-form">
            <label for="description">Description : </label>
            <textarea type="text" name="description" id="description"></textarea>
        </div>
        <div class="row-form">
            <label for="state">État : </label>
            <select name="state" id="state">
                <option value="">Sélectionnez un état...</option>
                <option value="0">A faire</option>
                <option value="1">En cours</option>
                <option value="2">Terminé</option>
                <option value="3">Reporté</option>
                <option value="4">Annulé</option>
            </select>
        </div>
        <div class="row-form">
            <label for="username">Utilisateur : </label>
            <input type="text" name="username" id="username">
        </div>
        <div class="row-form">
            <label for="deadline">Deadline : </label>
            <input type="date" name="deadline" id="deadline">
        </div>
    </form>
    <hr>
    <h2>Tableau</h2>
    <table border="1">
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>description</th>
                <th>Etat</th>
                <th>utilisateur</th>
                <th>deadline</th>
            </tr>
        </thead>
        <tbody>

        </tbody>
    </table>
</body>
</html>