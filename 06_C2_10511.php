<?php
	echo"<style>
		table,td,th{
			width=100%;
			border-collapse: collapse;
			border: 1px solid black;
			padding: 8px;
		}
 		th{
			background-color: grey;
			text-align: center;
		}
	</style>";
	
	$mhs = array(
  			array("Alif Agisa",12345,"A","KOMSI"),
  			array("Luthfi Syafari",23456,"A","KOMSI"),
  			array("Raden Fega",34567,"A","KOMSI"),
  			array("Fadhil Rabbani",45678,"B","METINS"),
  			array("Sungkono Prasetyo",56789,"B","METINS"),
  			array("Alvin Iqbal",13579,"B","ELINS"),
  			array("Wibowo",24689,"C","ELINS"),
  			array("Naufal Ravicena",98765,"C","METINS"),
  			array("Aliev Kamal",87654,"C","KOMSI"),
  			array("Bimma Bagaskara",76543,"C","ELINS"),
  			array("Apif Ramadhani",65432,"C","METINS")
  			);
	sort($mhs);
	echo "DAFTAR MAHASISWA YANG MENDAPATKAN STUDENT EXCHANGE KE JEPANG :\n";
	
	echo "<table>
		<tr>
		<th>NAMA</th>
		<th>NIM</th>
		<th>KELAS</th>
		<th>PRODI</th>
		</tr>";
	
	for($baris = 0; $baris < 10; $baris++){
		echo "<tr>";
		for($kolom = 0; $kolom < 4; $kolom++){
			echo "<td>" . $mhs[$baris][$kolom] . "</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
?>