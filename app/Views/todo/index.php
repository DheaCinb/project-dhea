<!DOCTYPE html>
<html>

<head>
    <title>APLIKASI TO-DOLIST</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('style.css'); ?>">
</head>

<body>
    <div class="container p-5 my-5 bg-warning text-black">
        <center>
            <h1>APLIKASI TO-DOLIST</h1>
        </center>
        <form method="post" action="<?= base_url('todolist/addTask') ?>">
            <div class="form-group">
                <label for="kegiatan">Masukkan kegiatan:</label>
                <input type="text" class="form-control" id="kegiatan" name="kegiatan" required>
            </div>
            <button type="submit" class="btn btn-danger">Tambahkan</button>
        </form>
        <br>
        <h3>Daftar Kegiatan:</h3>
        <table class="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Kegiatan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($todolist as $task): ?>
                    <tr>
                        <td>
                            <?= $i ?>
                        </td>
                        <td>
                            <?= $task['kegiatan'] ?>
                        </td>
                        <td>
                            <a href="<?= base_url('todolist/markAsDone/' . $task['idkegiatan']) ?>"
                                class="btn btn-success">Selesai</a>
                            <a href="<?= base_url('todolist/deleteTask/' . $task['idkegiatan']) ?>"
                                class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>