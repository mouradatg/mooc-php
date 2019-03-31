<?php
$title = "Nous contacter";  
require_once 'config.php'; 
require_once 'functions.php'; 
require 'header.php'; 
?>

<div class="row">
    <div class="col-md-8">
    <h2>Nous contacter</h2>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam deleniti excepturi voluptatibus, distinctio vero sed reprehenderit amet alias quam optio tempore laudantium ad non in quos pariatur repudiandae eius! Rerum.</p>
    </div>
    <div class="col-md-4">
        <h2>Horaires d'ouvertures :</h2>
        <ul>
            <?php foreach(JOURS as $k => $jours): ?>
                <li>
                    <strong><?= $jours ?> </strong> : 
                    <?= creneaux_html(CRENEAUX[$k]); ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>





<?php require 'footer.php'; ?>