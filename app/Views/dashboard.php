<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f0f8ff; /* Light blue background */
            color: #000080; /* Navy text color */
        }
        h1 {
            font-family: 'Comic Sans MS', cursive, sans-serif; /* Fun font for a 2000s feel */
            font-size: 2.5rem;
        }
        .logout-link {
            font-weight: bold;
            color: #ff4500; /* Orange color for logout link */
        }
    </style>
</head>

<body>
    <div class="container text-center mt-5">
        <h1>Halo, <?= $user['nama'] ?></h1>
        <a class="logout-link" href="<?= BASE_URL ?>auth/logout">Logout!</a>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
