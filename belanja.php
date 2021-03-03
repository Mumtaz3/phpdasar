<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belanja</title>
</head>
<body>
    <form action="belanja.php" method="post">
        <label for="">Customer</label>
        <input type="text" name="customer" value="">
        <br>
        
        <label for="">Nama Barang</label>
        <label for="">TV</label>
        <input type="radio" name="nama_barang" value="TV">
        <label for="">Kulkas</label>
        <input type="radio" name="nama_barang" value="Kulkas">
        <label for="">Mesin Cuci</label>
        <input type="radio" name="nama_barang" value="Mesin Cuci">
        <br>
        <label for="" name="jumlah_beli">Jumlah barang beli</label>
        <input type="text" name="jumlah_beli">
        <br>
        <input type="submit" name="simpan">
    </form>


    <?php
        $customer = $_POST['customer'];
        $nama_barang = $_POST['nama_barang'];
        $jumlah_beli = $_POST['jumlah_beli'];
        $simpan = $_POST['simpan'];
      
        echo $customer;
        echo $nama_barang;
        echo $jumlah_beli;

    ?>

    <p>Nama customer : <?= $customer?></p>
    
    <p>Nama barang : <?= $nama_barang?></p>
    <p>Jumlah beli : <?= $jumlah_beli?></p>

</body>
</html>