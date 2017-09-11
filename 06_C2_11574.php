<?php
	
	$mhs = array(
			array(	"nim"	=> 10147,
					"nama"	=> "Sandy",
					"kelas"	=> "a",
					"prodi"	=> "elins"
				),
			array(	"nim"	=> 10771,
					"nama"	=> "Haris",
					"kelas"	=> "a",
					"prodi"	=> "elektro"
				),
			array(	"nim"	=> 10574,
					"nama"	=> "Dimas",
					"kelas"	=> "b",
					"prodi"	=> "elins"
				),
			array(	"nim"	=> 11504,
					"nama"	=> "Diki",
					"kelas"	=> "b",
					"prodi"	=> "komsi"
				),
			array(	"nim"	=> 10021,
					"nama"	=> "Sinta",
					"kelas"	=> "a",
					"prodi"	=> "kedokteran"
				),
			array(	"nim"	=> 10998,
					"nama"	=> "Jeny",
					"kelas"	=> "c",
					"prodi"	=> "komsi"
				),
			array(	"nim"	=> 10874,
					"nama"	=> "Okky",
					"kelas"	=> "a",
					"prodi"	=> "komsi"
				),
			array(	"nim"	=> 10806,
					"nama"	=> "Gugun",
					"kelas"	=> "a",
					"prodi"	=> "elektro"
				),
			array(	"nim"	=> 10232,
					"nama"	=> "Anggun",
					"kelas"	=> "a",
					"prodi"	=> "kedokteran"
				),
			array(	"nim"	=> 10667,
					"nama"	=> "Eni",
					"kelas"	=> "a",
					"prodi"	=> "komsi"
				),
			array(	"nim"	=> 10442,
					"nama"	=> "Fandy",
					"kelas"	=> "b",
					"prodi"	=> "elektro"
				)
		);
		
		
		//css untuk tabelnya
		echo "<style>
				table {
					border-collapse: collapse;
					width: 50%;
				}

				th,td {
					padding: 4px;
					text-align: left;
					border-bottom: 1px solid #ddd;
				}

				tr:hover{background-color:#b3d9ff}
				</style>";
		
		
		//output 
		echo "<b> Sebelum Disorting : <b>";
	
		echo "<table>";
		
		echo "<tr>";	
			echo "<th> NIM </th>";
			echo "<th> NAMA </th>";
			echo "<th> KELAS </th>";
			echo "<th> PRODI </th>";
		echo "</tr>";
			
		for($i=0;$i<11;$i++){
			
			echo "<tr>";
				
				echo "<td>" . $mhs[$i]["nim"] . "</td>";
				echo "<td>" . $mhs[$i]["nama"] . "</td>";
				echo "<td>" . $mhs[$i]["kelas"] . "</td>";
				echo "<td>" . $mhs[$i]["prodi"] . "</td>";
		
			echo "</tr>";
		}
		echo "</table>";
		
		
		
		//sortingannya
		
		$nama = array();
		foreach ($mhs as $key => $value){
			$nama[$key] = $value["nama"];
		}
		
		array_multisort($nama, SORT_ASC, $mhs);
		
		
		
		//output
		
		echo "<br> <b> Sesudah Disorting berdasarkan nama : </b> <br>";
	
		echo "<table>";
		
		echo "<tr>";	
			echo "<th> NIM </th>";
			echo "<th> NAMA </th>";
			echo "<th> KELAS </th>";
			echo "<th> PRODI </th>";
		echo "</tr>";
			
		for($i=0;$i<11;$i++){
			
			echo "<tr>";
				
				echo "<td>" . $mhs[$i]["nim"] . "</td>";
				echo "<td>" . $mhs[$i]["nama"] . "</td>";
				echo "<td>" . $mhs[$i]["kelas"] . "</td>";
				echo "<td>" . $mhs[$i]["prodi"] . "</td>";
		
			echo "</tr>";
		}
		echo "</table>";
?>