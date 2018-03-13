<h1>Hospital</h1>
	<ul>
		<li><a href="patients/index">Patiënts</a></li>
		<li><a href="clients/index">Clients</a></li>
		<li><a href="species/index">Species</a></li>
	</ul>

	<h2>Clients</h2>
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
echo "</tr>";
}
?>