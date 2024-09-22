<?php
$harga_produk = 120000;
$batas_diskon = 100000;
$persen_diskon = 20;

if ($harga_produk > $batas_diskon) {
    $jumlah_diskon = $harga_produk * ($persen_diskon / 100);
    $harga_setelah_diskon = $harga_produk - $jumlah_diskon;
    
    echo "Harga produk: Rp " . $harga_produk . "<br>";
    echo "Diskon: " . $persen_diskon . "%<br>";
    echo "Jumlah diskon: Rp " . $jumlah_diskon . "<br>";
    echo "Harga yang harus dibayar setelah diskon: Rp " . $harga_setelah_diskon;
} else {
    echo "Harga produk: Rp " . $harga_produk . "<br>";
    echo "Tidak ada diskon yang berlaku.<br>";
    echo "Harga yang harus dibayar: Rp " . $harga_produk;
}
?>