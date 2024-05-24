<?php include 'view/master.php'; ?>

<?php ob_start();?>

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

<?php $body = ob_get_clean(); ?>

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
            <a href="dashboard">
                <button class="btn btn-primary btn-lg" type="submit" name="submit" style="background-color: red; border-color: red">Batal</button>
            </a>
        </div>
    </div>
</section>
