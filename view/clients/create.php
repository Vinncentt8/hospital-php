<?php
echo "<h1>" . "Je bent nu in clients:" . "</h1>";
echo "<h2>" . "Aanmaken" . "</h2>";
?>

<fieldset>

<div class="container">
    <form action="<?=URL?>clients/createSave" method="post">
        <label for="person">Naam</label>
        <input required type="text" type="text" name="client_firstname" placeholder="Voornaam">
        <input required type="text" type="text" name="client_lastname" placeholder="Achternaam">
        <input type="submit" name="submit" value="Registreer Client">
    
    </form>

</div>

</fieldset>



	<p><a href="http://localhost/Hospital-Framework/">Home</a></p>

