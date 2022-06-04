<!-- Affichage en mode "bloc" -->
<h1>Rendez-vous</h1>
    <?php
       // $result = $mysqli->query("SELECT date_consultation, heure_consultation FROM consultations ORDER BY date_consultation");

        foreach ($rendezvous1 as $rendezvous) {
    ?>
        <h2><?= $rendezvous['date_consultation'] ?> : <?= $rendezvous['heure_consultation'] ?></h2>
        <p>Date du rendez-vous : <?= $rendezvous['date_consultation'] ?></p>
        <p>Heure : <?= $rendezvous['heure_consultation'] ?></p>
    <?php
        }
    ?>