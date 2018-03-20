<fieldset>
	<h2>Update patiënt</h2>
	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Status</th>
			</tr>
		</thead>
		</tbody>


<?php
foreach ($patients as $patient) {
echo "<tr>";
echo "<th>" . $patient['patient_id'] . "</th>";
echo "<th>" . $patient['patient_name']  . "</th>";
echo "<th>" . $patient['patient_status']  . "</th>";
echo "</tr>";
}
?>

<div class="container">
    <form action="<?= URL ?>patients/update" method="post">
    	<label>Name:</label>
        <input type="text" name="name" placeholder="Name"><br>
        <br>
        <label>Patient status:</label>
        <input type="text" name="name2" placeholder="status">
        <br>
        <br>
        <input type="submit" value="Edit patient">
    
    </form>

</div>

</fieldset>

	<p><a href="http://localhost/Hospital-Framework/">Back to home</a></p>