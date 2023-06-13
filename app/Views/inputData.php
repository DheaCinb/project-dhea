<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container p-5 my-5 bg-primary text-white">
        <form action="./submit" method="get">
            <div class="mb-3 mt-3">
                <label class="form-label">Nama</label>
                <input type=" text" name="nama" id="nama" class="form-control"> <br>
            </div>
            <div class="mb-3">
                <label class="form-label">Nim</label>
                <input type=" text" name="nim" id="nim" class="form-control"><br>
            </div>
            <label>Status Kelulusan : </label>
            <select id="status" name="status" class="form-select mb-3">
                <option value="memuaskan">Memuaskan</option>
                <option value="cukup">Cukup</option>
                <option value="kurang">Kurang</option>
            </select><br><br>
            <input type="submit" value="Submit Data">
        </form>
    </div>

</body>

</html>