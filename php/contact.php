
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact</title>
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
    <div class="container border-form">
        <div class="row">
            <div class="col-md-15">
                <h2>Contactez-nous</h2>
                <form action="sendmail.php" method="post">
                    <label>Votre email</label>
                    <br>
                    <input type="email" name="email" required><br>
                    <label for="message">Message</label>
                    <br>
                    <textarea id="message" name="message" class="form-control" rows="10" cols="30" required></textarea>
                    <br>
                    <input type="submit" class="btn btn-primary form-btn" value="Envoyer">
                </form>
            </div>
        </div>
    </div>

        <br>
    <br>
    <?php include "_partial/footer.php"; ?>
</body>

</html>