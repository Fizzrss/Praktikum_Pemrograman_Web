<?php
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai Huruf: A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai Huruf: B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai Huruf: C";
} elseif ($nilaiNumerik < 70) {
    echo "Nilai Huruf: D";
}

$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}

echo "<br>";
echo"Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer.";

$jumlahLahan = 10;
$tanamanPelLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i=1; $i <= $jumlahLahan ; $i++) { 
    $jumlahBuah += ($tanamanPelLahan * $buahPerTanaman);
}

echo "<br>";
echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah";

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
}

echo "<br>";
echo "Total skor ujian adalah: $totalSkor";

$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 79, 96];

echo "<br>";
foreach ($nilaiSiswa as $nilai) {
    if ($nilai < 60) {
        echo "Nilai: $nilai (Tidak lulus) <br>";
        continue;
    }
    echo "Nilai: $nilai (Lulus) <br>";
}

echo "<br>";

$nilai = [80, 95, 67, 72, 88, 91, 76, 84, 69, 93, 78, 85];

sort($nilai);

$total = 0;
$jumlah = 0;

for ($i=2; $i < count($nilai) - 2 ; $i++) { 
    $total += $nilai[$i];
    $jumlah++;
}

$rataRataNilai = $total / $jumlah;

echo "Total nilai setelah mengabaikan tertinggi dan terendah: $total <br>";
echo "Rata-rata nilai =  $rataRataNilai <br>";

echo "<br>";

$hargaawal = 250000;
$diskon = 0;

if ($hargaawal > 200000) {
    $diskon = 0.15 * $hargaawal;
} 

$bayar = $hargaawal - $diskon;

echo "Harga awal: Rp $hargaawal <br>";
echo "Diskon: Rp $diskon <br>";
echo "Harga yang harus dibayar: Rp $bayar <br>";
echo "<br>";

$kilometer1 = 200;

$bonusLatihan1 = ($kilometer1 > 100) ? "Ya": "Tidak";

echo "Total jarak tempuh atlet adalah: {$kilometer1} kilometer <br>";
echo "Apakah atlet mendapatkan bonus latihan? {$bonusLatihan1} <br>";

$kilometer2 = 90;

$bonusLatihan2 = ($kilometer2 > 100) ? "Ya": "Tidak";

echo "Total jarak tempuh atlet adalah: {$kilometer2} kilometer <br>";
echo "Apakah atlet mendapatkan bonus latihan? {$bonusLatihan2} <br>";
?>




