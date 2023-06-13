<!DOCTYPE html>
<htmlte lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Nama Asisten</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body>
        <div class="container mt-3 bg-dark">
            <center>
                <h1 style='color:orange'>Pendaftaran Asisten Praktikum</h1>
            </center><br><br>
            <table class="table" style='color:white'>
                <thead>
                    <tr>
                        <td>NIM</td>
                        <td>Nama</td>
                        <td>Kelas Praktikum</td>
                        <td>IPK</td>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($asisten as $in): ?>
                        <tr>
                            <td>
                                <?= $in['nim'] ?>
                            </td>
                            <td>
                                <?= $in['nama'] ?>
                            </td>
                            <td>
                                <?= $in['kelas_praktikum'] ?>
                            </td>
                            <td>
                                <?= $in['ipk'] ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <br><br><br>
            <center>
                <button class="btn btn-warning"><a href="/asisten/simpan" class="text-dark text-decoration-none">Tambah
                        Data
                        Asisten</a></button>
                <button class="btn btn-warning"><a href="/asisten/update" class="text-dark text-decoration-none">Edit
                        Data
                        Asisten</a></button>
                <button class="btn btn-warning"><a href="/asisten/delete" class="text-dark text-decoration-none">Hapus
                        Data
                        Asisten</a></button>
                <br><br>
                <button class="btn btn-warning"><a href="/login"
                        class="text-dark text-decoration-none">Logout</a></button>
                <br><br><br>
            </center>


        </div>

    </body>

</htmlte>