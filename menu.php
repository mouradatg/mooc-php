<?php 
if (!function_exists('nav_item')) {
    function nav_item (string $lien, string $titre, string $linkClass = ''): string 
    {
    $classe = 'nav_item'; 
    if ($_SERVER['SCRIPT_NAME'] === $lien) {
        $classe .= ' active'; 
    }
    return '<li class="' . $classe . '">
        <a class="' . $linkClass . '" href="' . $lien . '">' . $titre .'</a>
    </li>';
    }
}
?>

<?= nav_item('/index.php', 'Acceuil', $class); ?>
<?= nav_item('/contact.php', 'Contact', $class); ?>


