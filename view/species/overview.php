<h1>Hospital</h1>
	<ul>
		<li><a href="http://localhost/Hospital-Framework/patients/index">Patiënts</a></li>
		<li><a href="http://localhost/Hospital-Framework/clients/index">Clients</a></li>
		<li><a href="http://localhost/Hospital-Framework/species/index">Species</a></li>
	</ul>

	<h2>Species</h2>
	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>Species description</th>
				<th colspan="2">Action</th>
			</tr>
		</thead>
		</tbody>


<?php

foreach ($species as $specie) {
echo "<tr>";
echo "<th>" . $specie['species_id'] . "</th>";
echo "<th>" . $specie['species_description']  . "</th>";
echo "<td class='center'>" . "<a href='" . URL . "species/update/" . $specie['species_id'] . "'>Edit</a></td>";
echo "<td class='center'>" . "<a href='" . URL . "species/delete/". $specie['species_id'] . "'>Delete</a></td>";
echo "</tr>";
}
?>

</table>

		<p><a href="http://localhost/Hospital-Framework/species/create">Create</a></p>
		<p><a href="http://localhost/Hospital-Framework/">Home</a></p>