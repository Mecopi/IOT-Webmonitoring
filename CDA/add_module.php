<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Webmonitoring - Ajout de module</title>
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/style.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </head>
    <body id="fond">
        <?php
            include('includes/nav_bar.php');
        ?>
        <div style="width:50%;margin:auto">
            <form action="php_scripts/add_module.php" method="post">
                <div class="form-group">
                    <label for="module_name_champ">Nom du module</label>
                    <input type="text" class="form-control" id="module_name_champ" name="mname" placeholder="Nom du module"/>
                </div>
                <div class="form-group">
                    <label for="module_desc_champ">Description du module</label>
                    <textarea class="form-control" id="module_desc_champ" name="mdesc" rows="3" placeholder="Description du module"></textarea>
                </div>
                <div class="form-group">
                    <label for="module_type_champ"></label>
                    <select class="form-control" id="module_type_champ" name="mtype">
                    <option value="Switch">Switch</option>
                    <option value="Desktop" selected>Desktop</option>
                    <option value="Phone">Phone</option>
                    </select>
                </div>
                <div style="width:100%" class="d-flex justify-content-center">
                    <button type="submit" id="submit_button" class="btn btn-success">Ajouter</button>
                </div>
            </form>
        </div>
    </body>
</html>