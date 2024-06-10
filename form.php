<?php
    
    $testo = $_GET['paragrafo'];
    $censura = $_GET['censura'];

    ?>

    <p>Il testo é : <br> <?php echo $testo ?></p>
    <span>Lunghezza testo: <?php echo strlen($testo) ?></span>

    <hr>

    <p>Il testo censurato é : <br> <?php echo str_replace($censura, "***", $testo)?></p>
    <span>Lunghezza testo: <?php echo strlen($testo) ?></span>