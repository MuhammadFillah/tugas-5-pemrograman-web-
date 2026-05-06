<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.css">
</head>
<body class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h3 class="text-center">Register</h3>
                    <div class="alert alert-info">
                        Mode Hardcode: Data yang didaftarkan tidak akan tersimpan ke database.
                    </div>
                    <form action="login.php">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" placeholder="Masukkan Username">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" placeholder="Masukkan Password">
                        </div>
                        <button type="button" onclick="alert('Ini mode hardcode. Silakan login dengan user yang sudah ada di kode.'); window.location='login.php'" class="btn btn-success btn-block">Daftar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
