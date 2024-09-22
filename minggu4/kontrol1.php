<?php
$nilai = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

$jumlahNilai = 0;
foreach ($nilai as $n) {
    $jumlahNilai++;
}

$nilaiDiabaikan = [];
$jumlahDiabaikan = 0;

for ($i = 0; $i < 2; $i++) {
    $min = $nilai[0];
    $max = $nilai[0];
    $minIndex = 0;
    $maxIndex = 0;

    for ($j = 1; $j < $jumlahNilai; $j++) {
        if ($nilai[$j] < $min) {
            $min = $nilai[$j];
            $minIndex = $j;
        }
        if ($nilai[$j] > $max) {
            $max = $nilai[$j];
            $maxIndex = $j;
        }
    }

    $nilaiDiabaikan[$jumlahDiabaikan] = $min;
    $jumlahDiabaikan++;
    $nilaiDiabaikan[$jumlahDiabaikan] = $max;
    $jumlahDiabaikan++;

    $nilaiSementara = [];
    $jumlahNilaiSementara = 0;
    for ($j = 0; $j < $jumlahNilai; $j++) {
        if ($j != $minIndex && $j != $maxIndex) {
            $nilaiSementara[$jumlahNilaiSementara] = $nilai[$j];
            $jumlahNilaiSementara++;
        }
    }
    $nilai = $nilaiSementara;
    $jumlahNilai = $jumlahNilaiSementara;
}

$total = 0;
for ($i = 0; $i < $jumlahNilai; $i++) {
    $total += $nilai[$i];
}

$rataRata = $total / $jumlahNilai;

echo "Nilai yang diabaikan: ";
for ($i = 0; $i < $jumlahDiabaikan; $i++) {
    echo $nilaiDiabaikan[$i];
    if ($i < $jumlahDiabaikan - 1) {
        echo ", ";
    }
}

echo "<br>Total nilai setelah mengabaikan 2 nilai tertinggi dan 2 nilai terendah: " . $total . "<br>";
echo "Rata-rata nilai setelah penghapusan: " . $rataRata;
?>
