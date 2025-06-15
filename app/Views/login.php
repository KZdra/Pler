<?php

use Core\Flash;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        body {
            background-color: #f0f8ff;
            /* Light blue background */
        }

        .login-container {
            max-width: 400px;
            margin: auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #000080;
            /* Navy text color */
        }

        .btn-primary {
            width: 100%;
        }
    </style>
</head>

<body>
    <div class="login-container mt-5">
        <h1>Login</h1>
        <form method="POST">
            <div class="form-group">
                <input type="text" name="username" class="form-control" placeholder="Username" required>
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Password" required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
            <div class="text-center mt-3">
                <a href="<?= BASE_URL ?>auth/register">Register</a>
            </div>
        </form>
    </div>

    <script>
        <?php if (Flash::has('error')): ?>
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "<?= Flash::get('error') ?>",
            });
        <?php endif; ?>
        <?php if (Flash::has('success')): ?>
            Swal.fire({
                icon: "success",
                title: "Berhasil",
                text: "<?= Flash::get('success') ?>",
            });
        <?php endif; ?>
    </script>
</body>

</html>