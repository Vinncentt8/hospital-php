<fieldset>


<div class="container">
   <form action="<?= URL ?>species/updateSave" method="post">
    	<label>Species:</label>
        <input type="text" required="text" name="species_description" value="<?=$specie['species_description']?>" placeholder="Species"><br>
        <br>
        <br>
        <input type="hidden" name="species_id" value="<?=$specie['species_id']?>">
        <input type="submit" value="Edit">
    
    </form>

</div>

</fieldset>





	<p><a href="http://localhost/Hospital-Framework/">Back to home</a></p>