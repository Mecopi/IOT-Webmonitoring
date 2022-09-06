<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Webmonitoring - Dashboard</title>
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/style.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </head>
    <body id="fond">
        <?php 
            include('includes/nav_bar.php');
            include('includes/bdd_credentials.php');
        ?>
        <div class="container">
            <div class="row">
            <?php
                $request = $bdd -> query("SELECT * FROM modules");
                $i = 0;
                while($result = $request -> fetch())
                {
                    if($i % 3 == 0 && $i != 0) //Affichage des modules 3 par 3 horizontalement
                    {
                        echo '</div>';
                        echo '<div class="row">';
                    }
                    include('includes/dashboard_div_content.php');
                    $i++;
                }
                echo '</div>';
            ?>
        </div>
    </body>


</html>