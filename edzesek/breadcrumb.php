<ul class="breadcrumbs list-inline">
    <li><a href="<?php echo $pageUrl; ?>">Főoldal</a></li>
    <?php 
        if($_GET['submenu']) {
            echo '<li><a href="'.$pageUrl.'edzesek">Edzések</a></li>'; 
        }
        else {
            echo '<li class="active"><a href="#">Edzések</a></li>';
        }
    ?>
    
    <?php if($_GET['submenu']) echo '<li class="active"><a href="#">'.$_GET['submenu'].'</a></li>'; ?>
</ul>