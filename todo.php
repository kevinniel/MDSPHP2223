<?php
    function dd($datas) {
        echo("<br>");
        echo("<pre>");
        echo("<code>");
        var_dump($datas);
        echo("</code>");
        echo("</pre>");
    }

    // Connexion BDD
    $dbhost = 'localhost:8889';
    $dbuser = 'testphp';
    $dbpass = 'testphp';
    $dbname = "test";
    $mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
    if($mysqli->connect_errno ) {
        printf("Connect failed: %s<br />", $mysqli->connect_error);
        exit();
    }
    
    // requete pour tableau
    $sql = "SELECT * FROM todos";
    $result = $mysqli->query($sql);

    // Fermeture connexion BDD
    $mysqli->close();

    // Traitement du formulaire
    // = vérification des données
    // = insertion en BDD
    dd($_REQUEST);

?>


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
    <!-- action => page de destination -->
    <form action="" method="POST">
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
        <div class="row-form">
            <input type="submit" value="Envoyer !">
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
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            
                // mysqli_free_result($result);
            ?>

            <?php if ($result->num_rows > 0): ?>
                <?php while($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo($row["id"]); ?></td>
                        <td><?php echo($row["name"]); ?></td>
                        <td><?php echo($row["description"]); ?></td>
                        <td><?php echo($row["state"]); ?></td>
                        <td><?php echo($row["username"]); ?></td>
                        <td><?php echo($row["deadline"]); ?></td>
                        <td>
                            <button>Modifier</button>
                            <button>Supprimer</button>
                        </td>
                    </tr>
                <?php endwhile; ?>
            <?php endif; ?>
        </tbody>
    </table>
</body>
</html>