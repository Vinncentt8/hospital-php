<?php
echo "<h1>" . "Je bent nu in patients:" . "</h1>";
echo "<h2>" . "Aanmaken" . "</h2>";
?>

<fieldset>

<div class="container">
    <form action="<?=URL?>patients/createSave" method="post">
        <label for="person">Naam</label>
        <input required type="text" type="text" name="patient_name" placeholder="Naam">
        <input required type="text" type="text" name="patient_status" placeholder="status">
        <input type="submit" name="submit" value="Registreer Patient">
    </form>

</div>

</fieldset>



    <p><a href="http://localhost/Hospital-Framework/">Home</a></p>