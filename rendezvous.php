
<?php
    require_once 'controlleurs/rendezvous.php';
?>

<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/styles.css">
    <title>Clinique Vétérinaire</title>
</head>

<body>
    <header>
        <h1>Clinique Vétérinaire</h1>

        <ul>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="veterinaires.php">Vétérinaires</a></li>
            <li><a href="animaux.php">Animaux</a></li>
            <li><a href="rendezvous.php">Rendez-vous</a></li>
        </ul>
    </header>

    <main>
    <?php
        $controller=new ControlleurRendezVous;
        $controller->afficherBloc();
    ?>
    </main>

</body>

</html>