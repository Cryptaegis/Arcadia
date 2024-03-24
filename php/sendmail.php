
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Document</title>
         <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- css -->
    <link rel="stylesheet" type="text/css" href="../css/styles.css" />
    </head>
    <body class='vitrine-accueil'>
    <?php include "_partial/header.php"; ?>
    <br>
    <?php include "_partial/navbar.php"; ?>
    <br>
    <?php

    if (isset($_POST['message'])) {
        $retour = mail('sendmail.monsite@gmail.com', 'Envoi depuis la page Contact', $_POST['message'], 'From:' . "\r\n" . 'Reply-to: ' . $_POST['email']);
        if($retour)
            echo '<p>Votre message a bien été envoyé!</p>';
    }
    else {
        echo '<p>Veuillez remplir le formulaire</p>';
    }
    ?>
    <br>
    <br>
    <?php include "_partial/footer.php"; ?>

    </body>
    </html>