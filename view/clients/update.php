<?php
echo "<h1>" . "Update client:" . "</h1>";
?>



<fieldset>


<div class="container">
    <form action="<?= URL ?>clients/updateSave/<?=$client['client_id']?>" method="post">
    	<label>Name:</label>
        <input  required type="text" required="text" value="<?= $client['client_firstname'] ?>" name="name" placeholder="john"><br>
        <br>
        <label>Last name:</label>
        <input required type="text" required="text" value="<?= $client['client_lastname'] ?>" name="name2" placeholder="doe"><br>
        <br>
        <label>Phone number:</label>
        <input required type="tel" name="phone" min="10" max="10" value="<?= $client['phone'] ?>" placeholder="06......">
        <br>
        <br>
        <label>Email adress:</label>
        <input required type="text" name="email" value="<?= $client['email'] ?>" placeholder="example@hismail.com">
        <br>
        <br>
         <input type="hidden" name="client_id" value="<?=$client['client_id']?>">
        <input type="submit" value="Edit">
    
    </form>

</div>

</fieldset>





	<p><a href="http://localhost/Hospital-Framework/clients/index">Back to home</a></p>