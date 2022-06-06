<?php
require_once 'koneksi.php';

$isbn = $_POST['isbn'];

/***@var $connection PDO */

try {
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "Delete FROM buku WHERE `isbn`= '$isbn'";

    $connection->exec($sql);
    echo "Item dihapus";
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$connection = null;