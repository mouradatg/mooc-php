<?php 
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

function nav_menu (string $linkClass = ''): string
{
    return 
        nav_item('/index.php', 'Acceuil', $linkClass) .
        nav_item('/glace.php', 'Glace en ligne', $linkClass) .
        nav_item('/contact.php', 'Contact', $linkClass); 
}

function checkbox (string $name, string $value, array $data): string 
{
    $attributes = ''; 
    if (isset($data[$name]) && in_array($value, $data[$name])) {
        $attributes .= 'checked'; 
    }
    return <<<HTML
    <input type="checkbox" name ="{$name}[]" value="$value" $attributes>
HTML;
}

function radio (string $name, string $value, array $data): string 
{
    $attributes = ''; 
    if (isset($data[$name]) && $value === $data[$name]) {
        $attributes .= 'checked'; 
    }
    return <<<HTML
    <input type="radio" name ="{$name}" value="$value" $attributes>
HTML;
}

function debug ($variable)
{
    echo '<div class="alert alert-danger" role="alert">';
    echo '<pre>';
    var_dump($variable); 
    echo '</pre>';
    echo '</div>';
}

function creneaux_html (array $creneaux) {
    if (empty($creneaux)) {
        return 'On est pas là !'; 
    }
    $phrases = []; 
    foreach ($creneaux as $creneau) {
        $phrases[] = "<strong>{$creneau[0]}h</strong> - <strong>{$creneau[1]}h</strong>";
    }
    return 'Ouvert de ' . implode(' & ', $phrases); 
}
