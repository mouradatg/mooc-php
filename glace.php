<?php
require_once 'functions.php';
# Checkbox - plusieurs 
$parfums = [
    'Fraise' => 4, 
    'Chocolat' => 5, 
    'Vanille' => 3
]; 
# Radio une seules 
$cornets = [
    'Pot' => 2, 
    'Cornet' => 3
]; 
# Checkbox 
$supplements = [
    'Pepites de chocolat' => 1, 
    'Chantilly' => 0.5
]; 
$title = "Composer votre glace"; 
$ingredients = []; 
$total = 0; 
if (isset($_GET['parfum'])) {
    foreach($_GET['parfum'] as $parfum) {
        if(isset($parfums[$parfum])) {
            $ingredients[] = $parfum; 
            $total += $parfums[$parfum]; 
        }
    }
}
if (isset($_GET['supplements'])) {
    foreach($_GET['supplements'] as $supplement) {
        if(isset($supplements[$supplement])) {
            $ingredients[] = $supplement; 
            $total += $supplements[$supplement]; 
        }
    }
}
if (isset($_GET['cornet'])) {
    $cornet = $_GET['cornet']; 
    if(isset($cornets[$cornet])) {
        $ingredients[] = $cornet; 
        $total += $cornets[$cornet]; 
    }

}
require 'header.php'; 
?>

<h1>Composer votre glace</h1>

<div class="div row">
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
            <h5 class="cart-title">Votre glace</h5>
            <ul>
                <?php foreach ($ingredients as $ingredient): ?>
                    <li><?= $ingredient ?></li>
                <?php endforeach; ?>
            </ul>
            <p>
                <strong>Prix : </strong> <?= $total ?> € 
            </p>
            </div>
        </div>
    </div>
    <div class="col-md-8">
    <form action="/glace.php" method="GET">
        <h2>Choissisez vos parfums</h2>
        <?php foreach($parfums as $parfum => $prix): ?>
        <div class="checkbox">
            <label>
                <?= checkbox('parfum', $parfum, $_GET) ?>
                <?= $parfum ?> - <?= $prix ?> € 
            </label>
        </div>
        <?php endforeach;  ?>
        <h2>Choissisez votre cornet</h2>
        <?php foreach($cornets as $cornet => $prix): ?>
        <div class="checkbox">
            <label>
                <?= radio('cornet', $cornet, $_GET) ?>
                <?= $cornet ?> - <?= $prix ?> € 
            </label>
        </div>
        <?php endforeach;  ?>
        <h2>Choissisez vos supléments</h2>
        <?php foreach($supplements as $sup => $prix): ?>
        <div class="checkbox">
            <label>
                <?= checkbox('supplements', $sup, $_GET) ?>
                <?= $sup ?> - <?= $prix ?> € 
            </label>
        </div>
        <?php endforeach;  ?>
        <button type="submit" class="btn btn-primary">Composer ma glace</button>
    </form>
    </div>
</div>

<br>

<div class="alert alert-dark" role="alert">
  <h4 class="alert-heading">$_GET</h4>
  <p>Debug de la methode GET</p>
  <hr>
  <pre><?php var_dump($_GET) ?></pre>
</div>

<br>

<div class="alert alert-dark" role="alert">
  <h4 class="alert-heading">$_POST</h4>
  <p>Debug de la methode POST</p>
  <hr>
  <pre><?php var_dump($_POST) ?></pre>
</div>

<?php require 'footer.php' ?> 

