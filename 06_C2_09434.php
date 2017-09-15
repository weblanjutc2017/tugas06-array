<head>
	<style>
		body {
			margin: 0;
			padding: 0;
			font-family: sans-serif, "tahoma";
		}
		table {
			border-collapse: collapse;
			width: 100%;
		}
		
		th {
			height: 50px;
			text-align: center;
			background-color: #4CAF50;
			color: white;
		}
		
		td {
			height: 40px;
			vertical-align: bottom;
		}
		
		th, td {
			padding: 10px;
			text-align: left;
			border-bottom: 1px solid #ddd;
		}
		
		tr:nth-child(even) {background-color: #f2f2f2}
		
		#container {
			width: 700px;
			margin: 30px auto;
		}
		
		h1 {
			text-align: center
		}
	</style>
</head>
<body>
	<?php
		$mahasiswa = array(
			array(
				"nim" => "8444",
				"nama" => "HILMAWAN KHIBATUL",
				"kelas" => "C2",
				"prodi" => "KOMSI"
			),array(
				"nim" => "6422",
				"nama" => "ABDURRAHMAN TRIMANTO",
				"kelas" => "C2",
				"prodi" => "KOMSI"
			),array(
				"nim" => "9653",
				"nama" => "JOGJA TINNA A",
				"kelas" => "C2",
				"prodi" => "KOMSI"
			),array(
				"nim" => "2134",
				"nama" => "SUNGKONO PUJI P",
				"kelas" => "C2",
				"prodi" => "KOMSI"
			),array(
				"nim" => "9876",
				"nama" => "RIZKI MAIDA",
				"kelas" => "C2",
				"prodi" => "KOMSI"
			),array(
				"nim" => "4233",
				"nama" => "AULIA KUKUH SAPUTRA",
				"kelas" => "C2",
				"prodi" => "KOMSI"
			),array(
				"nim" => "1297",
				"nama" => "BIAS ALAMSYAH",
				"kelas" => "C2",
				"prodi" => "KOMSI"
			),array(
				"nim" => "8765",
				"nama" => "ERLINA CAHYANI",
				"kelas" => "C2",
				"prodi" => "KOMSI"
			),array(
				"nim" => "6922",
				"nama" => "HAMDAN AKBAR",
				"kelas" => "C2",
				"prodi" => "KOMSI"
			),array(
				"nim" => "3988",
				"nama" => "ACHIS RIZAL MZR",
				"kelas" => "C2",
				"prodi" => "KOMSI"
			)
		);
		
		// var_dump($mahasiswa);
		
		// sorting by key
		$arr = array();
		foreach ($mahasiswa as $items) {
			foreach ($items as $key => $val) {
				if(!isset($arr[$key])) {
					$arr[$key] = array();
				}
				$arr[$key][] = $val;
			}
		}
		
		$orderby = "nama"; // tinggal diganti sesuai key yang ingin disorting
		
		array_multisort($arr[$orderby], SORT_ASC, $mahasiswa);
	?>
	<div id="container">
	<h1>10 DAFTAR MAHASISWA BERPRESTASI</h1>
		<table>
			<tr>
				<th>No</th>
				<th>NIM</th>
				<th>Nama</th>
				<th>Kelas</th>
				<th>Prodi</th>
			</tr>
			<?php
				//perulangan untuk setiap baris - vertical
				foreach ($mahasiswa as $items) {
					static $i = 1;
					echo "<tr>";
					echo "<td>" . $i . "</td>"; 
					
					// perulangan untuk setiap kolow - horizontal
					// cetak : 8444 HILMAWAN KHIBATUL C2 KOMSI
					foreach ($items as $key => $val) {
						echo "<td>" . $val . "</td>";
					}
					
					$i++;
					echo "</tr>";
			}
			// var_dump($mahasiswa);
			?>
		</table>
	</div>
</body>