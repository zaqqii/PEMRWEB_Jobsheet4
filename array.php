<?php
$nilaiSiswa = [85, 92, 78, 64, 90, 55, 88, 79, 70, 96];
$nilaiLulus =[];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai >= 70) {
        $nilaiLulus[] = $nilai;
    }
}

echo "Daftar nilai siswa yang lulus: ". implode(',',$nilaiLulus);
?>

<?php
$daftarKaryawan =[
    ['Alice', 7],
    ['Bob', 3],
    ['Charlie', 9],
    ['Diana', 5],
    ['Ethan', 6],
];

$karyawanPengalamanLimaTahun = [];

echo "<br>";
foreach ($daftarKaryawan as $karyawan) {
    if ($karyawan[1] > 5) {
        $karyawanPengalamanLimaTahun[] = $karyawan[0];
    }
}

echo "Daftar karyawan dengan pengalaman lebih dari 5 tahun: ". implode(", ", 
$karyawanPengalamanLimaTahun);
?>

<?php
$daftarNilai = [
    'Matematika' => [
        ['Alice', 85],
        ['Bob', 92],
        ['Charlie', 78],
    ],
    'fisika' => [
        ['Alice', 90],
        ['Bob', 88],
        ['Charlie', 75],
    ],
     'Kimia' => [
        ['Alice', 92],
        ['Bob', 80],
        ['Charlie', 85],
    ],
];

$mataKuliah = 'fisika';

echo "<br>Daftar nilai mahasiswa dalam mata kuliah " . $mataKuliah . ": <br>";

foreach ($daftarNilai[$mataKuliah] as $nilai) {
    echo "Nama: {$nilai[0]}, Nilai: {$nilai[1]} <br>";
}
?>

<?php
$daftarNilai = [
    ["Alice", 85],
    ["Bob", 92],
    ["Charlie", 78],
    ["David", 64],
    ["Eva", 90]
];

$totalNilai = 0;
foreach ($daftarNilai as $siswa) {
    $totalNilai += $siswa[1];
}

$rataRata = $totalNilai / count($daftarNilai);

echo "<br>Rata-rata nilai kelas: $rataRata<br>";
echo "Daftar siswa dengan nilai di atas rata-rata:<br>";

foreach ($daftarNilai as $siswa) {
    if ($siswa[1] > $rataRata) {
        echo "Nama: {$siswa[0]}, Nilai: {$siswa[1]}<br>";
    }
}
?>
