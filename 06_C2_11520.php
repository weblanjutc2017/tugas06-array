<?php
	$mahasiswa = array(
		array("cisa",11521,"c2","komsi"),
		array("dasi",11522,"c2","komsi"),
		array("bias",11520,"c2","komsi"),
		array("gusi",11524,"c2","komsi"),
		array("fisi",11523,"c2","komsi"),
		array("hasa",11525,"c2","komsi"),
		array("kusa",11527,"c2","komsi"),
		array("jasu",11526,"c2","komsi"),
		array("lisa",11528,"c2","komsi"),
		array("misi",11529,"c2","komsi"),
		array("nias",11530,"c2","komsi")
		);
	echo "<style>
	table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
	}
	td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
	}
	tr:nth-child(even) {
    background-color: #dddddd;
	}
	</style>";
		echo "<table><tr><td>Nama<td/><td>NIM<td/><td>Kelas<td/><td>prodi</td></tr>";
		for($i =0;$i<10;$i++){
			echo "<tr>";
		for($j =0;$j<4;$j++){
			echo "<td>".$mahasiswa[$i][$j]."<td/>";
		}
			echo "<tr/>";
	}
		echo"</table>";
	sort($mahasiswa);
		echo "<table><tr><td>setelah<td/><td>di<td/><td>sort<td/><td>ing</td></tr>";
		for($i =0;$i<10;$i++){
			echo "<tr>";
		for($j =0;$j<4;$j++){
			echo "<td>".$mahasiswa[$i][$j]."<td/>";
		}
			echo "<tr/>";
	}
		echo"</table>";
?>