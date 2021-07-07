<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- My CSS -->
    <link rel="stylesheet" href="assets/css/main.css">
    <title>Create Akun - Makanan</title>
</head>

<body>
    <div class="container my-5">
        <div class="card">
            <div class="card-header">
                Form Pesanan
            </div>
            <div class="card-body">
                <form method="POST" action="actionakun.php" enctype="multipart/form-data">
                    <div class="form-group" style="margin-top: 20px;">
                        <label for="exampleInputEmail1">Nama</label>
                        <input type="text" name="inama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama">
                    </div>
                    <div class="form-group" style="margin-top: 20px;">
                        <label for="exampleInputEmail1">Username</label>
                        <input type="text" name="iusername" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Username">
                    </div>
                    <div class="form-group" style="margin-top: 20px;">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="ipassword" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan password">
                    </div>
                    <div class="form-group" style="margin-top: 20px;">
                        <label for="exampleInputEmail1">No Telp</label>
                        <input name="inotelp" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nomor Telp aktif">
                    </div>
                    <button type="submit" class="btn btn-primary" value="simpan" style="margin-top: 20px;">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>