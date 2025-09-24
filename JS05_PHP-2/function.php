<?php
//membuat fungsi
function hitungUmur($thn_lahir, $thn_sekarang){
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}
function perkenalan($nama, $salam="Assalamualaikum"){
    echo $salam.", ";
    echo "Pekenalkan, nama saya ".$nama."<br/>";

    //memanggil fungsi lain
    echo"Saya berusia ". hitungUmur(2006, 2025). " tahun<br/>";
    echo "Senang berkanalan dengan Anda<br/>";
}

//memanggil fungsi perkenalan
perkenalan("Fiza");
?>

<?php
// //membuat fungsi
// function hitungUmur($thn_lahir, $thn_sekarang){
//         $umur = $thn_sekarang - $thn_lahir;
//         return $umur;
//     }
    
//     echo"Umur saya adalah ". hitungUmur(2006, 2025) ." tahun";
?>

<?php
// function perkenalan($nama, $salam="Assalamualaikum"){
//         echo $salam.", ";
//     echo "Pekenalkan, nama saya ".$nama."<br/>";
//     echo "Senang berkenalan dengan Anda<br/>";
// }

// //memanggil fungsi yang sudah dibuat
// perkenalan("Hamdana","Hallo");

// echo "<hr>";

// $saya = "Elok";
// $ucapanSalam = "Selamat Pagi";

// //memanggil lagi tanpa mengisi parameter salam
// perkenalan($saya);
?>

<?php
// function perkenalan($nama, $salam){
//     echo $salam.", ";
//     echo "Pekenalkan, nama saya ".$nama."<br/>";
//     echo "Senang berkenalan dengan Anda<br/>";
// }

// //memanggil fungsi yang sudah dibuat
// perkenalan("Hamdana","Hallo");

// echo "<hr>";

// $saya = "Elok";
// $ucapanSalam = "Selamat Pagi";

// //memanggil lagi
// perkenalan($saya, $ucapanSalam);
?>

<?php
// function perkenalan(){
//     echo "Assalamualaikum, ";
//     echo "Pekenalkan, nama saya Fiza<br/>";
//     echo "Senang berkenalan dengan Anda<br/>";
// }

// //memanggil fungsi yang sudah dibuat
// perkenalan();
// perkenalan();
?>

