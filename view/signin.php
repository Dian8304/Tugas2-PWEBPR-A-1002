<?php include 'view/master.php'; ?>

<?php ob_start();?>

<?php $body = ob_get_clean(); ?>

<style>
    .btn{
        width: 100%;
    }
</style>

<section class="bg-light py-3 py-md-5">
    <div class="container">
        <div class="row justify-content-center">
        <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4">
            <div class="card border border-light-subtle rounded-3 shadow-sm">
            <div class="card-body p-3 p-md-4 p-xl-5">
                <div class="text-center mb-3">
                <h1>Contact App Manager</h1>
                </div>
                <h2 class="fs-6 fw-normal text-center text-secondary mb-4">Please make a new account</h2>
                <form action="#!">
                <div class="row gy-2 overflow-hidden">
                    <div class="col-12">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="nama_user" id="nama_user" placeholder="Username" required>
                            <label for="nama_user" class="form-label">Username</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" name="pass" id="pass" placeholder="Password" required>
                            <label for="pass" class="form-label">Password</label>
                        </div>
                    </div>
                    <div class="col-12">
                    <div class="d-flex gap-2 justify-content-between">
                    </div>
                    </div>
                    <div class="col-12">
                        <div class="d-grid my-3">
                            <button class="btn btn-primary btn-lg" type="submit">Sign In</button>
                        </div> 
                    </div>
                    <div class="col-12">
                    <p class="m-0 text-secondary text-center">Already have an account? <a href="<?= urlpath('login') ?>" class="link-primary text-decoration-none">Log in</a></p>
                    </div>
                </div>
                </form>
            </div>
            </div>
        </div>
        </div>
    </div>
</section>
