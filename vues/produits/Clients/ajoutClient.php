<!-- Formulaire ajout client -->
<h1>Ajouter un client</h1>
<form action="./form.php" method="POST">
    <label for="nom">Votre nom</label>
    <input type="text" id="nom" name="nom"><br><br>

    <label for="prenom">Votre prénom</label>
    <input type="text" id="prenom" name="prenom"><br><br>

    <label for="adresse">Adresse</label>
    <input type="text" id="adresse" name="adresse"><br><br>

    <label for="zipcode">Code Postal</label>
    <input type="text" id="zipcode" name="zipcode"><br><br>

    <label for="ville">Ville</label>
    <input type="text" id="ville" name="ville"><br><br>

    <label for="province">Province</label>
    <input type="text" id="province" name="province"><br><br>

    <label for="tel">Téléphone</label>
    <input type="tel" id="tel" name="tel"pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}"><br><br>

    <input type="submit" value="Submit">
    
</form>