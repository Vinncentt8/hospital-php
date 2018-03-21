<fieldset>
	<h2>Update client</h2>
	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>First name</th>
				<th>Last name</th>
			</tr>
		</thead>
		</tbody>

<?php
foreach ($clients as $client) {
	echo "<tr>";
	echo "<th>" . $client['client_id'] . "</th>";
	echo "<th>" . $client['client_firstname'] . "</th>";
	echo "<th>" . $client['client_lastname']  . "</th>";
	echo "</tr>";
}
?>

<div class="container">
    <form action="<?= URL ?>patient/update/<?=$clients[0]['client_id']?>" method="post">
    	<label>Name:</label>
        <input type="text" required="text" name="name" placeholder="john"><br>
        <br>
        <label>Last name:</label>
        <input type="text" required="text" name="name2" placeholder="doe"><br>
        <br>
        <label>Phone number:</label>
        <input type="text" name="phone" placeholder="06......">
        <br>
        <br>
        <label>Email adress:</label>
        <input type="text" name="email" placeholder="example@hismail.com">
        <br>
        <br>
        <input type="submit" value="Edit">
    
    </form>

</div>

</fieldset>





	<p><a href="http://localhost/Hospital-Framework/">Back to home</a></p>