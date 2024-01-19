<p>Dans le formulaire précédent, vous avez fourni les
    informations suivantes :</p>

<?php
    $civilite = filter_input(INPUT_POST, 'civilite');
    $nom = filter_input(INPUT_POST, 'nom');
    $prenom = filter_input(INPUT_POST, 'prenom');
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $raison = filter_input(INPUT_POST, 'raison');
    $message = filter_input(INPUT_POST, 'message');
    if (empty($civilite) || empty($nom) || empty($prenom) || empty($email) || empty($raison) || empty($message)) {
        echo "Erreur : Tous les champs sont obligatoires. Veuillez remplir tous les champs.";
    } else {
        if (!$email) {
            echo "Erreur : L'adresse email n'est pas valide.";
        } else {
            $dateDuJour = date('Y-m-d_H:i:s');
            $filePath = "./contact/contact_$dateDuJour.txt";
            $dataToWrite = "Civilité: $civilite\nNom: $nom\nPrénom: $prenom\nEmail: $email\nRaison du contact: $raison\nMessage: $message\n";
            file_put_contents($filePath, $dataToWrite);

            echo "Les données ont été enregistrées avec succès dans le fichier $filePath";
        }
    }
?>
