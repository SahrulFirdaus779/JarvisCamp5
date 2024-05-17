<?php 
$products = [ 
    ["barang" => "Printer", "Harga" => 1200000, "Deskripsi" => "Printer merk HP", "Stok" => 15], 
    ["barang" => "Tablet", "Harga" => 2000000, "Deskripsi" => "Tablet merk Samsung", "Stok" => 8], 
    ["barang" => "Mouse", "Harga" => 150000, "Deskripsi" => "Mouse merk Logitech", "Stok" => 50],
    ["barang" => "Speaker", "Harga" => 500000, "Deskripsi" => "Speaker merk JBL", "Stok" => 25], 
    ["barang" => "Headset", "Harga" => 250000, "Deskripsi" => "Headset merk Sony", "Stok" => 30],
    ["barang" => "Komputer", "Harga" => 129999000, "Deskripsi" => "Komputer Baru", "Stok" => 30]
];
// hasil inputan dari form.html
$barang = isset($_POST['barang']) ? $_POST['barang'] : '';
$Harga = isset($_POST['Harga']) ? $_POST['Harga'] : '';
$Deskripsi = isset($_POST['Deskripsi']) ? $_POST['Deskripsi'] : '';
$Stok = isset($_POST['stok']) ? $_POST['stok'] : '';

// menambahkan data kedalam array
if ($barang && $Harga && $Deskripsi && $Stok) {
    $products[] = ["barang" => $barang, "Harga" => $Harga, "Deskripsi" => $Deskripsi, "Stok" => $Stok];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class = "col-md-10 offset-md-1">
        <h1 class="text-center mt-3">Daftar Produk</h1>
        <table class="table mt-5">
            <thead class="table-success">
                <tr>
                <th scope="col">Nama Barang</th>
                <th scope="col">Harga</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Stok</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $product => $value):?>
                <tr>
                    <td><?= $value['barang'] ?></td>
                    <td><?= $value['Harga'] ?></td>
                    <td><?= $value['Deskripsi'] ?></td>
                    <td><?= $value['Stok'] ?></td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>