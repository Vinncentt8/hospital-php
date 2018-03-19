<h1>Hospital</h1>
	<ul>
		<li><a href="http://localhost/Hospital-Framework/patients/index">Patiënts</a></li>
		<li><a href="http://localhost/Hospital-Framework/clients/index">Clients</a></li>
		<li><a href="http://localhost/Hospital-Framework/species/index">Species</a></li>
	</ul>

	<h2>Patiënts</h2>
	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Status</th>
				<th colspan="2">Action</th>
			</tr>
		</thead>
		</tbody>


<?php


foreach ($patients as $patient) {
echo "<tr>";
echo "<th>" . $patient['patient_id'] . "</th>";
echo "<th>" . $patient['patient_name']  . "</th>";
echo "<th>" . $patient['patient_status']  . "</th>";
echo "<td class='center'>" . "<a href='" . URL . "patients/update/" . $patient['patient_id'] . "'>edit</a></td>";
echo "<td class='center'>" . "<a href='" . URL . "patients/delete/". $patient['patient_id'] ."'>delete</a></td>";
echo "</tr>";
}

?>

</table>


		<p><a href="http://localhost/Hospital-Framework/patients/create">Create</a></p>
		<p><a href="http://localhost/Hospital-Framework/">Home</a></p>