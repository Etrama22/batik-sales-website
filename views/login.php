<?php
session_start();
require "../config/database.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
</head>
<style>
    @import url("https://fonts.googleapis.com/css?family=Poppins");

    body {
        font-family: "Poppins", sans-serif;
        background: #ececec;
    }

    .box-area {
        width: 930px;
    }

    .right-box {
        padding: 40px 30px 40px 40px;
    }

    ::placeholder {
        font-size: 16px;
    }
</style>

<body>
    <!------------------------------------- Main Container ---------------------------------------->
    <div class="container d-flex justify-content-center align-items-center min-vh-100">

        <!----------------------------------- Login Container --------------------------------------->
        <div class="row border rounded-5 p-3 bg-white shadow box-area">

            <!-------------------------------------- Left Content --------------------------------------->
            <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background: #ec985a">
                <div class="featured-image mb-3 mt-3">
                    <img src="../image/LgnBnnr.jpg" class="img-fluid" style="width: 250px" />
                </div>
                <p class="text-white fs-2" style="
              font-family: 'Courier New', Courier, monospace;
              font-weight: 600;
            ">
                    Be Verified
                </p>
                <small class="text-white text-wrap text-center" style="width: 17rem; font-family: 'Courier New', Courier, monospace">batik with the best quality, customer
                    satisfaction is an honor for
                    us</small>
            </div>

            <!------------------------------------- Right Content ------------------------------------------>
            <div class="col-md-6 right-box">
                <div class="row align-items-center">
                    <p></p>
                </div>
                <!----------------------------------- Form Login -------------------------------->
                <form action="" method="post">
                    <div class="input-group mb-3">
                        <input type="text" name="username" class="form-control form-control-lg bg-light fs-6" placeholder="Enter Your Username" required />
                    </div>
                    <div class="input-group mb-1">
                        <input type="password" name="password" class="form-control form-control-lg bg-light fs-6" placeholder="Enter Your Password" required />
                    </div>
                    <div class="input-group mb-5 d-flex justify-content-between">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="formCheck" />
                            <label for="formCheck" class="form-check-label text-secondary"><small>Remember Me</small></label>
                        </div>
                        <div class="forgot">
                            <small><a href="#">Forgot Password ?</a></small>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <button type="submit" class="btn btn-lg btn-primary w-100 fs-6" name="loginbtn">Login</button>
                    </div>
                    <div class="input-group mb-3">
                        <button class="btn btn-lg btn-light w-100 fs-6">
                            <img src="../image/Logo1.svg" style="width: 50px" class="me-2" /><small>Join to become a traditional batik
                                admin</small>
                        </button>
                    </div>
                </form>
                <div class="row">
                    <small>Restricted area 'admin only'</small>
                </div>

                <!------------------------------------ Database Connection ------------------------------->
                <div class="mt-3">
                    <?php
                    if (isset($_POST['loginbtn'])) {
                        $username = mysqli_real_escape_string($conn, $_POST['username']);
                        $password = mysqli_real_escape_string($conn, $_POST['password']);

                        // Debug: Log username
                        error_log("Username: " . $username);

                        $query = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");

                        if (!$query) {
                            // Tampilkan kesalahan kueri
                            die("Query failed: " . mysqli_error($conn));
                        }

                        $countdata = mysqli_num_rows($query);
                        $data = mysqli_fetch_assoc($query);

                        // Debug: Log number of rows found
                        error_log("Number of rows: " . $countdata);

                        if ($countdata == 1) {
                            if (password_verify($password, $data['password'])) {
                                $_SESSION['login'] = true;
                                $_SESSION['username'] = $data['username'];
                                $_SESSION['role'] = $data['role']; // Tambahkan role ke session

                                // Debug: Log user role
                                error_log("User role: " . $data['role']);

                                // Periksa role pengguna dan arahkan ke halaman yang sesuai
                                if ($data['role'] === 'admin') {
                                    header('Location: admin/product_create.php');
                                    exit();
                                } else {
                                    header('Location: index.php');
                                    exit();
                                }
                            } else {
                    ?>
                                <div class="alert alert-warning" role="alert">
                                    Password Salah
                                </div>
                            <?php
                            }
                        } else {
                            ?>
                            <div class="alert alert-warning" role="alert">
                                Account does not exist!
                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>