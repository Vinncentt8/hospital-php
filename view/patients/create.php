<?php
echo "<h1>" . "Add patient:" . "</h1>";
?>

<fieldset>

<div class="container">
    <form action="<?=URL?>patients/createSave" method="post">
        <label>Name:</label>
        <input for="person" required type="text" name="patient_name" placeholder="Name"><br>
        <br>
        <label>Status:</label>
        <input required type="text" name="patient_status" placeholder="Status">
        <br>
        <br>
        
        <label>Client:</label>
        <select name="client_id">
            <?php foreach ($clients as $client) { ?>
            <option value="<?= $client['client_id']?>"><?= $client['client_firstname']?> <?= " " ?><?= $client['client_lastname']?></option>
            <?php } ?>
        </select>
        <br>
        <br>
        <label>Species:</label>
        <select name="species_id">
            <?php foreach ($species as $specie) { ?>
               <option value="<?= $specie['species_id']?>"><?= $specie['species_description']?></option>
           <?php } ?>
        </select>
        <input type="radio" name="radio" value="male" class="radio" <?php if (isset($_POST['radio']) && $_POST['radio'] == 'yes'): ?>checked='checked'<?php endif; ?> /> Male

        <input type="radio" name="radio" value="female"  class="radio" <?php if (isset($_POST['radio']) && $_POST['radio'] ==  'no'): ?>checked='checked'<?php endif; ?> /> Female
        <br>
        <br>
        <input type="submit" name="submit" value="Registreer Patient">
    </form>

</div>

</fieldset>



	<p><a href="http://localhost/Hospital-Framework/">Back to home</a></p>