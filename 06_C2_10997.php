<?php  
	$mahasiswa = array(
		array("Nama"=>"Rizki", "NIM"=>"10997", "Kelas"=>"C2", "Prodi"=>"D3 Ilmu Komputer dan Sistem Informasi"),
		array("Nama"=>"Andin", "NIM"=>"10995", "Kelas"=>"A", "Prodi"=>"D3 Kearsipan"),
		array("Nama"=>"Bagas", "NIM"=>"10967", "Kelas"=>"C1", "Prodi"=>"D3 Akuntansi"),
		array("Nama"=>"Sasongko", "NIM"=>"10557", "Kelas"=>"B", "Prodi"=>"Teknik Elektro"),
		array("Nama"=>"Zudi", "NIM"=>"10157", "Kelas"=>"C1", "Prodi"=>"D3 Teknik Mesin"),
		array("Nama"=>"Shanti", "NIM"=>"10596", "Kelas"=>"A", "Prodi"=>"D4 Teknik Sipil"),
		array("Nama"=>"Cintia", "NIM"=>"10567", "Kelas"=>"B", "Prodi"=>"D3 Agroindustri"),
		array("Nama"=>"Kholif Bayu", "NIM"=>"10257", "Kelas"=>"C1", "Prodi"=>"D4 Kebidanan"),
		array("Nama"=>"Jatmiko", "NIM"=>"10526", "Kelas"=>"A", "Prodi"=>"D3 Bahasa Inggris"),
		array("Nama"=>"Maida", "NIM"=>"10529", "Kelas"=>"B", "Prodi"=>"D3 Bahasa Jepang")
		);
	$header = array ("NAMA","NIM","KELAS","PRODI");

	echo "<h1> Data Mahasiswa Sekolah Vokasi</h1>";
	echo "<br>";

	function Nama($a,$b){
		return strcasecmp($a['Nama'],$b['Nama']);
	}
	
	usort($mahasiswa,"Nama");
	
	echo "<table border=1>";
	echo "<tr bgcolor= ffb3b3>";
	for($j=0; $j<=3; $j++){
		echo "<td>";
		echo "<b>" . $header[$j] . "</b>";
		echo "</td>";
	}
	echo "</tr>";
	
	foreach($mahasiswa as $key=>$value){
		echo "<tr>";
		echo "<td>"; echo $value['Nama']; echo "</td>";
		echo "<td>"; echo $value['NIM']; echo "</td>";
		echo "<td>"; echo $value['Kelas']; echo "</td>";
		echo "<td>"; echo $value['Prodi']; echo "</td>";
		echo "</tr>";
	}
	echo "</table>";
	
	echo "<br><br><br><br><br><br>";
	echo "<h5>Dibuat oleh : <br> Nama : Rizki Maida Octaviai S. <br> NIM : 16/396813/SV/10997 <br> Kelas : C2</h5>";
	
 ?> 