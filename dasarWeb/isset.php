<?php
$umur;
if (isset($umur) && $umur >= 18) {
    echo "Anda sudah dewasa";
} else {
    echo "Anda belum dewasa atau variabel 'umur' tidak ditemukan";
}

echo "<br>";
$data = array("nama" => "Fiza", "usia" => 19);
if (isset($data['nama'])) {
    echo "Nama: " . $data['nama'];
} else {
    echo "Variabel 'nama' tidak ditemukan dalam array";
}
?>

