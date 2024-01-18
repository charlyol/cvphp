<p>Dans le formulaire précédent, vous avez fourni les
    informations suivantes :</p>

<?php
$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
echo ('le name est : ' . $name);
$renseignement = filter_input(INPUT_POST, 'commentaire', FILTER_SANITIZE_SPECIAL_CHARS);
echo ('le commentaire est : ' . $renseignement);
?>