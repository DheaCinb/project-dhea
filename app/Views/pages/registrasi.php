<div class="container">
    <br><br>
    <center>
        <h3>Buat Akun Anda</h3>
    </center>

    <form action="<? base_url('proses_add_member') ?>" method="POST">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" id="nama" placeholder="Juminten Minta Duit">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email">
        </div>
        <div class=" mb-3">
            <label for="wa" class="form-label">No Whatsapp</label>
            <input type="text" class="form-control" id="wa">
        </div>
        <div class="mb-3">
            <label for="user" class="form-label">Username</label>
            <input type="text" class="form-control" id="username">
        </div>
        <label for="pwd" class="form-label">Password</label>
        <input type="password" id="password" class="form-control" aria-labelledby="passwordHelpBlock"
            placeholder="passwordnya bro">
        <div id="passwordHelpBlock" class="form-text">
            Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces,
            special
            characters, or emoji.
        </div>
        <center><button type="submit" class="btn btn-primary">Submit</button></center>
    </form>
    <br><br>

</div>