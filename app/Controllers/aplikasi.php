<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container p-5 my-5 bg-warning text-white">
        <center>
            <h1>Aplikasi to do list</h1>
        </center><br><br>
        <form method="POST" action="tododatabase.php">
            <label>Masukan kegiatan : </label><br>
            <input type="text" name="input" id="input">
            <input type="submit" name="tambah" id="tambah" value="Tambahkan">
        </form> <br>
        <table class="table table-dark table-striped" class="table table-dark table-striped">
            <thead>
                <th>No</th>
                <th>Daftar Kegiatan</th>
                <th></th>
                <th></th>
            </thead>
            <tbody>
                <?php

                include 'koneksi.php';
                $no = 1;
                $data = mysqli_query($conn, "SELECT idkegiatan, kegiatan FROM todolist");
                while ($d = mysqli_fetch_array($data)) {
                    echo "<tr>
                            <td>$no</td>
                            <td>" . $d['kegiatan'] . "</td>
                            <td><a href='tododatabase.php?selesai=" . $d['idkegiatan'] . "'>Selesai</a></td>
                            <td><a href='tododatabase.php?hapus=" . $d['idkegiatan'] . "'>Hapus</a></td>
                        </tr>";
                    $no++;
                }
                ?>
            </tbody>
        </table>
    </div>

</body>

</html>