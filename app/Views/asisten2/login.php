<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container mb-3 mt-5 black bg-dark">
        <br><br>
        <center>
            <h2 class="text-warning center">Silahkan Masuk</h2>
        </center>

        <form action="/login/check" method="post">
            <?= csrf_field() ?>
            <div class="mb-4 mt-4">
                <label for="username" class="text-warning">Username :</label>
                <input type="text" class="form-control" id="username" placeholder="Masukan username" name="username">
            </div>
            <div class="mb-3">
                <label for="password" class="text-warning">Password :</label>
                <input type="password" class="form-control" id="password" placeholder="Masukan password"
                    name="password">
            </div>
            <button type="submit" class="btn btn-warning">Submit</button><br><br>
        </form>
    </div>

</body>

</html>