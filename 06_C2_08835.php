<?php
	$mahasiswa = array(
		array("Hilmawan Khibatul", 8829, "C2", "KOMSI"),
		array("Abdurrahman Trimanto", 9434, "C2", "KOMSI"),
		array("Jogja Tinna", 10493, "C2", "KOMSI"),
		array("Hamdan Akbar", 11532,"C2", "KOMSI"),
		array("Bias Alamsyah", 11520,"C2", "KOMSI"),
		array("Muhammad Sugiharta", 11520, "C2", "KOMSI"),
		array("Erlina Cahyani", 11526, "C2", "KOMSI"),
		array("Aulia Kukuh", 11514, "C2", "KOMSI"),
		array("Rizki Maida", 10997, "C2", "KOMSI"),
		array("Sungkono Puji", 10511, "C2", "KOMSI"),
		array("Zaky Arifudin", 11574, "C2", "KOMSI")
		);
	sort($mahasiswa);
	echo "<style>
			table {
    			border-collapse: collapse;
    			width: 100%;
			}
			td {
    			border: 1px solid #dddddd;
    			padding: 8px;
			}
			th {
				background-color: grey;
    			border: 1px solid #dddddd;
    			text-align: center;
    			padding: 8px;
			}
		</style>";

		echo "<table>
				<tr>
					<th>Nama</th>
					<th>NIM</th>
					<th>Kelas</th>
					<th>Jurusan</th>
				</tr>";
		for($i =0;$i<10;$i++){
			echo "<tr>";
		for($j =0;$j<4;$j++){
			echo "<td>".$mahasiswa[$i][$j]."</td>";
		}
			echo "<tr/>";
	}
		echo"</table>";
?>