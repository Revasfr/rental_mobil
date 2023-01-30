<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        
    <!-- Bootstrap Icons -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <title>Hello, world!</title>
</head>
<body style="background-color: #13005A;">
<!-- Registrasi -->
<div class="container mt-5">
    <div class="row">
        <div class="col-6">
            <img src="gambar/login.png" class="mt-4" alt="" width="450">
        </div>
        <div class="col-6">
            <h1 class="h3 mb-3 fw-normal text-center text-white">Registration Form</h1><hr class="text-white">
                <div class="card">
                        <div class="card-body">
                          <main class="form-registration">
                            <form action="/register" method="post">
                                <div class="form-floating">
                                    <input type="name" name="name" class="form-control" id="name" placeholder="Name">
                                    <label for="name">Name</label>
                                </div>
                                <div class="form-floating mt-2">
                                    <input type="name" name="username" class="form-control" id="username" placeholder="Username">
                                    <label for="username">Username</label>
                                </div>
                                <div class="form-floating mt-2">
                                    <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
                                    <label for="email">Email address</label>
                                </div>
                                <div class="form-floating mt-2">
                                    <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                                    <label for="Password">Password</label>
                                </div>
                                <div class="container mt-3 text-center">
                                    <button class=" btn btn-lg btn-primary" type="submit">Register</button>
                                    <button class=" btn btn-lg btn-danger" type="submit">Batal</button>
                            </form>
                                <small class="d-block text-center mt-2" >Allready registered? <a href="/login">Login</a></small>
                        </main>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>
