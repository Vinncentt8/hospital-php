<?php
echo "<h1>" . "Je bent nu in species:" . "</h1>";
echo "<h2>" . "Aanmaken" . "</h2>";
?>

<fieldset>

<div class="container">
    <form action="<?=URL?>species/createSave" method="post">
        <label for="person">Species</label>
        <input required type="text" type="text" name="species_description" placeholder="Species">
        <input type="submit" name="submit" value="Registreer Specie">
    
    </form>

</div>

</fieldset>



    <p><a href="http://localhost/Hospital-Framework/">Home</a></p>