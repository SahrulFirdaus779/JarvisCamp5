<?php 
// function menampilkan angka ganjil

function Ganjil($angkaPertama,$angkaTerakhir){
    echo "Angka Ganjil dari $angkaPertama dan $angkaTerakhir adalah ";
    for ($angkaPertama;$angkaPertama<$angkaTerakhir ; $angkaPertama++) { 
        if ($angkaPertama%2 != 0) {
            echo $angkaPertama.',';
        }
    }
}
Ganjil(1,10);
echo "</br>";

// function menampilkan angka genap
function Genap($angkaPertama,$angkaTerakhir){
    echo "Angka Genap dari $angkaPertama dan $angkaTerakhir adalah ";
    for ($angkaPertama;$angkaPertama<$angkaTerakhir ; $angkaPertama++) { 
        if ($angkaPertama%2 == 0) {
            echo $angkaPertama.',';
        }
    }
}
Genap(1,10);
echo "</br>";
//function (tambah,kali,bagi,kurang)
function hitungAritmatika($angkaPertama,$angkaKedua){
    echo "Membuat oprasi Aritmatika ( +(Penjumlahan), -(Pengurangan), X(Perkalian), :(Pembagian)<br>";
    echo "Hasil dari $angkaPertama + $angkaKedua = " . ($angkaPertama + $angkaKedua);
    echo "</br>";
    echo "Hasil dari $angkaPertama - $angkaKedua = " . ($angkaPertama - $angkaKedua);
    echo "</br>";
    echo "Hasil dari $angkaPertama : $angkaKedua = " . ($angkaPertama / $angkaKedua);
    echo "</br>";
    echo "Hasil dari $angkaPertama X $angkaKedua = " . ($angkaPertama * $angkaKedua);
}
hitungAritmatika(100,50);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Operasi Aritmatika</title>
</head>
<body>
    <h2>Masukkan Angka</h2>
    <form method="post">
        Angka Pertama: <br><input type="number" name="angkaPertama" required><br>
        Angka Kedua: <br><input type="number" name="angkaKedua" required><br>
        <br><input type="submit" name="submit" value="Hitung">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $angkaPertama = $_POST['angkaPertama'];
        $angkaKedua = $_POST['angkaKedua'];

        if (is_numeric($angkaPertama) && is_numeric($angkaKedua)) {
            echo "Membuat operasi Aritmatika Penjumlahan, Pengurangan, Pembagian, dan Perkalian diatas sebagai berikut: <br>";
            echo "Hasil dari $angkaPertama + $angkaKedua = " . ($angkaPertama + $angkaKedua);
            echo "</br>";
            echo "Hasil dari $angkaPertama - $angkaKedua = " . ($angkaPertama - $angkaKedua);
            echo "</br>";
            echo "Hasil dari $angkaPertama : $angkaKedua = " . ($angkaPertama / $angkaKedua);
            echo "</br>";
            echo "Hasil dari $angkaPertama X $angkaKedua = " . ($angkaPertama * $angkaKedua);
        } else {
            echo "Harap masukkan angka yang valid.";
        }
    }
    ?>
</body>
</html>
