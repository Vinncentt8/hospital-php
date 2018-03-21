<fieldset>
    <h2>Update specie</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Species</th>
            </tr>
        </thead>
        </tbody>


<?php
foreach ($species as $specie) {
    echo "<tr>";
    echo "<th>" . $specie['species_id'] . "</th>";
    echo "<th>" . $specie['species_description']  . "</th>";
    echo "</tr>";
    }
?>

<div class="container">
   <form action="<?= URL ?>species/update/<?=$species[0]['species_id']?>" method="post">
    	<label>Species:</label>
        <input type="text" required="text" name="name" placeholder="Species"><br>
        <br>
        <br>
        <input type="submit" value="Edit">
    
    </form>

</div>

</fieldset>





	<p><a href="http://localhost/Hospital-Framework/">Back to home</a></p>