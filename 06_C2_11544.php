<?php
$mahasiswa=array(
    array("Mirna",11544,"C","KOMSI"),
    array("Afifah",19472,"B","KOMSI"),
    array("Oja",11243,"C","ELINS"),
    array("Rafika",13455,"A","METINS"),
    array("Hamdan",15357,"A","KOMSI"),
    array("Rusmin",15467,"C","METINS"),
    array("Ilham",14657,"B","ELINS"),
    array("Erlina",16547,"C","KOMSI"),
    array("Rizki",14557,"A","ELINS"),
    array("Artha",14356,"B","KOMSI"),
);
sort($mahasiswa);


for ($row = 0; $row < 10; $row++) {
  echo "<p><b>Mahasiswa $row</b></p>";
  echo "<ul>";
  for ($col = 0; $col < 4; $col++) {
    echo "<li>".$mahasiswa[$row][$col]."</li>";
  }
  echo "</ul>";
}


?>
