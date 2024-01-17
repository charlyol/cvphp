<?php
    require 'header.php';
    $metaTitle='Contact';
?>
<div>
<section class="titre">
    Questionnaire ?
</section>
<section class="forms">
    Formulaire
</section>
<section>
    <form class="quest" action="https://httpbin.org/post" method="post" name="Renseignement" target="_blank" autocomplete="on">
        <div>
            <label for="Nom">Nom</label> : <input id="Nom" name="name" placeholder="Entrez votre nom ..." required>
        </div>
        <div>
            <label for="Prenom">Prenom</label> : <input id="Prenom" name="first_name"
                                                        placeholder="Entrez votre prénom ..." required>
        </div>
        <div>
            Votre choix <input type="radio" name="choice"> oui <input type="radio" name="choice"> non
        </div>
        <div>
            Fumer
            <select name="fumer" required>
                <option value="good">Bien</option>
                <option value="not_good">Pas bien</option>
                <option value="maybe">Peux être</option>
            </select>
        </div>
        <div>
            <label for="Mel">Mail</label> : <input id="Mel" type="email" name="email" placeholder="Adresse mail ..."
                                                   required>
        </div>
        <div>
            <label for="Tel">Téléphone</label> : <input id="Tel" type="tel" name="phone"
                                                        placeholder="Numéro de téléphone ..." pattern="[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}" required>
        </div>
        <div>
                <textarea name="Commentaire" rows="8" cols="80"
                          placeholder="Commentaire, à vous de voir ..."></textarea>
        </div>
        <input class="btnre" type="reset" value="Réinitialiser">
        <input class="btnen" type="submit" value="Envoi du formulaire">
    </form>
</section>
</div>
<?php require 'footer.php'; ?>