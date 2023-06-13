<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container p-5 my-5 bg-primary text-white">
        <h1>STATUS KELULUSAN MAHASISWA</h1>
        Mahasiswa dengan Nama :
        <?= $nama; ?> dengan NIM
        <?= $nim; ?> berhasil menyelesaikan studi S1 dengan
        predikat
        <?= $status; ?>.
    </div>

</body>

</html>