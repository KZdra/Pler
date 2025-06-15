<?php

use Core\Flash;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        body {
            background-color: #f0f8ff;
            /* Light blue background */
        }

        .register-container {
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

        .error-message {
            color: red;
            text-align: center;
        }

        .btn-primary {
            width: 100%;
        }
    </style>
</head>

<body>
    <div class="register-container mt-5">
        <h1>Register</h1>
        <?php if (!empty($error)): ?>
            <p class="error-message"><?= $error ?></p>
        <?php endif; ?>
        <form method="POST">
            <div class="form-group">
                <input type="text" name="nama" class="form-control" placeholder="Nama" required>
            </div>
            <div class="form-group">
                <input type="text" name="username" class="form-control" placeholder="Username" required>
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Password" required>
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>
</body>
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

</html>