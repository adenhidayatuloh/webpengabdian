<?php

include 'config.php';
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- sweet alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- aos animation -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- loading bar -->
    <script src="https://cdn.jsdelivr.net/npm/pace-js@latest/pace.min.js"></script>
    <link rel="stylesheet" href="./css/flash.css">
    <title>Tikako Cottage</title>
</head>

<body>
    <!--  carousel -->
    <section id="carouselExampleControls" class="carousel slide carousel_section" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="carousel-image" src="./image/hotel1.jpg">
            </div>
            <div class="carousel-item">
                <img class="carousel-image" src="./image/hotel2.jpg">
            </div>
            <div class="carousel-item">
                <img class="carousel-image" src="./image/hotel3.jpg">
            </div>
            <div class="carousel-item">
                <img class="carousel-image" src="./image/hotel4.jpg">
            </div>
        </div>
    </section>

    <!-- main section -->
    <section id="auth_section">

        <div class="logo">
            <!-- <img class="bluebirdlogo" src="./image/bluebirdlogo.png" alt="logo"> -->
            <p>Tikako</p>
        </div>

        <div class="auth_container">
            <!--============ login =============-->

            <div id="Log_in">
                <h2>Log In</h2>
                <div class="role_btn">
                    <div class="btns active">User</div>
                    <div class="btns">Staff</div>
                </div>

                <!-- // ==userlogin== -->
                <?php 
                if (isset($_POST['user_login_submit'])) {
                    $Email = $_POST['Email'];
                    $Password = $_POST['Password'];
                
                    $sql = "SELECT * FROM signup WHERE Email = '$Email'";
                    $result = mysqli_query($conn, $sql);
                
                    if ($result->num_rows > 0) {
                        $user = $result->fetch_assoc();
                        // Verify the password with the hash stored in the Password_Hash column
                        if (password_verify($Password, $user['Password_Hash'])) {
                            $_SESSION['usermail'] = $Email;
                            $Email = "";
                            $Password = "";
                            header("Location: home.php");
                        } else {
                            echo "<script>swal({
                                title: 'Invalid password',
                                icon: 'error',
                            });
                            </script>";
                        }
                    } else {
                        echo "<script>swal({
                            title: 'Email not found',
                            icon: 'error',
                        });
                        </script>";
                    }
                }
                ?>
                <form class="user_login authsection active" id="userlogin" action="" method="POST">
                    <div class="form-floating">
                        <input type="text" class="form-control" name="Username" placeholder=" ">
                        <label for="Username">Username</label>
                    </div>
                    <div class="form-floating">
                        <input typuser_logine="email" class="form-control" name="Email" placeholder=" ">
                        <label for="Email">Email</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" name="Password" placeholder=" ">
                        <label for="Password">Password</label>
                    </div>
                    <button type="submit" name="user_login_submit" class="auth_btn">Log in</button>

                    <div class="footer_line">
                        <h6>Don't have an account? <span class="page_move_btn" onclick="signuppage()">sign up</span></h6>
                    </div>
                </form>
                
                <!-- == Emp Login == -->
                <?php              
                    if (isset($_POST['Emp_login_submit'])) {
                        $Email = $_POST['Emp_Email'];
                        $Password = $_POST['Emp_Password'];

                        $sql = "SELECT * FROM emp_login WHERE Emp_Email = '$Email' AND Emp_Password = BINARY'$Password'";
                        $result = mysqli_query($conn, $sql);

                        if ($result->num_rows > 0) {
                            $_SESSION['usermail']=$Email;
                            $Email = "";
                            $Password = "";
                            header("Location: admin/admin.php");
                        } else {
                            echo "<script>swal({
                                title: 'Something went wrong',
                                icon: 'error',
                            });
                            </script>";
                        }
                    }
                ?> 
                <form class="employee_login authsection" id="employeelogin" action="" method="POST">
                    <div class="form-floating">
                        <input type="email" class="form-control" name="Emp_Email" placeholder=" ">
                        <label for="floatingInput">Email</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" name="Emp_Password" placeholder=" ">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <button type="submit" name="Emp_login_submit" class="auth_btn">Log in</button>
                </form>
                
            </div>

            <!--============ signup =============-->
            <?php     
             
             function aesEncrypt($data, $key) {
                $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length('aes-256-cbc'));
                $encrypted = openssl_encrypt($data, 'aes-256-cbc', $key, 0, $iv);
                return base64_encode($encrypted . '::' . $iv);
            }

             // Kunci enkripsi untuk AES (Anda harus menyimpannya dengan aman)
             $key = "your-secret-key";
             
             // Proses ketika form pendaftaran disubmit
             if (isset($_POST['user_signup_submit'])) {
                 $Username = $_POST['Username'];
                 $Email = $_POST['Email'];
                 $Password = $_POST['Password'];
                 $CPassword = $_POST['CPassword'];
             
                 // Validasi input kosong
                 if ($Username == "" || $Email == "" || $Password == "") {
                     echo "<script>swal({
                         title: 'Fill the proper details',
                         icon: 'error',
                     });
                     </script>";
                 } else {
                     // Validasi kecocokan password
                     if ($Password == $CPassword) {
                         // Cek apakah email sudah terdaftar
                         $sql = "SELECT * FROM signup WHERE Email = '$Email'";
                         $result = mysqli_query($conn, $sql);
             
                         if ($result->num_rows > 0) {
                             echo "<script>swal({
                                 title: 'Email already exists',
                                 icon: 'error',
                             });
                             </script>";
                         } else {
                             // Enkripsi Username dan Email menggunakan AES
                             $encryptedUsername = aesEncrypt($Username, $key);
                             $encryptedEmail = aesEncrypt($Email, $key);
             
                             // Hash password menggunakan Bcrypt
                             $hashedPassword = password_hash($Password, PASSWORD_BCRYPT);
             
                             // Simpan data yang sudah terenkripsi dan di-hash ke dalam database
                             $sql = "INSERT INTO signup (Username, Encrypted_Username, Email, Encrypted_Email, Password, Password_Hash) 
                                     VALUES ('$Username', '$encryptedUsername', '$Email', '$encryptedEmail', '$Password', '$hashedPassword')";
                             $result = mysqli_query($conn, $sql);
             
                             if ($result) {
                                 // Jika pendaftaran berhasil, arahkan ke halaman home
                                 $_SESSION['usermail'] = $Email;
                                 $Username = "";
                                 $Email = "";
                                 $Password = "";
                                 $CPassword = "";
                                 header("Location: home.php");
                             } else {
                                 echo "<script>swal({
                                     title: 'Something went wrong',
                                     icon: 'error',
                                 });
                                 </script>";
                             }
                         }
                     } else {
                         echo "<script>swal({
                             title: 'Password does not match',
                             icon: 'error',
                         });
                         </script>";
                     }
                 }
             }
                ?>
                
            
            <div id="sign_up">
                <h2>Sign Up</h2>

                <form class="user_signup" id="usersignup" action="" method="POST">
                    <div class="form-floating">
                        <input type="text" class="form-control" name="Username" placeholder=" ">
                        <label for="Username">Username</label>
                    </div>
                    <div class="form-floating">
                        <input type="email" class="form-control" name="Email" placeholder=" ">
                        <label for="Email">Email</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" name="Password" placeholder=" ">
                        <label for="Password">Password</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" name="CPassword" placeholder=" ">
                        <label for="CPassword">Confirm Password</label>
                    </div>

                    <button type="submit" name="user_signup_submit" class="auth_btn">Sign up</button>

                    <div class="footer_line">
                        <h6>Already have an account? <span class="page_move_btn" onclick="loginpage()">Log in</span></h6>
                    </div>
                </form>
            </div>
    </section>
</body>


<script src="./javascript/index.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- aos animation-->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>
</html>

