<?php

$umur;

if (isset($umur) && $umur >= 18) {
  echo "Anda sudah dewasa.";
} else {
  echo "Anda belum dewasa atau variabel 'umur' tidak ditemukan.";
}

echo "<br> <br>";

$data = array("nama" => "Jane", "usia" => 25);

if (isset($data["nama"])) {
    echo "Nama: " . $data["nama"];
} else {
    echo "Data 'nama' tidak ditemukan dalam array.";
}

?>