<?php
	$mahasiswa = array(	array ('Nama'=> 'Ilham Muhammad Ashar Salsabil' , 'NIM' => 11538 , 'Kelas' => 'C' , 'Prodi' => 'KOMSI'),
						array ('Nama' => 'Aditya Bagus Wicaksana' , 'NIM' => 11539 ,'Kelas' => 'B' ,'Prodi' => 'ELINS'),
						array ('Nama'=> 'Nurul Hidayah' ,'NIM' => 11540 ,'Kelas' => 'A' ,'Prodi' => 'METINS'),
						array ('Nama'=> 'Tiara Bella Oka Permata' ,'NIM' => 11541 ,'Kelas' => 'C' ,'Prodi' => 'TEKNIK ELEKTRO'), 
						array ('Nama'=> 'Alif Purwoko' ,'NIM' => 11542 ,'Kelas' => 'B' ,'Prodi' => 'TEKNOLOGI JARINGAN'),
						array ('Nama'=> 'Azza Delaftina Mumtazquila' ,'NIM' => 11543 ,'Kelas' => 'A' ,'Prodi' => 'KOMSI'),
						array ('Nama'=> 'Rafli Alwan Nugraha' ,'NIM' => 11544 ,'Kelas' => 'C' ,'Prodi' => 'ELINS'),
						array ('Nama'=> 'Wida Hanggar Astuti' ,'NIM' => 11545 ,'Kelas' => 'B' ,'Prodi' => 'METINS'),
						array ('Nama'=> 'Riska Septiyana Rahmawati' ,'NIM' => 11546 ,'Kelas' => 'A' ,'Prodi' => 'TEKNIK ELEKTRO'),
						array ('Nama'=> 'Fatih Burhanuddin Labin' ,'NIM' => 11547 ,'Kelas' => 'C' ,'Prodi' =>' TEKNOLOGI JARINGAN')
	);
	//sorting
	$Nama = array();
 		foreach ($mahasiswa as $key => $value){
 			$Nama[$key] = $value['Nama'];
 		}
 		array_multisort($Nama, SORT_ASC, $mahasiswa);
	
	//Tabel
	echo "<table>";
				echo "<tr>";
					echo "<th><center> Nama </center></th>";				
					echo "<th><center> NIM </center></th>";
					echo "<th><center> Kelas </center></th>";
					echo "<th><center> Prodi </center></th>";
				echo "</tr>";
		for($i=0;$i<10;$i++){
 			
 			echo "<tr>";
 				echo "<td>" . "<center>" . $mahasiswa[$i]['Nama'] . "</center>" . "</td>";
 				echo "<td>" . "<center>" . $mahasiswa[$i]['NIM'] . "</center>" . "</td>";
 				echo "<td>" . "<center>" . $mahasiswa[$i]['Kelas'] . "</center>" . "</td>";
 				echo "<td>" . "<center>" . $mahasiswa[$i]['Prodi'] . "</center>" . "</td>";
 		
 			echo "</tr>";
	}
	echo "</table>";
	
	echo "<style>
 				table {
 					border-collapse: collapse;
 					width:60%;
 				}
 
 				th,td {
 					padding: 5px;
 					border-bottom: 1px solid #b3d1ff;
 				}
 
 				</style>";
 			

?>