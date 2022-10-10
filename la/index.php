
<?php
// Latihan 1
// $name = "kelvin kleden";
// echo "Nama Saya ", $name;

// latihaa2
// $nilai = array(3, 2, 5, 3, 7);
// $jumlah = array_sum($nilai);
// $jumlah_data = count($nilai);
// $rataRata = $jumlah / $jumlah_data;
// echo "niai rata - rata :", $rataRata;

$ipk = $_POST["ipk"];
if ($ipk < 2.76) {

    $predikat =  "Tidak Mendapatkan Predikat";
} elseif ($ipk >= 2.76 && $ipk <= 3.00) {
    $predikat = "memuaskan";
} elseif ($ipk >= 3.00 && $ipk <= 3.50) {
    $predikat = "Sangat Memuaskan";
} else {
    $predikat = "dengan Pujian";
}

echo "IPK Anda :", $ipk, "<br>";
echo "Predikat anda :", $predikat;


?>