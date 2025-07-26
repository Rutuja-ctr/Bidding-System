<?php
session_start();
require ("databaseConnection.php");
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['pass'];

    $email = mysqli_real_escape_string($conn, $email);
    $password = mysqli_real_escape_string($conn, $password);

    $query = "SELECT * FROM admins WHERE Email = '$email' AND Password = '$password'";

    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) {
        // Authentication successful
        header("Location: adminHome.php");
        exit;
        // Redirect to a secure page or perform other actions here
    } else {

        echo "<script>alert('Invalid Email Or Password');</script>";
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
<link rel="stylesheet" href="../Styles/style.css">
<title>Admin | Login</title>
<style>
</style>
</head>

<body>
	
	<!--****************************************** From login/ register****************************************** -->
	<section class="container bg-white  vw-100 vh-0 m-5">

		<div
			class=" float-start container-fluid border border-light h-100 w-50 text-center p-2 ">
			<img src="../images/loginregister.jpg" alt="login image">
		</div>
		<div
			class=" float-start container-fluid border border-light h-100 w-50 text-center pt-2 p-2 shadow">

			<div id="login" class="p-2 pt-5">
				<h5 class="card-title text-center pb-2"> Admin LOGIN</h5>
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


</html>