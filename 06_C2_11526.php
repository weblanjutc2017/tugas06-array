<?php
$mahasiswa = array(
	array('11526','11527','11528','11529','11530','11531','11532','11534','11535','11536'),
	array('Erlina','Cahyani','Nana','Tiara','Kusuma','Sandra','Mala','Jingga','Harley','Sari'),
	array('C2','C2','C1','C2','C1','C2','C1','C2','C2','C1'),
	array('Komsi','Komsi','Komsi','Komsi','Komsi','Komsi','Komsi','Komsi','Komsi','Komsi')
	);

sort($mahasiswa[1]);
echo "</br><center><h2>DATA MAHASISWA</h2><table style='width: 600px;text-align:center;font-size:20px;'>";
echo "<tr style='background-color:	#b75862'>
<td><b>NIM</b></td>
<td><b>NAMA</b></td>
<td><b>KELAS</b></td>
<td><b>PRODI</b></td>
</tr>";
for ($i=0; $i <count($mahasiswa[0]); $i++) { 
	if($i%2==0){
		echo "<tr style='background-color:#fba5ae;'>";
	}else{
		echo "<tr style='background-color:#fdd2d6'>";
	}
	for ($j=0; $j <count($mahasiswa); $j++) { 
		echo "<td>". $mahasiswa[$j][$i] ."</td>";
	}
	echo "</tr>";
}
echo "</table></center>";
?>