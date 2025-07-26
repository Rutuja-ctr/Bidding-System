<?php
session_start();
require ("databaseConnection.php");
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['pass'];

    $email = mysqli_real_escape_string($conn, $email);
    $password = mysqli_real_escape_string($conn, $password);

    $query = "SELECT * FROM customer WHERE Email = '$email' AND Password = '$password'";

    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) {
        // Authentication successful
        echo "Login successful! Welcome, $username!";
        // Redirect to a secure page or perform other actions here
    } else {

        echo "<script>alert('Invalid Email Or Password');</script>";
    }
}

if (isset($_POST['register'])) {
    $name =  $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $cpassword = $_POST['cpass'];
    if ((strcasecmp($cpassword, $password) == 0)) {

        // Escape special characters to prevent SQL injection
        $name = mysqli_real_escape_string($conn, $name);
        $email = mysqli_real_escape_string($conn, $email);
        $password = mysqli_real_escape_string($conn, $password);

        // Password hashing (optional but highly recommended for security)
        // $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // SQL query to insert data into customer table
        $sql = "INSERT INTO customer (Name, Email, Password) VALUES ('$name', '$email', '$password')";

        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Customer Created Success Fully');</script>";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    } else {
        echo "<script>alert('Password and Confirm Password are not same.');</script>";
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script
	src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
	integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
	crossorigin="anonymous"></script>
<script
	src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
	integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
	crossorigin="anonymous"></script>
<link
	href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
	rel="stylesheet"
	integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
	crossorigin="anonymous">
<script
	src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
	integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
	crossorigin="anonymous"></script>
<link rel="stylesheet"
	href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap">
<link rel="stylesheet" href="Styles/style.css">
<title>Document</title>
<style>
</style>
</head>

<body>
	<!--****************************************** navbar start ******************************************-->
	<section class="container-fluid">
		<nav class="navbar navbar-expand-lg navbar-dark black-backgrouhnd">
			<div class="container-fluid">
				<a class="navbar-brand" href="#"> <img src="logo.png" alt="Logo"
					width="30" height="24" class="d-inline-block align-top">
				</a>
				<button class="navbar-toggler" type="button"
					data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
					aria-controls="navbarSupportedContent" aria-expanded="false"
					aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
						<li class="nav-item"><a class="nav-link " aria-current="page"
							href="home.php">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="home.php#2">Gallery</a>
						</li>
						<li class="nav-item"><a class="nav-link" href="home.php#3">About
								Us</a></li>

						<li class="nav-item"><a class="nav-link active" href="#">Login</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</section>
	<!--****************************************** navbar end****************************************** -->
	<!--****************************************** From login/ register****************************************** -->
	<section class="container bg-white  vw-100 vh-0 m-5">

		<div
			class=" float-start container-fluid border border-light h-100 w-50 text-center p-2 ">
			<img src="images/loginregister.jpg" alt="login image">
		</div>
		<div
			class=" float-start container-fluid border border-light h-100 w-50 text-center pt-2 p-2 shadow">
			<button class="btn btn-primary" type="button" id="toggleLogin">Login/Register</button>
			<div id="login" class="p-2 pt-5">
				<h5 class="card-title text-center pb-2">LOGIN</h5>
				<form method='post' action="#">
					<div class="mb-3">
						<input type="email" name="email"
							class="form-control form-control-borderless"
							id="exampleInputEmail1" aria-describedby="emailHelp"
							placeholder="Email" required>
					</div>
					<div class="mb-3">
						<input type="password" name="pass"
							class="form-control form-control-borderless"
							id="exampleInputPassword1" placeholder="Password" required>
					</div>
					<button type="submit" value="login" name="login"
						class="btn btn-primary w-100">Login</button>
				</form>
			</div>
			<div id="register" class="d-none p-2 pt-5 ">

				<div class="card-body">
					<h5 class="card-title text-center pb-2">REGISTER</h5>
					<form method="post" action="#">
						<div class="mb-3">
							<input type="text" name='name'
								class="form-control form-control-borderless"
								id="exampleInputName" placeholder="Full Name" required>
						</div>
						<div class="mb-3">
							<input type="email" name='email'
								class="form-control form-control-borderless"
								id="exampleInputEmail" aria-describedby="emailHelp"
								placeholder="Email" required>
						</div>

						<div class="mb-3">
							<input type="password" name='pass'
								class="form-control form-control-borderless"
								id="exampleInputPassword" placeholder="Password"
								onchange="checkPasswordMatch()" required>
						</div>
						<div class="mb-3">
							<input type="password" name='cpass'
								class="form-control form-control-borderless"
								id="exampleInputConfirmPassword" placeholder="Confirm Password"
								onchange="checkPasswordMatch()" required>
						</div>
						<div id="passwordMatchError" style="color: red;"></div>
						<button type="submit" name="register" value="register"
							class="btn btn-primary w-100">Register</button>
					</form>
				</div>
			</div>
		</div>
		</div>
	</section>
	<!--****************************************** From login/ register  end ****************************************** -->


	<!-- **************************************************** footer start **************************************************** -->
	<footer
		class="container-fluid fixed-bottom black-backgrouhnd text-light border-top border-light">
		<p class="text-center">© 2024 Spectrum Art - All Rights Reserved</p>
	</footer>

	<!-- **************************************************** footer end **************************************************** -->
</body>
<script>
    const toggleBtn = document.getElementById("toggleLogin");
    const div1 = document.getElementById("login");
    const div2 = document.getElementById("register");

    let currentDiv = div1;
    toggleBtn.addEventListener("click", () => {
        currentDiv.classList.add("d-none");
        if (currentDiv === div1) {
            currentDiv = div2;
        } else {
            currentDiv = div1;
        }
        currentDiv.classList.remove("d-none");
    });
    function checkPasswordMatch() {
        var password = document.getElementById("exampleInputPassword").value;
        var confirmPassword = document.getElementById("exampleInputConfirmPassword").value;
        var passwordMatchError = document.getElementById("passwordMatchError");
        var registerButton = document.querySelector("button[name='register']");
        
        if (password !== confirmPassword) {
            passwordMatchError.innerHTML = "Passwords do not match";
            registerButton.disabled = true;
        } else {
            passwordMatchError.innerHTML = "";
            registerButton.disabled = false;
        }
    }
</script>

</html>