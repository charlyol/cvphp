<?php
session_start();

// Liste des mots
$words = array("pendu", "informatique", "programmation", "developpement", "openai", "gpt", "php");

// Fonction pour choisir un mot aléatoire
function chooseWord($words)
{
    return $words[array_rand($words)];
}

// Fonction pour initialiser une partie
function initializeGame()
{
    $wordToGuess = chooseWord($GLOBALS['words']);
    $_SESSION['wordToGuess'] = $wordToGuess;
    $_SESSION['guessedLetters'] = array();
    $_SESSION['attempts'] = 0;
}

// Fonction pour afficher le mot masqué avec les lettres devinées
function displayWord()
{
    $wordToGuess = $_SESSION['wordToGuess'];
    $guessedLetters = $_SESSION['guessedLetters'];

    $displayedWord = '';
    foreach (str_split($wordToGuess) as $letter) {
        if (in_array($letter, $guessedLetters)) {
            $displayedWord .= $letter . ' ';
        } else {
            $displayedWord .= '_ ';
        }
    }

    return trim($displayedWord);
}

// Vérifie si la lettre devinée est correcte
function guessLetter($letter)
{
    $wordToGuess = $_SESSION['wordToGuess'];
    $guessedLetters = $_SESSION['guessedLetters'];

    if (!in_array($letter, $guessedLetters)) {
        $_SESSION['guessedLetters'][] = $letter;

        if (!strpos($wordToGuess, $letter)) {
            $_SESSION['attempts']++;
        }
    }
}

// Vérifie si le joueur a gagné
function hasWon()
{
    $wordToGuess = $_SESSION['wordToGuess'];
    $guessedLetters = $_SESSION['guessedLetters'];

    foreach (str_split($wordToGuess) as $letter) {
        if (!in_array($letter, $guessedLetters)) {
            return false;
        }
    }

    return true;
}

// Vérifie si le joueur a perdu
function hasLost()
{
    $maxAttempts = 6; // Nombre maximum d'essais avant de perdre
    return $_SESSION['attempts'] >= $maxAttempts;
}

// Vérifie si la partie est terminée
function isGameOver()
{
    return hasWon() || hasLost();
}

// Si la partie n'est pas encore initialisée, initialise-la
if (!isset($_SESSION['wordToGuess'])) {
    initializeGame();
}

// Si une lettre est soumise, devinez-la
if (isset($_POST['letter'])) {
    $letter = strtolower($_POST['letter']);
    guessLetter($letter);
}

// Affiche le jeu
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeu du Pendu</title>
</head>

<body>

    <h1>Jeu du Pendu</h1>

    <?php
    if (isGameOver()) {
        echo "<p>Le mot à deviner était : " . $_SESSION['wordToGuess'] . "</p>";
        echo "<p>Vous " . (hasWon() ? "avez gagné" : "avez perdu") . "!</p>";
        echo "<p><a href=\"$_SERVER[PHP_SELF]\">Rejouer</a></p>";
    } else {
        echo "<p>Mot à deviner : " . displayWord() . "</p>";
        echo "<p>Essais restants : " . ($_SESSION['attempts'] < 6 ? 6 - $_SESSION['attempts'] : 0) . "</p>";
    ?>
        <form method="post">
            <label for="letter">Devinez une lettre :</label>
            <input type="text" id="letter" name="letter" maxlength="1" pattern="[a-zA-Z]" required>
            <button type="submit">Soumettre</button>
        </form>
    <?php
    }
    ?>

</body>

</html>