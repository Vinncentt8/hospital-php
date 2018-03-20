<?php
echo "<h1>" . "Add specie:" . "</h1>";
?>

<fieldset>

<div class="container">
    <form action="<?=URL?>species/createSave" method="post">
        <label for="person">Species</label>
        <input required type="text" type="text" name="species_description" placeholder="Species"><br>
        <br>
        <input type="submit" name="submit" value="Registreer Specie">
    
    </form>

</div>

</fieldset>



  <p><a href="http://localhost/Hospital-Framework/">Back to home</a></p>