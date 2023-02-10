<?php
    include_once("classes/HomePage.php");
    $p = new HomePage();
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
        .modale {
            position: absolute;
            top: 200px;
            left: 200px;
            right: 200px;
            bottom: 200px;
            border: 2px solid red;
            text-align: center;
            background-color: white;
            display: none;
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
            <?php if ($p->result->num_rows > 0): ?>
                <?php while($row = $p->result->fetch_assoc()): ?>
                    <tr>
                        <td class="id"><?php echo($row["id"]); ?></td>
                        <td><?php echo($row["name"]); ?></td>
                        <td><?php echo($row["description"]); ?></td>
                        <td><?php echo($row["state"]); ?></td>
                        <td><?php echo($row["username"]); ?></td>
                        <td><?php echo($row["deadline"]); ?></td>
                        <td>
                            <button>Modifier</button>
                            <button class="delete">Supprimer</button>
                        </td>
                    </tr>
                <?php endwhile; ?>
            <?php endif; ?>
        </tbody>
    </table>
    <div class="modale">
        <h3>Etes vous sur de vouloir supprimer la ligne ?</h3>
        <form action="" method="POST">
            <input id="delete_line" type="hidden" name="delete_line" value="toto">
            <button type="submit">Oui</button>
            <button class="close_modale">Non</button>
        </form>
    </div>
    <script>
        const deletes = document.querySelectorAll(".delete");
        deletes.forEach(function(del){
            del.addEventListener('click', function(event){
                document.querySelector(".modale").style.display = "block";
                let id = del.parentNode.parentNode.querySelector(".id").innerText;
                document.querySelector("#delete_line").value = id;
            })
        })
        const close_modale = document.querySelector(".close_modale");
        close_modale.addEventListener("click", function(event){
            event.preventDefault(); 
            document.querySelector(".modale").style.display = "none";
        })
    </script>
</body>
</html>