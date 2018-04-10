<h1>Hospital</h1>
	<ul>
		<li><a href="http://localhost/Hospital-Framework/patients/index">Patiënts</a></li>
		<li><a href="http://localhost/Hospital-Framework/clients/index">Clients</a></li>
		<li><a href="http://localhost/Hospital-Framework/species/index">Species</a></li>
	</ul>

	<h2>Patiënts</h2>
	<table class="tablesorter">
		<thead>
			<tr>
				<th>Name</th>
				<th>Gender</th>
				<th>Status</th>
				<th colspan="2">Action</th>
			</tr>
		</thead>
		<tbody>



<?php


foreach ($patients as $patient) {
echo "<tr>";
echo "<td>" . $patient['patient_name'] . "</td>";
echo "<td>" . $patient['gender'] . "</td>";
echo "<td>" . $patient['patient_status']  . "</td>";

echo "<td class='center'>" . "<a href='" . URL . "patients/update/" . $patient['patient_id'] . "'>Edit</a></td>";
echo "<td class='center'>" . "<a href='" . URL . "patients/delete/". $patient['patient_id'] ."'>Delete</a></td>";
echo "</tr>";
}

?>

</tbody>
</table>

		<p><a href="http://localhost/Hospital-Framework/patients/create">Create</a></p>
		<p><a href="http://localhost/Hospital-Framework/">Home</a></p>