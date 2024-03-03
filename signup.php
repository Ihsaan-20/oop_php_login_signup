<?php session_start(); ?>
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-sm navbar-dark bg-primary">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation"></button>
        </nav>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <!-- signup card -->
                <div class="col-lg-8 mx-auto">
                    <div class="card mt-3">
                        <div class="card-header">
                            <h3>Sign Up</h3>
                        </div>
                        <div class="card-body">
                            <form action="includes/signup.inc.php" method="POST" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="">Username</label>
                                    <input type="text" name="user_name" class="form-control" placeholder="username...">
                                </div>
                                <div class="mb-3">
                                    <label for="">Email</label>
                                    <input type="text" name="user_email" class="form-control" placeholder="username...">
                                </div>
                                <div class="mb-3">
                                    <label for="">Password</label>
                                    <input type="password" name="user_pw" class="form-control" placeholder="password...">
                                </div>
                                <div class="mb-3">
                                    <label for="">Password confirmation</label>
                                    <input type="password" name="user_pw_confirm" class="form-control" placeholder="password confirmation...">
                                </div>

                                <div class="mb-3">
                                    <button type="submit" name="signup" class="btn btn-success px-5">Sign up</button>
                                    <a href="index.php" class="btn btn-secondary">Go back</a>

                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>