<!-- Affichage en mode "tableau" -->
<h1>Liste des animaux</h1>
<table>

    <?php
        foreach ($animaux as $animal) {
    ?>
        <tr>
            <td><?= $animal->nom_animal ?></td>
            <td><?= $animal->nom_type ?></td>
            <td><?= $animal->nom ?></td>
            <td><?= $animal->prenom ?></td>
            <td><?= $animal->telephone ?></td>
        </tr>
    <?php
        }
    ?>
</table>