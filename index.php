<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

	<!-- FAVICON -->
	<link rel="icon" type="image/x-icon" href="imgs/favicon/chat-dots.svg">

	<!-- jQUERY FILE -->
	<script type="text/javascript" src="jsFiles/jQuery/jQuery3.7.1.js"></script>

	<!-- BOOTSTRAP FILES -->
	<link rel="stylesheet" type="text/css" href="cssFiles/bootstrap/bootstrap5.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
	<script type="text/javascript" src="jsFiles/bootstrap/bootstrap5.js"></script>

	<style type="text/css">
		.layout{
			height: 100vh;
			overflow: auto;
		}
	</style>

</head>
<body>
	<main>
		<div class="container-fluid">
			<div class="layout position-relative">
				
				<!-- DIVISION/LAYOUT OF PAGES -->
				<div class="container verificationForm col-lg-6 col-md-8 col-sm-12 px-4 py-5 position-absolute start-50 top-50 translate-middle">
					
					<!-- MESSAGE DISPLAY -->
					<div class="systemMessages position-absolute start-50 bottom-100 translate-middle text-center w-100">
						<?php

							echo "This is an error message Sample";

						?>
					</div>
					<div class="welcomeMessage text-center mb-5">
						<h3 class="messageHeading">
							Welcome to <i class="bi bi-chat-dots"></i> chatApp
						</h3>
						<p class="messageBody">
							chatApp would like to verify your account, kindly provide the required data.
						</p>
					</div>

					<!-- SIGN-IN FORM -->
					<form class="form needs-validation" novalidate method="POST" action="">
						<div class="col-sm-12 form-floating mb-3">
							<input type="email" name="userEmailAddress" id="inputEmail" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[c,o,m]{3}$" title="Kindly enter you valid email address" required autofocus style="background-color: #18344E; color: #D9D9D9">
							<label for="inputEmail" class="text-dark fs-6">Email Address</label>

							<div class="valid-feedback">
								Email address seem valid!
							</div>
							<div class="invalid-feedback">
								Email address seem invalid!
							</div>
						</div>
						<div class="form-action d-flex justify-content-end">
							<button class="btn btn-primary bg-gradient" type="submit" name="varifyEmail">
								Verify <i class="bi bi-arrow-right-circle"></i>
							</button>
						</div>
					</form>
				</div>

			</div>
		</div>
	</main>
</body>
</html>
<script type="text/javascript" src="jsFiles/formValidator.js"></script>