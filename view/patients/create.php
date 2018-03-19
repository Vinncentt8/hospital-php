<?php
echo "<h1>" . "Je bent nu in patients:" . "</h1>";
echo "<h2>" . "Aanmaken" . "</h2>";
?>

<fieldset>

<div class="container">
    <form action="<?=URL?>clients/create" method="post">
        <label for="person">Naam</label>
        <input required type="text" type="text" name="name" placeholder="Naam">
        <input required type="text" type="text" name="status" placeholder="status">
        <input type="submit" name="submit" value="Registreer Patient">
    </form>

</div>

</fieldset>



    <p><a href="http://localhost/Hospital-Framework/">Home</a></p>