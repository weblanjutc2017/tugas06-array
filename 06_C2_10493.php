<?php

$nim = array("10493", "11726", "95319", "54091", "39610", "44962", "32064", "54306", "52001", "55296");
$nama = array("Roni", "Lia", "Doni", "Udin", "Reni", "Theo", "Halim","Andi","Eki", "Nur");
$kelas = array("AA", "C2", "C1", "AB", "AA", "C2", "C1", "AB", "BB", "BB");
$prodi = array("KOMSI", "ELINS", "DTE", "TJ", "TJ", "METINS", "KOMSI", "KOMSI", "DTE", "TJ");

$arrlength = count($nim);
sort($nama);
echo "<br/>" . "Data " . $arrlength . " mahasiswa di Departemen Teknik Elektro dan Informatika " . "<br/>" . "<br/>";
	
for ($i=0; $i<=count($nim)-1; $i++)
{
	echo "Mahasiswa ".$i."<br/>";
   echo "NIM: ".$nim[$i]." "."NAMA: ".$nama[$i]." "."KELAS: ".$kelas[$i]." "."PRODI: ".$prodi[$i]."<br />"."<br/>";
}
?>