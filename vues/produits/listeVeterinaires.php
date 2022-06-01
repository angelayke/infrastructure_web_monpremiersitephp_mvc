<!-- Affichage en mode "liste" -->
<h1>Liste des vétérinaires</h1>
<ul>
         <?php foreach ($veterinaires as $veterinaire) {  ?> 
        <li><?= $veterinaire->nom_veto ?> <?= $veterinaire->prenom_veto ?> - <?= $veterinaire->nom_specialite ?></li>
    <?php  } ?>
</ul>