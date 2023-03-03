<?php
// ambil data yg di input user

// manggil fungsi
require_once 'function.php';

$name = $_POST['name'];
$matkul = $_POST['matkul'];
$uts = $_POST['nilai_uts'];
$uas = $_POST['nilai_uas'];
$tugas = $_POST['nilai_tugas'];
$rata = ($uts + $uas + $tugas)/3;
$ket = kelulusan($rata);
$pred = grade($rata); 

// mencetak value

echo "Nama : $name";
echo "<br/>Mata Kuliah : $matkul";
echo "<br/>Nilai UTS : $uts";
echo "<br/>Nilai UAS : $uas";
echo "<br/>Nilai Tugas : $tugas";
echo "<br/>Keterangan : $ket";
echo "<br/>Predikat : $pred";
?>