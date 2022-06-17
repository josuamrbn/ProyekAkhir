<?php
require 'inc/inc_koneksi.php';
?>
<?php
    if(isset($_POST["submit"])){
        if($_POST["username"] == "admin" && $_POST ["password"] == "admin"){
            header("Location: admin/home_admin.php");
            exit;
        } else{
            $error = true;
        }
    }
?>
<?php
    if(isset($_POST["submit"])){
        if($_POST["username"] == "user" && $_POST ["password"] == "user"){
            header("Location: index.php");
            exit;
        } else{
            $error = true;
        }
    }
?>
<?php
if(isset($_POST["login"])){
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($koneksi, "SELECT * FROM user WHERE 
    username = '$username'");

    if(mysqli_num_rows($result) === 1){
        $row = mysqli_fetch_assoc($result);
       if( password_verify($password, $row["password"])){
            header("Location: index.php");
            exit;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <title>Login</title>
        <link
            rel="stylesheet"
            href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
            <link rel="stylesheet" href="css/login.css">
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js"
            crossorigin="anonymous"></script>
    </head>
    <body class="login">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
</div>
                <main class="form-signin">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header">
                                       <h3 class="text-center font-weight-light my-4"><img src = "https://upload.wikimedia.org/wikipedia/commons/3/37/Lambang_Kabupaten_Toba_Samosir.jpeg"
                                         width = "62px"><br>Login
                                    </h3>
                                    </div>
                                    <div class="card-body">
                                    <?php
                                        if(isset($error)) : ?>
                                        <p>username/password salah!</p>
                                        <?php
                                        endif;
                                        ?>
                                        <form action = "" method = "post">
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Username</label>
                                                <input
                                                    class="form-control py-4"
                                                    id="inputEmailAddress"
                                                    name="username"
                                                    type="text"
                                                    placeholder="Masukkan Username"/>
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputPassword">Password</label>
                                                <input
                                                    class="form-control py-4"
                                                    id="inputPassword"
                                                    type="password"
                                                    name="password"
                                                    placeholder="Masukkan Password"/>
                                            </div>
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" id="rememberPasswordCheck" type="checkbox"/>
                                                    <label class="custom-control-label" for="rememberPasswordCheck">Remember password</label>
                                                </div>
                                            </div>
                                            <div
                                                class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                                
                                                <button class="btn btn-block" name="submit" type="submit">Login</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small">
                                             <a href="registrasi.php">Belum Punya Akun? Daftar!</a> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script
            src="https://code.jquery.com/jquery-3.4.1.min.js"
            crossorigin="anonymous"></script>
        <script
            src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"
            crossorigin="anonymous"></script>
        <script src="{{url('assets/js/scripts.js')}}"></script>
    </body>
</html>