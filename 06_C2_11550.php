<?php
 	echo"<style>
 		table,td,th{
 			width=100%;
 			border-collapse: collapse;
 			border: 1px solid black;
 			padding: 8px;
			align: center;
 		}
  		th{
 			background-color: grey;
 			text-align: center;
			color : white;
 		}
		table {
    border-collapse: collapse;
    width: 100%;
	
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
 	</style>";
 	
 	$mhs = array(
   			array("Luthfi Aretha",313893,"C","KOMSI"),
   			array("Bambang Pamungkas",415276,"C","ELINS"),
   			array("Rezaldi Bahri",338129,"A","ELEKTRO"),
   			array("Hanif Syahbani",401231,"C","ELINS"),
   			array("Evan Dimas",339013,"A","TEKJAR"),
   			array("Zahroni Key",403984,"C","KOMSI"),
   			array("Yusuf Sahil",402382,"C","ELINS"),
   			array("Kevin Satria",338029,"B","ELEKTRO"),
   			array("Alif Wahyudi",401872,"B","ELEKTRO"),
   			array("Bima Sakti",401002,"C","TEKJAR"),
   			);
 	sort($mhs);
 	
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