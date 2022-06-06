<?php
include_once 'koneksi.php';

/***@var $connection PDO */
//query
$statement = $connection -> query("select * from buku");
//hasil query
$statement -> setFetchMode(PDO::FETCH_ASSOC);
//eksekusi query
$result = $statement -> fetchAll();
//manipulasi
$data = [];
foreach ($result as $result) {
    $data[] = [
        'isbn' => $result['isbn'],
        'judul' => $result['judul'],
        'pengarang' => $result['pengarang'],
        'jumlah' => $result['jumlah'],
        'abstrak' => $result['abstrak'],
        'tanggal' => $result ['tanggal']

    ];
};
//output
header('Content-Type: application/json');
echo json_encode($data);

