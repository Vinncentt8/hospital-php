<fieldset>

<div class="container">
    <form action="<?= URL ?>patient/create" method="post">
    
        <input type="text" name="firstname" placeholder="Name species">
        <input type="text" name="discription" placeholder="issues">
        <select name="gender">
            <option value="Dog">Dog</option>
            <option value="cat">Cat</option>  
        </select>

        <input type="submit" value="Verzenden">
    
    </form>

</div>
</fieldset>