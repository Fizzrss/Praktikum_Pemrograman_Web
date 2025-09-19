<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

$hasiSama = $a == $b;
$hasiTidakSama = $a != $b;
$hasiLebihKecil = $a < $b;
$hasiLebihBesar = $a > $b;
$hasiLebihKecilSama = $a <= $b;
$hasiLebihBesarSama = $a >= $b;

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

$hasilTambah1 = $a += $b;
$hasilKurang1 = $a -= $b;
$hasilKali1 = $a *= $b;
$hasilBagi1 = $a /= $b;
$hasilSisaBagi1 = $a %= $b;

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo 'Hasil Tambah = '. $hasilTambah . '<br>';
echo 'Hasil Kurang = '. $hasilKurang . '<br>';
echo 'Hasil Kali = '. $hasilKali . '<br>';
echo 'Hasil Bagi = '. $hasilBagi . '<br>';
echo 'Hasil Pangkat = '. $pangkat . '<br>';
echo "<br>";
echo 'Hasil Sama = '. $hasiSama . '<br>';
echo 'Hasil Tidak Sama = '. $hasiTidakSama . '<br>';
echo 'Hasil Lebih Kecil = '. $hasiLebihKecil . '<br>';
echo 'Hasil Lebih Besar = '. $hasiLebihBesar . '<br>';
echo 'Hasil Lebih Kecil Sama = '. $hasiLebihKecilSama . '<br>';
echo 'Hasil Lebih Besar Sama = '. $hasiLebihBesarSama . '<br>';
echo "<br>";
echo 'Hasil And = '. $hasilAnd . '<br>';
echo 'Hasil Or = '. $hasilOr . '<br>';
echo 'Hasil Not A = '. $hasilNotA . '<br>';
echo 'Hasil Not B = '. $hasilNotB . '<br>';
echo "<br>";
echo 'Hasil $a += $b = '. $hasilTambah1 . '<br>';
echo 'Hasil $a -= $b = '. $hasilKurang1 . '<br>';
echo 'Hasil $a *= $b = '. $hasilKali1 . '<br>';
echo 'Hasil $a /= $b = '. $hasilBagi1 . '<br>';
echo 'Hasil $a %= $b = '. $hasilSisaBagi1 . '<br>';
echo "<br>";
echo 'Hasil Identik = '. $hasilIdentik . '<br>';
echo 'Hasil  = '. $hasilTidakIdentik . '<br>';
echo '<br>';    

$rakBuku = 120;
$terisi = 85;
$sisa = $rakBuku - $terisi;
$persenSisa = ($sisa/$rakBuku) * 100;

echo 'Jumlah Kursi = '. $rakBuku . '<br>';
echo 'Kursi yang dipakai = '. $terisi . '<br>';
echo 'Sisa = '. $sisa . '<br>';
echo 'Sisa Kursi Kosong (%) = '. $persenSisa . "%";
?>
