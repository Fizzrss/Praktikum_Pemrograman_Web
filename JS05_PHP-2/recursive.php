<?php
function tampilkanAngka(int $jumlah, int $index = 1) {
    echo "Perulangan ke-{$index} <br>";

    //panggil diri sendiri selama $index <+ $jumlah
    if ($index < $jumlah) {
        tampilkanAngka($jumlah, $index + 1);
    }
}
tampilkanAngka(20);
?>

<?php
// for ($i=1; $i <= 25 ; $i++) { 
//     echo "Perulangan ke-{$i} <br>";
// }
?>

<?php
// function tampilkanHaloDunia() {
//     echo "Halo dunia! <br>";
//     tampilkanHaloDunia();
// }

// tampilkanHaloDunia();
?>

