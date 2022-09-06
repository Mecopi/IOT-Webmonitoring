<!DOCTYPE html>
<html>
    <?php
    if(!isset($_GET['name']) || strlen(trim($_GET['name'])) <= 0) {
        header('Location: index.php');
    }
    include("includes/bdd_credentials.php");
    $request = $bdd -> query("SELECT * FROM modules WHERE name = '" . $_GET['name'] . "'");
    if(($result = $request -> fetch())) //Searched module is on DB
    {
        $mname = $result['name'];
        $mdesc = $result['module_desc'];
        $mtype = $result['type'];
        $mdata = $result['data_sended'];
    }
    else {
        header('Location: index.php');
    }
    ?>
    <head> 
        <title>Webmonitoring - <?php echo $mname ?></title>
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/style.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </head>
    <body id="fond">
        <?php include('includes/nav_bar.php'); ?>
        <div style="width:25%;margin:auto;">
            <div class="container module-container" style="padding-bottom:4px;padding-top:4px;">
                <img src="<?php echo "images/" . strtolower($mtype) . ".png" ?>" class="img-fluid" style="width: 200px;height:250px;padding-bottom:4px;"/>
                <p>Nom du module : <?php echo $mname ?> </p>
                <p>Description du module : <?php echo $mdesc ?> </p>
                <p>Type de module : <?php echo $mtype ?> </p>
                <p>Données envoyées par le module : <?php echo $mdata ?> octets </p>
            </div>
        </div>
    </body>
</html>