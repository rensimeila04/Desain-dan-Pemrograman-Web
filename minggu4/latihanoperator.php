<?php

$total_kursi = 45;
$kursi_terisi = 28;

$kursi_kosong = $total_kursi - $kursi_terisi;

$persentase_kosong = ($kursi_kosong / $total_kursi) * 100;

echo "Jumlah kursi kosong: $kursi_kosong <br>";
echo "Persentase kursi kosong: $persentase_kosong% <br>";
?>
