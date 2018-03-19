<h1>Hospital</h1>
	<ul>
		<li><a href="http://localhost/Hospital-Framework/patients/index">Patiënts</a></li>
		<li><a href="http://localhost/Hospital-Framework/clients/index">Clients</a></li>
		<li><a href="http://localhost/Hospital-Framework/species/index">Species</a></li>
	</ul>

	<h2>Clients</h2>
	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th colspan="2">Action</th>
			</tr>
		</thead>
		</tbody>


<?php


foreach ($clients as $client) {
echo "<tr>";
echo "<th>" . $client['client_id'] . "</th>";
echo "<th>" . $client['client_firstname'] . "</th>";
echo "<th>" . $client['client_lastname']  . "</th>";
echo "<td class='center'>" . "<a href='" . URL . "clients/update/" . $client['client_id'] . "'>Edit</a></td>";
echo "<td class='center'>" . "<a href='" . URL . "clients/delete/" . $client['client_id'] .  "'>Delete</a></td>";
echo "</tr>";
}
?>

</table>


	
		<p><a href="http://localhost/Hospital-Framework/clients/create">Create</a></p>
		<p><a href="http://localhost/Hospital-Framework/">Home</a></p>
	