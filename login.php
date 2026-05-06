<?php
session_start();

// Data User Hardcoded (Username => Password)
$users = [
    
    "123" => "kalcer"
];

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Cek apakah username ada di array dan password cocok
    if (isset($users[$username]) && $users[$username] === $password) {
        $_SESSION['login'] = true;
        $_SESSION['username'] = $username;
        header("Location: index.php");
        exit;
    } else {
        $error = true;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Hardcode</title>
    <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.css">
    <style>
        body { background-color: #e9e9e9; padding-top: 100px; }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="header text-center">
                        <h3>LOGIN</h3>
                    </div>
                    <div class="body p-4">
                        <?php if(isset($error)) : ?>
                            <div class="alert alert-danger">Username atau Password salah!</div>
                        <?php endif; ?>
                        <form method="POST">
                            <div class="form-group">
                                <input type="text" name="username" class="form-control" placeholder="Username" required>
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control" placeholder="Password" required>
                            </div>
                            <button type="submit" name="login" class="btn btn-primary btn-block">MASUK</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>