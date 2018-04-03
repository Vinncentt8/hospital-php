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
        <input type="hidden" name="patient_id" value="<?=$patient['patient_id']?>">
        <input type="submit" value="Edit patient">
    
    </form>

</div>

</fieldset>

	<p><a href="http://localhost/Hospital-Framework/">Back to home</a></p>