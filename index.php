<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body,
        html {
            height: 100%;
        }

        .bg {
            background-image: url('https://source.unsplash.com/1600x900/?nature,water');
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .login-form {
            max-width: 600px;
            /* Lebar maksimum diperbesar */
            width: 100%;
            /* Memastikan form memenuhi lebar maksimum */
            margin: auto;
            padding: 40px;
            /* Padding diperbesar */
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>

    <div class="bg d-flex align-items-center justify-content-center">
        <div class="login-form">
            <h2 class="text-center">Selamat Datang Halaman Login</h2>
            <hr>
            <form action="auth.php" method="post">
                <div class="form-floating mb-3">
                    <input class="form-control" type="text" name="username" placeholder="Username" autofocus autocomplete="off" required>
                </div>
                <div class="form-floating mb-3">
                    <input class="form-control" type="password" name="password" placeholder="Password" required>
                </div>
                <div class="form-group btn-container">
                    <button class="btn btn-primary btn-block" name="login">Login <i class="fa fa-sign-in fa-lg"></i></button><br>
                    <p style="font-size:10pt">Copyright 2024 - HARIS ASBARI</p>
                </div>
            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>