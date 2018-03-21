<?php
echo "<h1>" . "Add patient:" . "</h1>";
?>

<fieldset>

<div class="container">
    <form action="<?=URL?>patients/createSave" method="post">
        <label>Name:</label>
        <input for="person" required type="text" type="text" name="patient_name" placeholder="Name"><br>
        <br>
        <label>Status:</label>
        <input required type="text" type="text" name="patient_status" placeholder="Status">
        <br>
        <br>
        <input type="submit" name="submit" value="Registreer Patient">
    </form>

</div>

</fieldset>



	<p><a href="http://localhost/Hospital-Framework/">Back to home</a></p>