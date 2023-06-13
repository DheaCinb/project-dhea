<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Delete</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container" style="background-color:black">
        <br><br>
        <center>
            <h1 style="color:orange">HAPUS DATA</h1><br><br><br>
            <form action="/asisten/delete" method="post">
                <?= csrf_field() ?>
                <span style="color:orange">NIM:</span><input type="text" name="nim" /><br /><br><br>
                <input type="submit" name="" value="Delete" class="btn btn-warning" /><br><br>
            </form>
            <button class="btn btn-warning"><a href="/asisten"
                    class="text-dark text-decoration-none">Kembali</a></button>
            <br><br><br>
        </center>

    </div>
</body>

</html>