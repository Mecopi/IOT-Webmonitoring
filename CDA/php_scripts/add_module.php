<?php
include("../includes/bdd_credentials.php");

if(isset($_POST['mname']) && isset($_POST['mdesc']) && isset($_POST['mtype'])) //Post parameters are setted
{  
    $mname = $_POST['mname'];
    $mdesc = $_POST['mdesc'];
    $mtype = $_POST['mtype'];

    if(strlen(trim($mname)) > 0 && strlen(trim($mdesc)) > 0 && strlen(trim($mtype)) > 0) //Parameters are conform length without space
    {
        $request = $bdd -> query("SELECT name FROM modules WHERE name = '$mname'"); //Searching for an module named like actual adding module
        if(!($request -> fetch())) //No module with same name found
        {
            $random_datas_sended = rand(0, 22909); //Generating value between 0 & 22909
            $bdd->prepare("INSERT INTO `modules` (`id`, `name`, `module_desc`, `type`, `data_sended`) VALUES (NULL,'$mname','$mdesc','$mtype','$random_datas_sended')")->execute(); 
            header('Location: ../module_page.php?name=' . $mname);
        }
        else //Module with same name already in BDD
        {
            header('Location: ../module_page.php?name=' . $mname);
        }
    } 
}
else {
    header('Location: ../add_module.php');
}
?>