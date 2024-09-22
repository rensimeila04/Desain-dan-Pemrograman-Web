<?php
$siswa = [
    ["Alice", 85],
    ["Bob", 92],
    ["Charlie", 78],
    ["David", 64],
    ["Eva", 90]
];

$jumlahSiswa = 0;
foreach ($siswa as $dataSiswa) {
    $jumlahSiswa++;
}

$totalNilai = 0;
foreach ($siswa as $dataSiswa) {
    $totalNilai += $dataSiswa[1];
}
$rataRata = $totalNilai / $jumlahSiswa;

echo "Rata-rata kelas: " . $rataRata . "<br><br>";

echo "Daftar siswa dengan nilai di atas rata-rata:<br>";
foreach ($siswa as $dataSiswa) {
    if ($dataSiswa[1] > $rataRata) {
        echo $dataSiswa[0] . " - " . $dataSiswa[1] . "<br>";
    }
}
?>
