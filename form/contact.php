<?php
$metaTitle = 'contact';
require './page/header.php';
?>
    <body>

    <form action="index.php?page=traitement" method="post">
        <label for="civilite">Civilité:</label>
        <select id="civilite" name="civilite">
            <option value="M">M.</option>
            <option value="Mme">Mme</option>
        </select>

        <br>
+
        <label for="nom">Nom:</label>
        <input type="text" id="nom" name="nom">

        <br>

        <label for="prenom">Prénom:</label>
        <input type="text" id="prenom" name="prenom">

        <br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email">

        <br>

        <label>Raison du contact:</label>
        <input type="radio" id="emploi" name="raison" value="proposition_emploi">
        <label for="emploi">Proposition d'emploi</label>

        <input type="radio" id="info" name="raison" value="demande_information">
        <label for="info">Demande d'information</label>

        <input type="radio" id="prestations" name="raison" value="prestations">
        <label for="prestations">Prestations</label>

        <br>

        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="4"></textarea>

        <br>

        <input type="submit" value="Envoyer">
    </form>

    </body>
    </html>

<?php require './page/footer.php'; ?>