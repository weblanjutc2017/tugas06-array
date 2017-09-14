<?php

	/*style*/
	echo"<style>
		table,td,th{
			width = 200%;
			border: 2px solid blue;
			padding: 10px;
			}
		th{
			background-color: #00FFFF;
			text-align: center;
		}
		</style>";
		
	$mhs = array(array('Nama' => 'Galang Hadi' , 'NIM' => 179456 , 'Kelas' => 'D' , 'Prodi' => 'Kedokteran'),
				 array('Nama' => 'Nisa Sulaiman' , 'NIM' => 129800 , 'Kelas' => 'AA' , 'Prodi' => 'Geografi' ),
				 array('Nama' => 'Fathur Ridho' , 'NIM' => 173832 , 'Kelas' => 'BB' , 'Prodi' => 'Pertanian'),
				 array('Nama' => 'Kino Hendarto' , 'NIM' => 136785 , 'Kelas' => 'CC' , 'Prodi' => 'Perikanan'),
				 array('Nama' => 'Joni Himawan' , 'NIM' => 159850 , 'Kelas' => 'DD' , 'Prodi' => 'Filsafat'),
				 array('Nama' => 'Dedi Sihono' , 'NIM' => 147865 , 'Kelas' => 'C' , 'Prodi' => 'Kearsipan'),
				 array('Nama' => 'Indah Ratna' , 'NIM' => 179346 , 'Kelas' => 'A' , 'Prodi' => 'Keperawatan'),	
				 array('Nama' => 'Zihan Sujana' , 'NIM' => 168450 , 'Kelas' => 'A2' , 'Prodi' => 'Elektro'),
				 array('Nama' => 'Lili Wicaksono' , 'NIM' => 129865 , 'Kelas' => 'B1' , 'Prodi' => 'Arsitektur'),
				 array('Nama' => 'Heri Ramadhan' , 'NIM' => 168456 , 'Kelas' => 'C2' , 'Prodi' => 'Elins'),


				);
	
	$nama = array();
			foreach ($mhs as $key => $nilai) {
				$Nama[$key]  = $nilai['Nama'];
	}

	array_multisort($Nama, SORT_ASC, $mhs);
	
	/*Tabel*/
	echo "<table>";
				echo "<tr>";
					echo "<th><left> Nama </left></th>";				
					echo "<th><left> NIM </left></th>";
					echo "<th><left> Kelas </left></th>";
					echo "<th><left> Prodi </left></th>";
				echo "</tr>";
				
	for($i=0;$i<10;$i++){
	
		echo "<tr>";
				echo "<td>" . "<left>" . $mhs[$i]['Nama'] . "</left>" . "</td>";
			echo "<td>" . "<left>" . $mhs[$i]['NIM'] . "</left>" . "</td>";
			echo "<td>" . "<center>" . $mhs[$i]['Kelas'] . "</center>" . "</td>";
			echo "<td>" . "<left>" . $mhs[$i]['Prodi'] . "</left>" . "</td>";
	
		echo "</tr>";
	}
	echo "</table>";
	

	
?>				