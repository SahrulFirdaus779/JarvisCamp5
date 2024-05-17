<?php
$array = [1,2,3,4,5];

echo $array[1];
echo "<br><pre>";
print_r($array);
echo "</pre>";

$umur = ["sahrul" => 17, "Firdaus" => 19];
$umur['Zayyan'] = 19;
$umur['Zoyya'] = 20;
echo "<br><pre>";
print_r($umur);
echo "</pre>";

foreach ($umur as $key => $value) {
    echo "Namanya: $key <br> Umurnya: $value <br>";
}

// array multidimensi 
$buahBuahan = [
    ["nama" => "Apel", "warna" => "Merah"],
    ["nama" => "Mangga", "warna" => "Hijau"],
    ["nama" => "Pisang", "warna" => "Kuning"],
    ["nama" => "Durian", "warna" => "Kuning"],
];

echo "<br><pre>";
// print_r($buahBuahan);
echo "</pre>";

?>
<table border="5">
    <tr>
        <th>Nama</th>
        <th>Warna</th>
    </tr>
    <?php foreach ($buahBuahan as $buah) { ?>
        <tr>
            <td><?php echo $buah['nama'] ?></td>
            <td><?= $buah['warna'] ?> </td>
        </tr>
    <?php } ?>
</table>