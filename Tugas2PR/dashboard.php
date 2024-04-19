<?php
require_once 'akun.php';
$arr = Contact::select();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact App Manager</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="resource/style.css">
</head>
<body>
    <div class="w3-sidebar w3-light-grey w3-bar-block" style="width:150px">
        <h3 class="w3-bar-item">Menu</h3>
        <a href="insert.php" class="w3-bar-item w3-button">Tambah Data</a>
        <a href="index.php" class="w3-bar-item w3-button">Log out</a>
    </div>
    <div style="margin-left:150px">
    <div class="w3-container w3-blue">
        <h1>Contact App Manager</h1>
    </div>
    <div class="w3-container">
        <h2 class="judul-tabel">Data Kontak</h2>
    </div>
    <div class="tabel-data">
        <table>
        <tr>
            <th>No ID</th>
            <th>Owner</th>
            <th>No HP</th>
            <th>Email</th>
            <th>Aksi</th>
        </tr>
        <?php
            for ($i = 0; $i < count($arr['no_id']); $i++) {
        ?>
                <tr>
                    <td><?= $arr['no_id'][$i]; ?></td>
                    <td><?= $arr['owner'][$i]; ?></td>
                    <td><?= $arr['no_hp'][$i]; ?></td>
                    <td><?= $arr['email'][$i]; ?></td>
                    <td>
                        <button class="edit">Edit</button>
                        <a href="delete.php?id=<?= $arr['no_id'][$i]; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                            <button class="delete" name="delete" type="delete">Hapus</button>
                        </a>
                    </td>
                </tr>
        <?php
            }
        ?>
        </table>
    </div>
</body>
</html>