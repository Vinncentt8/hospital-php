<?php
echo "<h1>" . "Update Patient:" . "</h1>";
?>


<fieldset>


<div class="container">
    <form action="<?= URL ?>patients/updateSave" method="post">
    	<label>Name:</label>
        <input type="text" required="text" name="patient_name" value="<?= $patient['patient_name'] ?>" placeholder="Name"><br>
        <br>
        <label>Patient status:</label>
        <input type="text" required="text" name="patient_status" value="<?= $patient['patient_status'] ?>" placeholder="status">
        <br>
        <br>
         <label>Client:</label>
        <select name="client_id">
            <?php foreach ($clients as $client) { ?>
            <option<?php if($patient['client_id'] == $client['client_id']){ ?> selected <?php } ?> value="<?= $client['client_id']?>"><?= $client['client_firstname']?> <?= " " ?><?= $client['client_lastname']?></option>
            <?php } ?>
        </select>
        </select>
        <br>
        <br>
        <label>Species:</label>
        <select name="species_id">
            <?php foreach ($species as $specie) { ?>
               <option <?php if($patient['species_id'] == $specie['species_id']){ ?> selected <?php } ?> value="<?= $specie['species_id']?>"><?= $specie['species_description']?></option>
           <?php } ?>
         
        <br>
        <br>
        <input type="hidden" name="patient_id" value="<?=$patient['patient_id']?>">
        <input type="radio" name="radio" value="male" class="radio" <?php if (isset($_POST['radio']) && $_POST['radio'] == 'yes'): ?>checked='checked'<?php endif; ?> /> Male

        <input type="radio" name="radio" value="female"  class="radio" <?php if (isset($_POST['radio']) && $_POST['radio'] ==  'no'): ?>checked='checked'<?php endif; ?> /> Female
        <br>
        <br>
        <input type="submit" value="Edit patient">
    
    </form>

</div>

</fieldset>

	<p><a href="http://localhost/Hospital-Framework/">Back to home</a></p>