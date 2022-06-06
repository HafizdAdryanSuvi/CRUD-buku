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
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "UPDATE buku SET judul = '$judul', pengarang = '$pengarang',jumlah = '$jumlah', tanggal = '$tanggal', abstrak = '$abstrak' WHERE `isbn`= '$isbn'";

    $connection->exec($sql);
    echo "Item diubah";
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$connection = null;