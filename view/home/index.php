
	<h1>Hospital</h1>
	<ul>
		<li><a href="patients/index">Patiënts</a></li>
		<li><a href="clients/index">Clients</a></li>
		<li><a href="species/index">Species</a></li>
	</ul>

	<h2>Patiënts</h2>
	<table>
		<thead>
			<tr>
				<th>Name</th>
				<th>Last name</th>
				<th>Species</th>
				<th>Status</th>
				<th>Client</th>
			</tr>
		</thead>
		</tbody>


<?php


foreach ($clients as $client) {
echo "<tr>";
echo "<th>" . $client['client_firstname'] . "</th>";
echo "<th>" . $client['client_lastname']  . "</th>";
echo "<th>" . $client['patient_name']  . "</th>";
echo "<th>" . $client['patient_status']  . "</th>";
echo "<th>" . $client['species_description']  . "</th>";
echo "</tr>";
?>
<?php } ?>

</table>


