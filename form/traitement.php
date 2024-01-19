<p>Dans le formulaire précédent, vous avez fourni les
    informations suivantes :</p>

<?php
$action = filter_input(INPUT_POST, 'action', FILTER_SANITIZE_SPECIAL_CHARS);
$renseignement = filter_input(INPUT_POST, 'commentaire', FILTER_SANITIZE_SPECIAL_CHARS);

if ($action==1){
    include 'form.html';
    header ('Location: resultat.php');
    exit;
}
?>