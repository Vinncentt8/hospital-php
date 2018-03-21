
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
echo "<th>" . $client['species_description']  . "</th>";
echo "<th>" . $client['patient_status']  . "</th>";
echo "<th>" . $client['patient_name'] . " " . $client['client_lastname'] . "</th>";
echo "<td class='center'>" . "<a href='" . URL . "patients/update/" . $client['patient_id'] . "'>Edit</a></td>";
echo "<td class='center'>" . "<a href='" . URL . "patients/delete/". $client['patient_id'] ."'>Delete</a></td>";


echo "</tr>";
?>
<?php } ?>

</table>


