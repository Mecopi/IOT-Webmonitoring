<div class="col">
    <div class="container module-container" style="padding-bottom:4px;padding-top:4px;margin-bottom:4px;margin-top:4px;">
        <img src="<?php echo "images/" . strtolower($result['type']) . ".png" ?>" class="img-fluid" style="width: 100px;height:150px;padding-bottom:4px;"/>
        <a href="<?php echo 'module_page.php?name=' . $result['name'] ?>" style="display:block;" class="module_name_label">Nom du module : <?php echo $result['name'] ?> </a>
    </div>
</div>