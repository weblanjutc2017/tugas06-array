<?php
$mahasiswa=array("lannister","stark","tully","greyjoy","baratheon","targaryen","tyrell","arryn","martell","mormont");
$nim=array("10897","12546","11324","16578","14223","16723","15546","18778","14276","11401");
$kelas=array("B1","C","A","C","B2","B2","C","B1","A", "A");
$prodi=array("elins","elins","komsi","metins","keswan","keswan","rekmed","komsi","sastra inggris","rekmed");
sort($mahasiswa);
$arrlength=count($mahasiswa);

echo "daftar mahasiswa : </br>";
for($i=0;$i<$arrlength;$i++){
	echo "</br>";
	echo "nama: " . $mahasiswa[$i];
	echo "</br>";
	echo "nim: " . $nim[$i];
	echo "</br>";
	echo "kelas: ". $kelas[$i];
	echo "</br>";
	echo "prodi:" . $prodi[$i];
	echo "</br>";
	echo "------------------------------";
}
?>