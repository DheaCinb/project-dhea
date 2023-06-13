<!DOCTYPE html>
<html lang="en">

<head>
    <title>Form Pendaftaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    span {
        color: orange;
    }
    </style>
</head>

<body>
    <div class="container" style="background-color:black">
        <center>
            <h1 style="color:orange">PENDAFTARAN ASISTEN PRAKTIKUM</h1>
            <form action="/asisten/simpan" method="post" class="mb-3 mt-3">
                <?= csrf_field() ?>
                <span>Nim:</span><br><input type="text" name="nim" class="mb-3 mt-3" /><br />
                <span>Nama:</span><br><input type="text" name="nama" class="mb-3 mt-3" /><br />
                <span>Kelas Praktikum:</span><br><input type="text" name="kelas_praktikum" class="mb-3 mt-3" /><br />
                <span>Ipk</span><br><input type="text" name="ipk" class="mb-3 mt-3" /><br />
                <input type="submit" name="" value="Simpan" class="btn btn-warning" /><br><br>
            </form>
            <button class="btn btn-warning"><a href="/asisten"
                    class="text-dark text-decoration-none">Kembali</a></button>
            <br><br><br>
        </center>
    </div>
</body>

</html>