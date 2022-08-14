<!-- <?php
session_start();
// include 'session.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Register</title>
	<link rel="shortcut icon" href="assets2/images/a.png">
	<meta charset="UTF-8">
	<link rel="stylesheet" href="./a.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/icons/a.png" />
	<link rel="stylesheet" type="text/css" href="assets2/vendor1/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets2/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets2/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="assets2/vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="assets2/vendor1/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="assets2/vendor1/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="assets2/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets2/css/main.css">
</head>

<body class="bdy">
	<div class="limiter">
		<div class="container-login100" style="background-image: url('assets2/images/bg-03.jpg');">
			<div class="">
				<form action="" method="post" class="login100-form validate-form">
					

					
				<div class="z">
					<div class="wrap-input100 validate-input m-b-10" data-validate="Email is required">
						
						<input class="input100" id="email" type="email" name="email" placeholder="Email" autocomplete="off">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
					</div>
					

					<div class="wrap-input100 validate-input m-b-10" data-validate="Password is required">
						<input class="input100" id="password" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock"></i>
						</span>
					</div>


					<div class="container-login100-form-btn p-t-9">
						<input type="submit" name="submit" value="Register" class="login100-form-btn">
						

					</div>
					</div>
				</form>
                <?php
				include "koneksi.php";
            if(isset($_POST['submit'])){
                $email = htmlspecialchars($_POST['email']);
                $password = htmlspecialchars($_POST['password']);
                $enpassword = password_hash($password, PASSWORD_DEFAULT);
                
                $query = mysqli_query($koneksi,"SELECT email FROM users WHERE email='$email'");
                $count = mysqli_num_rows($query);
                
                if($count > 0){
                    echo"<p style='text-align:center; align-items:center;color:red;margin-top:12px; align-items:center;'>Tidak bisa daftar, email sudah terdaftar<p> <a style='color:blue;font-weight:bold'href=login.php><p style'color:blue;'>Login</p></a>";
					
                }
                else {
                    $queryInsert = mysqli_query($koneksi, "INSERT INTO users (email, password) VALUES ('$email', '$enpassword')");
                    
                    if($queryInsert){
                        echo "<p style='text-align:center; align-items:center;color:green;margin-top:12px; align-items:center;'>Akun berhasil terdaftar<p> <a style='color:blue;font-weight:bold'href=login.php><p style'color:blue;'>Login</p></a>";

                    }
                }
            }
            ?>   
			</div>
		</div>
	</div>





	<script src="assets2/vendor1/jquery/jquery-3.2.1.min.js"></script>
	<script src="assets2/vendor1/bootstrap/js/popper.js"></script>
	<script src="assets2/vendor1/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets2/vendor1/select2/select2.min.js"></script>
	<script src="assets2/js/main.js"></script>

</body>

</html> -->