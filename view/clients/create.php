<?php
echo "<h1>" . "Create clients:" . "</h1>";
?>


<fieldset>

<div class="container">
    <form action="<?=URL?>clients/createSave" method="post">
        <label for="person">Naam</label>
        <input required type="text" type="text" name="client_firstname" placeholder="Name"><br>
        <br>
        <label>Last name</label>
        <input required type="text" type="text" name="client_lastname" placeholder="Last name"><br>
        <br>
        <label>Phone number:</label>
        <input required type="text" min="0" max="10" name="phone" placeholder="06......">
        <br>
        <br>
        <label>Email adress:</label>
        <input required type="text" name="email" placeholder="example@hismail.com">
        <br>
        <br>
        <input type="submit" name="submit" value="Registreer Client">
    
    </form>

</div>

</fieldset>

<p><a href="http://localhost/Hospital-Framework/clients/index">Back to home</a></p>



	

