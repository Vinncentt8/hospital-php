<fieldset>

<div class="container">
    <form action="<?= URL ?>patient/create" method="post"><!-- opslaan via post -->
    
        <input type="text" name="firstname" placeholder="Name species">
        <input type="text" name="discription" placeholder="Issues">
        <select name="gender">
            <option value="Dog">Dog</option>
            <option value="cat">Cat</option>  
        </select>

        <input type="submit" value="Verzenden">
    
    </form>

</div>
</fieldset>

	<p><a href="http://localhost/Hospital-Framework/">Home</a></p>