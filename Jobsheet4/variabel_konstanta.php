<?php
$angka1 = 10;
$angka2 = 10;
$hasil = $angka1 + $angka2;
echo "Hasil penjumlahan $angka1 + $angka2 = adalah $hasil.";
$benar=true;
$salah = false;
echo  " <br> Variabel benar: $benar, Variabel salah: $salah";
//mendifinisikan konstanta untuk nilai tetap
define("NAMA_SITUS", "WebsiteKu.com");
define("TAHUN_PENDIRIAN",2023);

echo "Selamat datang di ".NAMA_SITUS . ", situs yang didirikan pada tahun ".TAHUN_PENDIRIAN. ".";
?>
