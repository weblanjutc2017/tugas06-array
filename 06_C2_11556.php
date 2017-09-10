<?php
$mahasiswa = array("Isaac","Aleron","Kaia","Sara","Malia","Lydia","Scott","Stiles","Derek","Ethan");
$nim = array ("11212","11637","12736","11278","11999","11877","12082","12003","15029","19880");
$kelas = array ("A","A","D","A","B","B","A","D","C","E");
$prodi = array ("Informatics Engineering","Informatics Engineering","Computer Science","Informatics Engineering","Information Systems","Information Systems","Computer Science","Informatics Engineering","Computer Science","Computer Science");
sort($mahasiswa);
$arrlength = count($mahasiswa);

echo "DATA MAHASISWA<br/><br/>";
for($i = 0; $i < $arrlength; $i++){
	echo "Nama : " . $mahasiswa[$i];
	echo "<br/>";
	echo "NIM : " . $nim[$i];
	echo "<br/>";
	echo "Kelas : " . $kelas[$i];
	echo "<br/>";
	echo "Prodi : " . $prodi[$i];
	echo "<br/>";
	echo "<br/>";
	
}
?>