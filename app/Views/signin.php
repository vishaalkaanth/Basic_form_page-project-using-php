<!doctype html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-md-center">
            <div class="col-5">

                <?php if (session()->getFlashdata('msg')) { ?>
                    <div class="alert alert-warning">
                        <?= session()->getFlashdata('msg') ?>
                    </div>
                <?php } ?>
                <div class="container w-15 p-4 my-5 border bg-dark">
                    <center>
                        <h2 class="text-white">Login</h2>
                    </center><br>
                    <form action="<?php echo base_url(); ?>/SigninController/loginAuth" method="post">
                        <div class="form-group mb-3">
                            <input type="email" name="email" placeholder="Email" value="<?= set_value('email') ?>" class="form-control">
                        </div><br>
                        <div class="form-group mb-3">
                            <input type="password" name="password" placeholder="Password" class="form-control">
                        </div><br>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-success">Signin</button>
                        </div>

                    </form>
                </div>
                <center>
                    <p>or</p>

                    <div class="d-grid">
                        <a href="http://localhost:8080/index.php/signup"><button type="submit" class="btn btn-success">Register</button></a>
                    </div>
                </center>
            </div>

        </div>
    </div>
</body>

</html>