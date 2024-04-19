<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome</title>
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
                <h1>Welcome</h1>
                </div>
                <h2 class="fs-6 fw-normal text-center text-secondary mb-4">Sign up your account</h2>
                <form action="#!">
                <div class="row gy-2 overflow-hidden">
                    <div class="col-12">
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com" required>
                        <label for="email" class="form-label">Email</label>
                    </div>
                    </div>
                    <div class="col-12">
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" name="password" id="password" value="" placeholder="Password" required>
                        <label for="password" class="form-label">Password</label>
                    </div>
                    </div>
                    <div class="col-12">
                    <div class="d-flex gap-2 justify-content-between">
                    </div>
                    </div>
                    <div class="col-12">
                    <div class="d-grid my-3">
                        <a href="dashboard.php">
                            <button class="btn btn-primary btn-lg" type="button">Sign up</button>
                        </a>
                    </div> 
                    </div>
                    <div class="col-12">
                    <p class="m-0 text-secondary text-center">Already have an account? <a href="index.php" class="link-primary text-decoration-none">Log in</a></p>
                    </div>
                </div>
                </form>
            </div>
            </div>
        </div>
        </div>
    </div>
</section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>