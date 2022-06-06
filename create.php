<?php
require_once 'koneksi.php';

$isbn = $_POST['isbn'];
$judul = $_POST['judul'];
$pengarang = $_POST['pengarang'];
$jumlah = $_POST['jumlah'];
$tanggal = $_POST['tanggal'];
$abstrak = $_POST['abstrak'];

/***@var $connection PDO */

try {
    $connection -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO buku (`isbn`,`judul`,`pengarang`,`jumlah`,`tanggal`,`abstrak`) VALUES ('$isbn','$judul','$pengarang','$jumlah','$tanggal','$abstrak')";

    $connection -> exec($sql);
    echo "Item dibuat";
} catch (PDOException $e) {
    echo $sql."<br>".$e->getMessage();
}

$connection = null;





