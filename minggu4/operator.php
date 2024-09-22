<?php

$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Hasil penjumlahan {$a} + {$b} = {$hasilTambah} <br>";
echo "Hasil pengurangan {$a} - {$b} = {$hasilKurang} <br>";
echo "Hasil perkalian {$a} * {$b} = {$hasilKali} <br>";
echo "Hasil pembagian {$a} / {$b} = {$hasilBagi} <br>";
echo "Hasil sisa pembagian {$a} % {$b} = {$sisaBagi} <br>";
echo "Hasil pangkat {$a} ** {$b} = {$pangkat} <br>";

echo "<br> <br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "<h2>Hasil Perbandingan</h2>";
echo "<p>a = $a, b = $b</p>";
echo "<p>a == b : " . ($hasilSama ? 'Benar' : 'Salah') . "</p>";
echo "<p>a != b : " . ($hasilTidakSama ? 'Benar' : 'Salah') . "</p>";
echo "<p>a < b : " . ($hasilLebihKecil ? 'Benar' : 'Salah') . "</p>";
echo "<p>a > b : " . ($hasilLebihBesar ? 'Benar' : 'Salah') . "</p>";
echo "<p>a <= b : " . ($hasilLebihKecilSama ? 'Benar' : 'Salah') . "</p>";
echo "<p>a >= b : " . ($hasilLebihBesarSama ? 'Benar' : 'Salah') . "</p>";

echo "<br> <br>";
$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "Hasil Operasi Logika: <br>";
echo "Hasil AND : $hasilAnd <br>";
echo "Hasil OR : $hasilOr <br>";
echo "Hasil NOT A : $hasilNotA <br>";
echo "Hasil NOT B : $hasilNotB <br>";

echo "<br> <br>";
$a += $b;
echo "Hasil a += b adalah $a <br>";
$a -= $b;
echo "Hasil a -= b adalah $a <br>";
$a *= $b;
echo "Hasil a *= b adalah $a <br>";
$a /= $b;
echo "Hasil a /= b adalah $a <br>"; 
$a %= $b;
echo "Hasil a %= b adalah $a <br>";

echo "<br> <br>";
$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "Hasil Identik a === b: $hasilIdentik <br>";
echo "Hasil Tidak Identik a !== b: $hasilTidakIdentik <br>";
?>