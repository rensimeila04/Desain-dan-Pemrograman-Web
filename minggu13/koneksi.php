<?php
$host = "DESKTOP-01VBN74";

$connInfo = array("Database" => "prakwebdb", "UID" => "", "PWD" => "");

$koneksi = sqlsrv_connect($host, $connInfo);

if ($koneksi) {
    echo "Koneksi berhasil.<br />";
} else {
    die(print_r(sqlsrv_errors(), true));
}
