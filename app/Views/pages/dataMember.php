<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Member</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <br><br><br>
        <center>
            <h1>Data Customer</h1>
        </center>
        <br><br><br>
        <table class=" table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Id</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>No Whatsapp</th>
                    <th>Username</th>
                    <th>Password</th>
                </tr>
            </thead>
            <tbody>

                <?php $no = 1;
                foreach ($customer as $row): ?>
                <tr>
                    <td>
                        {{ $row['no'] }}
                    </td>
                    <td>
                        <?= $row['id'] ?>
                    </td>
                    <td>
                        <?= $row['name'] ?>
                    </td>
                    <td>
                        <?= $row['email'] ?>
                    </td>
                    <td>
                        <?= $row['wa'] ?>
                    </td>
                    <td>
                        <?= $row['username'] ?>
                    </td>
                    <td>
                        <?= $row['password'] ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</body>

</html>