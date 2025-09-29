<?php
$a = 10;
$b = 5;

echo "Variabel a: $a <br>";
echo "Variabel b: $b <br>";

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "<br>";

echo "Hasil tambah a + b = $hasilTambah <br>";
echo "Hasil kurang a - b = $hasilKurang <br>";
echo "Hasil kali a * b = $hasilKali <br>";
echo "Hasil bagi a / b = $hasilBagi <br>";
echo "Hasil sisa bagi a % b = $sisaBagi <br>";
echo "Hasil pangkat a ** b = $pangkat <br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihBesar = $a < $b;
$hasilLebihKecil = $a > $b;
$hasilLebihBesarSama = $a <= $b;
$hasilLebihKecilSama = $a >= $b;

echo "<br>";

echo "Hasil a == b: ";
echo "hasil $hasilSama <br>";
echo "Hasil a != b: ";
echo "hasil $hasilTidakSama <br>";
echo "Hasil a < b: ";
echo "hasil $hasilLebihBesar <br>";
echo "Hasil a > b: ";
echo "hasil $hasilLebihKecil <br>";
echo "Hasil a <= b: ";
echo "Hasil $hasilLebihBesarSama <br>";
echo "Hasil a >= b: ";
echo "Hasil $hasilLebihKecilSama <br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilnotB = !$b;

echo "<br> Hasil AND: " . ($hasilAnd ? 'true' : 'false') . "<br>";
echo "Hasil OR: " . ($hasilOr ? 'true' : 'false') . "<br>";
echo "Hasil NOT A: " . ($hasilNotA ? 'true' : 'false') . "<br>";
echo "Hasil NOT B: " . ($hasilnotB ? 'true' : 'false') . "<br>";

echo "<br>";

$a += 5;
echo "Setelah a += b, nilai a = {$a} <br>";
$b -= 5;
echo "Setelah b -= b, nilai b = {$b} <br>";
$a *= 5;
echo "Setelah a *= b, nilai a = {$a} <br>";
$b /= 5;
echo "Setelah b /= b, nilai b = {$b} <br>";
$a %= 5;
echo "Setelah a %= b, nilai a = {$a} <br>";

echo "<br>";

$hasilIdentik = $a === $b;
echo "<br>Apakah \$a dan \$b identik (nilai dan tipe data sama)? " . ($hasilIdentik ? 'true' : 'false') . "<br>";
$hasilTidakIdentik = $a !== $b;
echo "Apakah \$a dan \$b tidak identik (nilai atau tipe data beda)? " . ($hasilTidakIdentik ? 'true' : 'false') . "<br>";

echo "<br>";

?>



<?php
$totalKursi = 45;
$kursiTerisi = 28;

$kursiKosong = $totalKursi - $kursiTerisi;
$persenKosong = ($kursiKosong / $totalKursi) * 100;

echo "jumlah Kursi yang kosong: {$kursiKosong} <br>";
echo "Persentase kursi yang kosong:" . number_format($persenKosong, 2)." % <br>";

echo "<br>";

?>

