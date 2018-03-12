
	<h1>Hospital</h1>
	<ul>
		<li><a href="patients/index">Patiënts</a></li>
		<li><a href="clients">Clients</a></li>
		<li><a href="species.html">Species</a></li>
	</ul>

	<h2>Patiënts</h2>
	<table>
		<thead>
			<tr>
				<th>Name</th>
				<th>Species</th>
				<th>Status</th>
				<th>Client</th>
				<th colspan="2">Action</th>
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


