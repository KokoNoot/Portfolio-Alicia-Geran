<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Contact</title>
</head>

<body>
    <h1>Contact</h1>
    <form method="post">
        <label for="sampleInput">Votre email</label>
        <input type="email" name="email" required><br>
        <label for="exampleMessage">Message</label>
        <textarea name="message" required></textarea><br>
        <input class="btn--primary h-full-width" type="submit" value="Envoyer">
    </form>
    <?php
    if (isset($_POST['message'])) {
        $retour = 'aliciageran@alwaysdata.net', 'Envoi depuis la page Contact', $_POST['message'], 'From: webmaster@monsite.fr' . "\r\n" . 'Reply-to: ' . $_POST['email']);
        if($retour)
            echo '<p>Votre message a bien été envoyé.</p>';
    }
    ?>
</body>
</html>
