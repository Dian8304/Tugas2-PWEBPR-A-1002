<?php
require_once 'akun.php';
if(isset($_POST['submit'])) {
    $no_id = $_POST['no_id'];
    $owner = $_POST['owner'];
    $no_hp = $_POST['no_hp'];
    $email = $_POST['email'];
    Contact::insert($no_id, $owner, $no_hp, $email);

    $result = $stmt->affected_rows > 0 ? true : false;
    if($result == true) {
        echo "<script>
            alert('Data gagal ditambahkan!');
            document.location.href = 'dashboard.php';
        </script>";
    } else {
        echo "<script>
            alert('Data berhasil ditambahkan!');
            document.location.href = 'dashboard.php';
        </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact App Manager</title>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/resource/style.css">
</head>
<body>
<section class="bg-light py-3 py-md-5">
    <div class="container">
        <div class="row justify-content-center">
        <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4">
            <div class="card border border-light-subtle rounded-3 shadow-sm">
            <div class="card-body p-3 p-md-4 p-xl-5">
                <div class="text-center mb-3">
                <h1>Tambah Data Kontak</h1>
                </div>
                <h2 class="fs-6 fw-normal text-center text-secondary mb-4">Silakan tambah data kontak</h2>
                <form action="" method="post">
                <div class="row gy-2 overflow-hidden">
                    <div class="col-12">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="no_id" id="no_id" required>
                        <label for="no_id" class="form-label">No ID</label>
                    </div>
                    </div>
                    <div class="col-12">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="owner" id="owner" required>
                        <label for="owner" class="form-label">Owner</label>
                    </div>
                    </div>
                    <div class="col-12">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="no_hp" id="no_hp" required>
                        <label for="no_hp" class="form-label">No HP</label>
                    </div>
                    </div>
                    <div class="col-12">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="email" id="email" required>
                        <label for="email" class="form-label">Email</label>
                    </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="d-grid my-3">
                        <a href="dashboard.php">
                            <button class="btn btn-primary btn-lg" type="submit" name="submit">Tambah Data</button>
                        </a>
                    </div>
                </div>
                </form>
            </div>
            </div>
        </div>
        </div>
    </div>
    <div class="col-12">
        <div class="d-grid my-3">
            <a href="dashboard.php">
                <button class="btn btn-primary btn-lg" type="submit" name="submit" style="background-color: red; border-color: red">Batal</button>
            </a>
        </div>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>