<?php

// $mahasiswa = [
//     [
//         "nama" => "Muhammad Fauzan",
//         "nim" => "2217020075",
//         "email" => "muhammadfauzan@gmail.com"
//     ],
//     [
//         "nama" => "Fauzan Ryderzz",
//         "nim" => "2217020075",
//         "email" => "fauzanryderz@gmail.com"
//     ]
// ];

$dbh = new PDO('mysql:host=localhost;dbname=pendaftaran_magang', 'root','');
$db = $dbh->prepare('SELECT * FROM pendaftar');
$db->execute();
$pendaftar = $db->fetchAll(PDO::FETCH_ASSOC);

header('Content-Type: application/json');
$data = json_encode($pendaftar);
echo $data;

?>