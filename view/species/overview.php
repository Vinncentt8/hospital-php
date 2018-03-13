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


foreach ($species as $specie) {
echo "<tr>";
echo "<th>" . $specie['species_description']  . "</th>";
echo "</tr>";
}
?>