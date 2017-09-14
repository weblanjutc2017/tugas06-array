<head>
	<style>
	table {
		border-collapse: collapse;
		width: 100%;
	}
	th, td {
		text-align: left;
		padding: 8px;
	}

	th {
			background-color: #4256f4;
			color : #fff;
	}

	table, td, th {
		border: 1px solid black;
	}
	</style>
</head>
<body>
	<?php
		$mahasiswa = array(
			array("Hamdan Akbar",10283,"C","KOMSI"),
			array("Fath Akbar",10292,"A","ELINS"),
			array("Muhammad Sugiharta",10191,"C","KOMSI"),
			array("Aulia Hafisa",10119,"B","METINS"),
			array("Sungkono Prasetyo",10122,"C","KOMSI"),
			array("Agyl Pradipta",13221,"A","TEKJAR"),
			array("Gama Sukaca",12100,"B","ELINS"),
			array("Bias Alamsyah",10322,"C","KOMSI"),
			array("Nanda Septyaningrum",11011,"A","KOMSI"),
			array("Siti Maimunah",11422,"B","ELINS"),
			array("Falakhudin",101912,"C","ELEKTRO")
			);
			
		echo "<h1>Daftar Mahasiswa Peraih IPK Tertinggi Departemen Teknik Elektro dan Informatika UGM Tahun 2017</h1></br>";
		sort($mahasiswa);
			echo "<table>
					<tr>
						<th>Nama</th>
						<th>NIM<t/th>
						<th>Kelas</th>
						<th>Prodi</th>
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
</body>