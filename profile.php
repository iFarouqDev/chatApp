<?php
	include "incs/preAuthHeader.php";

	// GETTING PROFILE TAB FROM URL
	$profileTab = $previouPage = $prevPage = "";

	if (isset($_GET['Profile'])) {
		$profileTab =$_GET['Profile'];
	}
	if (isset($_GET['Previous_Page'])) {
		$previouPage = $_GET['Previous_Page'];
	}
	$myUsername = "My-Username";
?>
				<style>
					.profileIconAction button{
					    height: 2.5rem;
					    width: 2.5rem;
					    border-radius: 50%;
					}
					.profileBody input,
					.profileBody tel,
					.profileBody select{
					    border: 0.5px solid #808080;
					    color: #D9D9D9;
					}
					.profileAddress{
				        margin-top: -8rem;
				    }
				</style>
<body>
	<main>
		<div class="container-fluid">
			
			<!-- DIVISION/LAYOUT OF PAGES -->
			<div class="row layout">
				
				<!-- MENUBAR/MENU LIST -->
				<?php
					include "incs/menuBar.php";
				?>

				<title>My Profile | <?= $myUsername; ?></title>
				<!-- SELECTED MENU DISPLAY -->
				<div class="subMenu">
					<div class="subMenuHeading position-relative">
						<nav class="navbar navbar-expand-lg">
							<div class="container-fluid">
								<a class="navbar-brand" href="profile.php" title="Profile">Profile</a>
						    </div>
						</nav>
					</div>
					<div class="subMenuBody">
						<ul class="navbar-nav mb-lg-0">
					        	<li class="nav-item">
					        		<a class="nav-link active" aria-current="page" href="profile.php?Profile=<?= $myUsername ?>&Previous_Page=<?= $prevPage ?>">
					        			<div class="card">
					        				<div class="row card-body">
						        				<div class="listBody col-sm-10">
						        					<h5 class="card-title"><i class="bi bi-person-circle fs-4"></i> John Due</h5>
												    <p class="card-text px-5">
												   		<?= $myUsername; ?>
													</p>
						        				</div>
											</div>
					        			</div>
					        		</a>
					        	</li>
					        	<li class="nav-item">
					        		<a class="nav-link active" aria-current="page" href="profile.php?Profile=Edit&Previous_Page=<?= $prevPage ?>">
					        			<div class="card">
					        				<div class="row card-body">
						        				<div class="listBody col-sm-10">
						        					<h5 class="card-title"><i class="bi bi-pencil-square fs-4"></i> Edit Profile</h5>
						        				</div>
											</div>
					        			</div>
					        		</a>
					        	</li>
					        	<li class="nav-item">
					        		<a class="nav-link active" aria-current="page" href="profile.php?Profile=Privacy&Previous_Page=<?= $prevPage ?>">
					        			<div class="card">
					        				<div class="row card-body">
						        				<div class="listBody col-sm-10">
						        					<h5 class="card-title"><i class="bi bi-shield fs-4"></i> Privacy</h5>
						        				</div>
											</div>
					        			</div>
					        		</a>
					        	</li>
					        	<li class="nav-item">
					        		<a class="nav-link active" aria-current="page" href="profile.php?Profile=Delete&Previous_Page=<?= $prevPage ?>">
					        			<div class="card">
					        				<div class="row card-body">
						        				<div class="listBody col-sm-10">
						        					<h5 class="card-title"><i class="bi bi-x-circle fs-4"></i> Delete Account</h5>
						        				</div>
											</div>
					        			</div>
					        		</a>
					        	</li>
					        	<li class="nav-item">
					        		<a class="nav-link active" aria-current="page" href="profile.php?Profile=SignOut&Previous_Page=<?= $prevPage ?>">
					        			<div class="card">
					        				<div class="row card-body">
						        				<div class="listBody col-sm-10">
						        					<h5 class="card-title"><i class="bi bi-door-open fs-4"></i> Sign-Out</h5>
						        				</div>
											</div>
					        			</div>
					        		</a>
					        	</li>
					      	</ul>
				      	<p class="encMessage text-center"><i class="bi bi-lock"></i> Your parsonal data are safe with us.</p>
					</div>
				</div>

				<!-- SELECTED BODY DISPLAY -->
				<div class="nonChatContainer position-relative">
					<div class="selectedNonChat">
						<?php
						if (!$profileTab){
							?>
							<div class="chatBodyAlt position-absolute start-50 top-50 translate-middle text-center">
								<i class="bi bi-person-circle  bannerIcon"></i>
								<h3 class="bannerText">My Profile</h3>
								<p class="encMessage"><i class="bi bi-lock"></i> Your parsonal are self with us!</p>
							</div>
							<?php
						}
						else{
							?>
							<!-- CHAT HEADING -->
							<div class="selectedChatHeading">
								<nav class="navbar navbar-expand-lg">
									<div class="container-fluid">
										<a class="navbar-brand btn btn-outline-secondary" href="<?= $previouPage ?>">
											<!-- <i class="bi bi-person-circle"></i> -->
											<i class="bi bi-reply fs-4 fs-2 fw-bold text-light"></i>
										</a>
									</div>
								</nav>
							</div>
							
							<?php
							if ($profileTab == $myUsername) {
								// IF AN NON-ACTIVATED USER TRY TO ACCESS THIS PAGE, THEY BE TAKEN BACK TO PROFILE-EDIT PAGE
								?>
								<!-- USER PROFILE BODY -->
								<div class="profileBody">
									<div class="profileIcon position-relative">
										<i class="bi bi-person-circle"></i>
										<div class="profileIconAction position-absolute start-50 bottom-0">
											<button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#uploadProfileImage"><i class="bi bi-pencil fs-6"></i></button>
										</div>
									</div>
									<div class="card mt-2 mb-2">
				        				<div class="card-body">
				        					<div class="row profileHeading">
				        						<div class="profileTitle col-sm-6">
				        							<h5 class="card-title">Username: <small class="fw-light fs-6"><?= $myUsername; ?></small>
				        								<span class="userCount bg-secondary bg-gradient text-secondary-emphasis p-1 rounded">
				        									@22
				        								</span>
				        							</h5>
				        							<h5 class="card-title">First Name: <small class="fw-light fs-6">John</small></h5>
				        							<h5 class="card-title">Last Name: <small class="fw-light fs-6">Due</small></h5>
				        						</div>
				        					</div>
				        					
				        					<hr class="border border-2">
				        					<div class="row profileDetails">
				        						<div class="profileBasics col-sm-6 mb-4">
				        							<h5 class="card-title mb-3">Basic Info.</h5>
				        							<h6 class="card-title">
				        								<i class="bi bi-gender-ambiguous fs-5"></i> Gender: <small class="fw-light fs-6">Male</small>
				        							</h6>
				        							<h6 class="card-title">
				        								<i class="bi bi-cake2 fs-5"> </i> Birth Date: <small class="fw-light fs-6">20/02/2020</small>
				        							</h6>
				        						</div>
				        						<div class="profileAddress col-sm-6 mb-4 mt-0">
				        							<h5 class="card-title mb-3">Place From</h5>
				        							<h6 class="card-title">
				        								<i class="bi bi-globe fs-5"> </i> Nationality: <small class="fw-light fs-6">Nigerian</small>
				        							</h6>
				        							<h6 class="card-title">
				        								<i class="bi bi-geo-alt fs-5"> </i> State: <small class="fw-light fs-6"> My-State </small>
				        							</h6>
				        							<h6 class="card-title">
				        								<i class="bi bi-geo-alt fs-5"> </i> LGA: <small class="fw-light fs-6"> My-City </small>
				        							</h6>
				        						</div>
				        						<div class="profileContact col-sm-6 mb-4">
				        							<h5 class="card-title mb-3">Contact Info.</h5>
				        							<h6 class="card-title">
				        								<i class="bi bi-envelope fs-5"> </i> Email: <small class="fw-light fs-6"> MyEmail@gamil.com </small>
				        							</h6>
				        							<h6 class="card-title">
				        								<i class="bi bi-telephone fs-5"> </i> Phone: <small class="fw-light fs-6"> +234 8032234334</small>
				        							</h6>
				        						</div>
				        					</div>
										</div>
				        			</div>
								</div>
								<?php
							}
							elseif ($profileTab == "Edit") {
								// PROFILE EDIT EXTERNAL QUERIES
								?>
								<!-- EDIT PROFILE -->
								<div class="profileBody position-relative" style="margin-top: 3.5rem;">
									<!-- MESSAGE DISPLAY -->
									<div class="systemMessages position-absolute start-50 top-0 translate-middle text-center z-3 w-100">
										<?php
										if (isset($_GET['Account_Status'])) {
											if ($_GET['Account_Status'] == "Non_Activated") {
												?>
												<div class='alert alert-warning alert-dismissible fade show' role='alert'>
												  	Your account is not activated yet. You have to complete setting your account before you can be able you operate it.
												  	<br>
												  	<small class="text-danger">The OTP will expire in 5 Mins!</small>
												  	<button class='btn-close' data-bs-dismiss="alert"></button>
												 </div>
												<?php
											}
										}

										// ERROR MESSAGES
										if ($emptyField) {
											echo $emptyField;
										}
										if($usrError){
                                            echo $usrError;
                                        }
                                        if($numberError){
                                            echo $numberError;
                                        }
										if ($success) {
											echo $success;
										}
										if ($failed) {
											echo $failed;
										}
										if ($error) {
											echo $error;
										}
										?>
									</div>
									<div class="card mt-2 mb-2">
				        				<div class="card-body">
				        					<div class="row profileHeading">
				        						<h3 class="card-title mb-5 mt-0 text-center">Edit Profile</h3>
				        					</div>
				        					<form class="form needs-validation" novalidate method="POST" action="">
												<div class=" col-sm-12 form-floating mb-3">
													<input class="form-control" type="text" name="userUsername" id="inputUsername" placeholder="Username" title="Kindly enter the valid and unique username for your account" required autofocus style="background-color: #18344E; color: #D9D9D9;" value="<?= $myUsername; ?>">
													<label for="inputUsername" class="text-dark fs-6">Username</label>
													<div class="valid-feedback">
												    	Looks Good!
												    </div>
												    <div class="invalid-feedback">
												    	Not Bad!
												    </div>
												</div>
												<div class=" col-sm-12 form-floating mb-3">
													<input class="form-control" type="text" name="userFirstName" id="inpuFirstName" placeholder="First Name" title="Kindly enter your first name" required style="background-color: #18344E; color: #D9D9D9;" value="<?= $myFirstName; ?>">
													<label for="inpuFirstName" class="text-dark fs-6">First Name</label>
													<div class="valid-feedback">
												    	Looks Good!
												    </div>
												    <div class="invalid-feedback">
												    	Please enter your First Name!
												    </div>
												</div>
												<div class=" col-sm-12 form-floating mb-3">
													<input class="form-control" type="text" name="userLastName" id="inputLastName" placeholder="Last Name(s)" title="Kindly enter your last name(s)" required style="background-color: #18344E; color: #D9D9D9;" value="<?= $myLastName; ?>">
													<label for="inputLastName" class="text-dark fs-6">Last Name(s)</label>
													<div class="valid-feedback">
												    	Looks Good!
												    </div>
												    <div class="invalid-feedback">
												    	Please enter your Last name(s)!
												    </div>
												</div>
												<div class="d-flex justify-content-evenly gap-1">
													<div class=" col-sm-6 form-floating mb-3">
														<select class="form-select" name="userGender" id="selectGender" required style="background-color: #18344E; color: #D9D9D9;">
													        <option selected value="<?= $myGender; ?>"><?= $myGender; ?></option>
													        <option disabled></option>
													        <option value="Male">Male</option>
													        <option value="Female">Female</option>
													    </select>
														<label for="selectGender" class="text-dark fs-6">Select your Gender</label>
														<div class="valid-feedback">
													    	Looks Good!
													    </div>
													    <div class="invalid-feedback">
													    	Please selecct your gender!
													    </div>
													</div>
													<div class=" col-sm-6 form-floating mb-3">
														<input class="form-control" type="date" name="userBirthDate" id="inputDateOfBirth" placeholder="Date of Birth" title="Kindly enter your valid email address" required style="background-color: #18344E; color: #D9D9D9;" value="<?= $myBirthDate; ?>">
														<label for="inputDateOfBirth" class="text-dark fs-6">Date of Birth</label>
														<div class="valid-feedback">
													    	Looks Good!
													    </div>
													    <div class="invalid-feedback">
													    	Please enter your Date of Birth!
													    </div>
													</div>
												</div>
												<div class="d-flex justify-content-evenly gap-1">
													<div class=" col-md-6 form-floating d-flex justify-content-start mb-3">
														<select class="form-select" id="selectGender" name="userState" required style="background-color: #18344E; color: #D9D9D9;">
													        <option selected value="<?= $myState; ?>"><?= $myState; ?></option>
													        <option disabled></option>
													        <option value="Abia">Abia</option>
															<option value="Adamawa">Adamawa</option>
															<option value="Akwa Ibom">Akwa Ibom</option>
															<option value="Anambra">Anambra</option>
															<option value="Bauchi">Bauchi</option>
															<option value="Bayelsa">Bayelsa</option>
															<option value="Benue">Benue</option>
															<option value="Borno">Borno</option>
															<option value="Cross River">Cross River</option>
															<option value="Delta">Delta</option>
															<option value="Ebonyi">Ebonyi</option>
															<option value="Edo">Edo</option>
															<option value="Ekiti">Ekiti</option>
															<option value="Enugu">Enugu</option>
															<option value="FCT - Abuja">FCT - Abuja</option>
															<option value="Gombe">Gombe</option>
															<option value="Imo">Imo</option>
															<option value="Jigawa">Jigawa</option>
															<option value="Kaduna">Kaduna</option>
															<option value="Kano">Kano</option>
															<option value="Katsina">Katsina</option>
															<option value="Kebbi">Kebbi</option>
															<option value="Kogi">Kogi</option>
															<option value="Kwara">Kwara</option>
															<option value="Lagos">Lagos</option>
															<option value="Nasarawa"></option>
															<option value="Niger">Nasarawa</option>
															<option value="Ogun">Ogun</option>
															<option value="Ondo"></option>
															<option value="Osun">Ondo</option>
															<option value="Oyo">Oyo</option>
															<option value="Plateau">Plateau</option>
															<option value="Rivers">Rivers</option>
															<option value="Sokoto">Sokoto</option>
															<option value="Taraba">Taraba</option>
															<option value="Yobe">Yobe</option>
															<option value="Zamfara">Zamfara</option>
													    </select>
														<label for="selectGender" class="text-dark fs-6">Select your state of origin</label>
														<div class="valid-feedback">
													    	Looks Good!
													    </div>
													    <div class="invalid-feedback">
													    	Please select your state of origin!
													    </div>
													</div>
													<div class=" col-md-6 form-floating mb-3">
														<input class="form-control" type="text" name="userCity" id="inputCity" placeholder="City" title="Kindly enter your City/Town" style="background-color: #18344E; color: #D9D9D9;" value="<?= $myCity; ?>">
														<label for="inputCity" class="text-dark fs-6">City/Town</label>
														<div class="valid-feedback">
													    	Looks Good!
													    </div>
													    <div class="invalid-feedback">
													    	Not Bad
													    </div>
													</div>
												</div>
													
												<!-- <div class=" col-sm-12 form-floating mb-3">
													<input class="form-control" type="email" name="userEmailAddress" id="inputEmail" placeholder="Email Address" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[c,o,m]{3}$" title="Kindly enter your valid email address" required readonly style="background-color: #18344E; color: #D9D9D9;">
													<label for="inputEmail" class="text-dark fs-6">Email address</label>
													<div class="valid-feedback" value="">
												    	Email Address seems valid!
												    </div>
												    <div class="invalid-feedback">
												    	Email Address seems invalid!
												    </div>
												</div> -->
												<div class=" col-sm-12 form-floating mb-3">
													<input class="form-control" type="tel" name="userMobileNumber" id="inputNumber" placeholder="Mobile Number" pattern="[0-9,+]+" title="Kindly enter your valid mobile numner" required pattern="[0-9,+]+" minlength="11" maxlength="14" style="background-color: #18344E; color: #D9D9D9;" value="<?= $myNumber; ?>">
													<label for="inputNumber" class="text-dark fs-6">Mobile Number</label>
													<div class="valid-feedback">
												    	Looks Good!
												    </div>
												    <div class="invalid-feedback">
												    	Mobile number looks invalid!
												    </div>
												</div>
												<div class="form-action d-flex justify-content-end">
													<?php
													if(isset($_GET['Account_Status'])){
														if($_GET['Account_Status'] == "Non_Activated"){
															?>
															<button class="btn btn-primary bg-gradient" type="submit" name="editProfile">
																Done
																<i class="bi bi-check-circle"></i>
															</button>
															<?php
														}
													}
													else{
														?>
														<button class="btn btn-primary bg-gradient" type="submit" name="editProfile">
															Edit
															<i class="bi bi-pencil"></i>
														</button>
														<?php
													}
													?>
												</div>
											</form>
										</div>
				        			</div>
								</div>
								<?php
							}
							elseif ($profileTab == "Privacy") {
								// IF AN NON-ACTIVATED USER TRY TO ACCESS THIS PAGE, THEY BE TAKEN BACK TO PROFILE-EDIT PAGE
								?>
								<!-- PRIVACY SETTINGS -->
								<div class="profileBody" style="margin-top: 10rem;">
									<div class="card mt-2 mb-2">
				        				<div class="card-body">
				        					<div class="row profileHeading">
				        						<h3 class="card-title mb-5 mt-0 text-center">Privacy Settings</h3>
				        					</div>
				        					<div class="settingsBody p-1">
				        						<div class="birthDate d-flex justify-content-between mb-3">
				        							<h5>Date of Birth</h5>
				        							<div class="form-check form-switch">
				        								<input class="form-check-input form-control fs-4 birthDateSwitch" type="checkbox" role="switch" the-user="#" action="ActivateBirth" title="Allow or Disallow this data to be seen Public">
				        							</div>
				        						</div>
				        						<div class="emailAddress d-flex justify-content-between mb-3">
				        							<h5>Email Address</h5>
				        							<div class="form-check form-switch">
				        								<input class="form-check-input form-control fs-4 emailAddressSwitch" type="checkbox" role="switch" the-user="#" action="DeactivateEmail" title="Allow or Disallow this data to be seen Public" checked>
													</div>
				        						</div>
				        						<div class="mobileNumber d-flex justify-content-between mb-3">
				        							<h5>Mobile Number</h5>
				        							<div class="form-check form-switch">
												  		<input class="form-check-input form-control fs-4 mobileNumberSwitch" type="checkbox" role="switch" the-user="#" action="DeactivateNumber" title="Allow or Disallow this data to be seen Public" checked>
													</div>
				        						</div>
				        					</div>
										</div>
				        			</div>
								</div>
								<?php
							}
							elseif ($profileTab == "Delete") {								
								?>
								<!-- DELETE ACCOUNT -->
								<div class="profileBody" style="margin-top: 10rem;">
									<div class="card mt-2 mb-2">
				        				<div class="card-body">
				        					<div class="row profileHeading">
				        						<h3 class="card-title mb-5 mt-0 text-center">Deleting Account</h3>
				        					</div>
				        					<div class="accountDeletion p-1 text-center">
				        						<h4 class="text-danger">Warning!!!</h4>
				        						<p>Please be aware that, once your account is deleted, you're going to loose all your data as well, and you will not be able to get access to it ever again</p>
				        						<p class="text-warning">Are you sure you want to delete your account?</p>

				        						<div class="d-flex justify-content-end gap-2">
				        							<a href="profile.php?Profile=<?= $myUsername; ?>" class="btn btn-secondary" type="button" id="deleteDecline">Cancel <i class="bi bi-x-circle"></i> </a>
				        							<button class="btn btn-danger" type="button" data-bs-toggle="modal" data-bs-target="#deleteAccount<?= $myUniqueKey; ?>">Proceed <i class="bi bi-arrow-right-circle"></i></button>
				        						</div>
				        					</div>
										</div>
				        			</div>
								</div>
								<?php
							}
							elseif($profileTab == "SignOut"){								
								?>
								<!-- SIGN-OUT -->
								<div class="profileBody" style="margin-top: 10rem;">
									<div class="card mt-2 mb-2">
				        				<div class="card-body">
				        					<div class="row profileHeading">
				        						<h3 class="card-title mb-5 mt-0 text-center">Signing Out</h3>
				        					</div>
				        					<div class="signOut p-1 text-center">
				        						<h4 class="text-success">Farewell!!!</h4>
				        						<p>It's very nice have you here this time, hope to see you back soon. Farewell!</p>

				        						<div class="d-flex justify-content-end gap-2">
				        							<a href="signOut.php" class="btn btn-danger" type="button" id="signout">Sign-Out <i class="bi bi-door-open"></i></a>
				        						</div>
				        					</div>
										</div>
				        			</div>
								</div>
								<?php
							}
						}
						?>
					</div>
				</div>

				<!-- COMPRESSED LAYOUT -->
				<div class="compressedLayout">
					<?php
					if (!$profileTab) { // IF NON OF THE TAB WAS SELECTED, THE INITIAL VIEW OF PAGE WILL BE THE TABS "SUB-MENU"
						?>
						<!-- SELECTED MENU DISPLAY -->
						<div class="compressedSubMenu">
							<div class="subMenuHeading position-relative">
								<nav class="navbar navbar-expand-lg">
									<div class="container-fluid">
										<a class="navbar-brand" href="profile.php" title="Profile">Profile</a>
								    </div>
								</nav>
							</div>
							<div class="subMenuBody">
								<ul class="navbar-nav mb-lg-0">
						        	<li class="nav-item">
						        		<a class="nav-link active" aria-current="page" href="profile.php?Profile=<?= $myUsername ?>&Previous_Page=<?= $prevPage ?>">
						        			<div class="card">
						        				<div class="row card-body">
							        				<div class="listBody col-sm-10">
							        					<h5 class="card-title"><i class="bi bi-person-circle fs-4"></i> John Due</h5>
													    <p class="card-text px-5">
													   		<?= $myUsername; ?>
														</p>
							        				</div>
												</div>
						        			</div>
						        		</a>
						        	</li>
						        	<li class="nav-item">
						        		<a class="nav-link active" aria-current="page" href="profile.php?Profile=Edit&Previous_Page=<?= $prevPage ?>">
						        			<div class="card">
						        				<div class="row card-body">
							        				<div class="listBody col-sm-10">
							        					<h5 class="card-title"><i class="bi bi-pencil-square fs-4"></i> Edit Profile</h5>
							        				</div>
												</div>
						        			</div>
						        		</a>
						        	</li>
						        	<li class="nav-item">
						        		<a class="nav-link active" aria-current="page" href="profile.php?Profile=Privacy&Previous_Page=<?= $prevPage ?>">
						        			<div class="card">
						        				<div class="row card-body">
							        				<div class="listBody col-sm-10">
							        					<h5 class="card-title"><i class="bi bi-shield fs-4"></i> Privacy</h5>
							        				</div>
												</div>
						        			</div>
						        		</a>
						        	</li>
						        	<li class="nav-item">
						        		<a class="nav-link active" aria-current="page" href="profile.php?Profile=Delete&Previous_Page=<?= $prevPage ?>">
						        			<div class="card">
						        				<div class="row card-body">
							        				<div class="listBody col-sm-10">
							        					<h5 class="card-title"><i class="bi bi-x-circle fs-4"></i> Delete Account</h5>
							        				</div>
												</div>
						        			</div>
						        		</a>
						        	</li>
						        	<li class="nav-item">
						        		<a class="nav-link active" aria-current="page" href="profile.php?Profile=SignOut&Previous_Page=<?= $prevPage ?>">
						        			<div class="card">
						        				<div class="row card-body">
							        				<div class="listBody col-sm-10">
							        					<h5 class="card-title"><i class="bi bi-door-open fs-4"></i> Sign-Out</h5>
							        				</div>
												</div>
						        			</div>
						        		</a>
						        	</li>
						      	</ul>
						      	<p class="encMessage text-center"><i class="bi bi-lock"></i> Your parsonal data are safe with us.</p>
							</div>
						</div>
						<?php
					}
					else{ // IF ANY OF THE TAB IS SELECTED, THEN THE NEXT VIEW OF THE PAGE WILL BE THAT SELECTED TAB DATA/INFO
						?>
						<!-- SELECTED BODY DISPLAY -->
						<div class="CompressedNonChatContainer position-relative">							<div class="selectedNonChat">
								<!-- CHAT HEADING -->
								<div class="selectedChatHeading position-relative">
									<nav class="navbar navbar-expand-lg">
										<div class="container-fluid">
											<a class="navbar-brand btn btn-outline-secondary" href="<?= $previouPage ?>">
												<!-- <i class="bi bi-person-circle"></i> -->
												<i class="bi bi-reply fs-4 fs-2 fw-bold text-light"></i>
											</a>
										</div>
									</nav>
								</div>
								
								<?php
							if ($profileTab == $myUsername) {
								// IF AN NON-ACTIVATED USER TRY TO ACCESS THIS PAGE, THEY BE TAKEN BACK TO PROFILE-EDIT PAGE
								non_activated_user();
								?>
								<!-- USER PROFILE BODY -->
								<div class="profileBody">
									<div class="profileIcon position-relative">
										<i class="bi bi-person-circle"></i>
										<div class="profileIconAction position-absolute start-50 bottom-0">
											<button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#uploadProfileImage"><i class="bi bi-pencil fs-6"></i></button>
										</div>
									</div>
									<div class="card mt-2 mb-2">
				        				<div class="card-body">
				        					<div class="row profileHeading">
				        						<div class="profileTitle col-sm-6">
				        							<h5 class="card-title">Username: <small class="fw-light fs-6"><?= $myUsername; ?></small>
				        								<span class="userCount bg-secondary bg-gradient text-secondary-emphasis p-1 rounded">
				        									@22
				        								</span>
				        							</h5>
				        							<h5 class="card-title">First Name: <small class="fw-light fs-6">John</small></h5>
				        							<h5 class="card-title">Last Name: <small class="fw-light fs-6">Due</small></h5>
				        						</div>
				        					</div>
				        					
				        					<hr class="border border-2">
				        					<div class="row profileDetails">
				        						<div class="profileBasics col-sm-6 mb-4">
				        							<h5 class="card-title mb-3">Basic Info.</h5>
				        							<h6 class="card-title">
				        								<i class="bi bi-gender-ambiguous fs-5"></i> Gender: <small class="fw-light fs-6">Male</small>
				        							</h6>
				        							<h6 class="card-title">
				        								<i class="bi bi-cake2 fs-5"> </i> Birth Date: <small class="fw-light fs-6">20/02/2020</small>
				        							</h6>
				        						</div>
				        						<div class="profileAddress col-sm-6 mb-4 mt-0">
				        							<h5 class="card-title mb-3">Place From</h5>
				        							<h6 class="card-title">
				        								<i class="bi bi-globe fs-5"> </i> Nationality: <small class="fw-light fs-6">Nigerian</small>
				        							</h6>
				        							<h6 class="card-title">
				        								<i class="bi bi-geo-alt fs-5"> </i> State: <small class="fw-light fs-6"> My-State </small>
				        							</h6>
				        							<h6 class="card-title">
				        								<i class="bi bi-geo-alt fs-5"> </i> LGA: <small class="fw-light fs-6"> My-City </small>
				        							</h6>
				        						</div>
				        						<div class="profileContact col-sm-6 mb-4">
				        							<h5 class="card-title mb-3">Contact Info.</h5>
				        							<h6 class="card-title">
				        								<i class="bi bi-envelope fs-5"> </i> Email: <small class="fw-light fs-6"> MyEmail@gamil.com </small>
				        							</h6>
				        							<h6 class="card-title">
				        								<i class="bi bi-telephone fs-5"> </i> Phone: <small class="fw-light fs-6"> +234 8032234334</small>
				        							</h6>
				        						</div>
				        					</div>
										</div>
				        			</div>
								</div>
								<?php
							}
							elseif ($profileTab == "Edit") {
								// PROFILE EDIT EXTERNAL QUERIES
								?>
								<!-- EDIT PROFILE -->
								<div class="profileBody position-relative" style="margin-top: 3.5rem;">
									<!-- MESSAGE DISPLAY -->
									<div class="systemMessages position-absolute start-50 top-0 translate-middle text-center z-3 w-100">
										<?php
										if (isset($_GET['Account_Status'])) {
											if ($_GET['Account_Status'] == "Non_Activated") {
												?>
												<div class='alert alert-warning alert-dismissible fade show' role='alert'>
												  	Your account is not activated yet. You have to complete setting your account before you can be able you operate it.
												  	<br>
												  	<small class="text-danger">The OTP will expire in 5 Mins!</small>
												  	<button class='btn-close' data-bs-dismiss="alert"></button>
												 </div>
												<?php
											}
										}

										// ERROR MESSAGES
										if ($emptyField) {
											echo $emptyField;
										}
										if($usrError){
                                            echo $usrError;
                                        }
                                        if($numberError){
                                            echo $numberError;
                                        }
										if ($success) {
											echo $success;
										}
										if ($failed) {
											echo $failed;
										}
										if ($error) {
											echo $error;
										}
										?>
									</div>
									<div class="card mt-2 mb-2">
				        				<div class="card-body">
				        					<div class="row profileHeading">
				        						<h3 class="card-title mb-5 mt-0 text-center">Edit Profile</h3>
				        					</div>
				        					<form class="form needs-validation" novalidate method="POST" action="">
												<div class=" col-sm-12 form-floating mb-3">
													<input class="form-control" type="text" name="userUsername" id="inputUsername" placeholder="Username" title="Kindly enter the valid and unique username for your account" required autofocus style="background-color: #18344E; color: #D9D9D9;" value="<?= $myUsername; ?>">
													<label for="inputUsername" class="text-dark fs-6">Username</label>
													<div class="valid-feedback">
												    	Looks Good!
												    </div>
												    <div class="invalid-feedback">
												    	Not Bad!
												    </div>
												</div>
												<div class=" col-sm-12 form-floating mb-3">
													<input class="form-control" type="text" name="userFirstName" id="inpuFirstName" placeholder="First Name" title="Kindly enter your first name" required style="background-color: #18344E; color: #D9D9D9;" value="<?= $myFirstName; ?>">
													<label for="inpuFirstName" class="text-dark fs-6">First Name</label>
													<div class="valid-feedback">
												    	Looks Good!
												    </div>
												    <div class="invalid-feedback">
												    	Please enter your First Name!
												    </div>
												</div>
												<div class=" col-sm-12 form-floating mb-3">
													<input class="form-control" type="text" name="userLastName" id="inputLastName" placeholder="Last Name(s)" title="Kindly enter your last name(s)" required style="background-color: #18344E; color: #D9D9D9;" value="<?= $myLastName; ?>">
													<label for="inputLastName" class="text-dark fs-6">Last Name(s)</label>
													<div class="valid-feedback">
												    	Looks Good!
												    </div>
												    <div class="invalid-feedback">
												    	Please enter your Last name(s)!
												    </div>
												</div>
												<div class="d-flex justify-content-evenly gap-1">
													<div class=" col-sm-6 form-floating mb-3">
														<select class="form-select" name="userGender" id="selectGender" required style="background-color: #18344E; color: #D9D9D9;">
													        <option selected value="<?= $myGender; ?>"><?= $myGender; ?></option>
													        <option disabled></option>
													        <option value="Male">Male</option>
													        <option value="Female">Female</option>
													    </select>
														<label for="selectGender" class="text-dark fs-6">Select your Gender</label>
														<div class="valid-feedback">
													    	Looks Good!
													    </div>
													    <div class="invalid-feedback">
													    	Please selecct your gender!
													    </div>
													</div>
													<div class=" col-sm-6 form-floating mb-3">
														<input class="form-control" type="date" name="userBirthDate" id="inputDateOfBirth" placeholder="Date of Birth" title="Kindly enter your valid email address" required style="background-color: #18344E; color: #D9D9D9;" value="<?= $myBirthDate; ?>">
														<label for="inputDateOfBirth" class="text-dark fs-6">Date of Birth</label>
														<div class="valid-feedback">
													    	Looks Good!
													    </div>
													    <div class="invalid-feedback">
													    	Please enter your Date of Birth!
													    </div>
													</div>
												</div>
												<div class="d-flex justify-content-evenly gap-1">
													<div class=" col-md-6 form-floating d-flex justify-content-start mb-3">
														<select class="form-select" id="selectGender" name="userState" required style="background-color: #18344E; color: #D9D9D9;">
													        <option selected value="<?= $myState; ?>"><?= $myState; ?></option>
													        <option disabled></option>
													        <option value="Abia">Abia</option>
															<option value="Adamawa">Adamawa</option>
															<option value="Akwa Ibom">Akwa Ibom</option>
															<option value="Anambra">Anambra</option>
															<option value="Bauchi">Bauchi</option>
															<option value="Bayelsa">Bayelsa</option>
															<option value="Benue">Benue</option>
															<option value="Borno">Borno</option>
															<option value="Cross River">Cross River</option>
															<option value="Delta">Delta</option>
															<option value="Ebonyi">Ebonyi</option>
															<option value="Edo">Edo</option>
															<option value="Ekiti">Ekiti</option>
															<option value="Enugu">Enugu</option>
															<option value="FCT - Abuja">FCT - Abuja</option>
															<option value="Gombe">Gombe</option>
															<option value="Imo">Imo</option>
															<option value="Jigawa">Jigawa</option>
															<option value="Kaduna">Kaduna</option>
															<option value="Kano">Kano</option>
															<option value="Katsina">Katsina</option>
															<option value="Kebbi">Kebbi</option>
															<option value="Kogi">Kogi</option>
															<option value="Kwara">Kwara</option>
															<option value="Lagos">Lagos</option>
															<option value="Nasarawa"></option>
															<option value="Niger">Nasarawa</option>
															<option value="Ogun">Ogun</option>
															<option value="Ondo"></option>
															<option value="Osun">Ondo</option>
															<option value="Oyo">Oyo</option>
															<option value="Plateau">Plateau</option>
															<option value="Rivers">Rivers</option>
															<option value="Sokoto">Sokoto</option>
															<option value="Taraba">Taraba</option>
															<option value="Yobe">Yobe</option>
															<option value="Zamfara">Zamfara</option>
													    </select>
														<label for="selectGender" class="text-dark fs-6">Select your state of origin</label>
														<div class="valid-feedback">
													    	Looks Good!
													    </div>
													    <div class="invalid-feedback">
													    	Please select your state of origin!
													    </div>
													</div>
													<div class=" col-md-6 form-floating mb-3">
														<input class="form-control" type="text" name="userCity" id="inputCity" placeholder="City" title="Kindly enter your City/Town" style="background-color: #18344E; color: #D9D9D9;" value="<?= $myCity; ?>">
														<label for="inputCity" class="text-dark fs-6">City/Town</label>
														<div class="valid-feedback">
													    	Looks Good!
													    </div>
													    <div class="invalid-feedback">
													    	Not Bad
													    </div>
													</div>
												</div>
													
												<!-- <div class=" col-sm-12 form-floating mb-3">
													<input class="form-control" type="email" name="userEmailAddress" id="inputEmail" placeholder="Email Address" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[c,o,m]{3}$" title="Kindly enter your valid email address" required readonly style="background-color: #18344E; color: #D9D9D9;">
													<label for="inputEmail" class="text-dark fs-6">Email address</label>
													<div class="valid-feedback" value="">
												    	Email Address seems valid!
												    </div>
												    <div class="invalid-feedback">
												    	Email Address seems invalid!
												    </div>
												</div> -->
												<div class=" col-sm-12 form-floating mb-3">
													<input class="form-control" type="tel" name="userMobileNumber" id="inputNumber" placeholder="Mobile Number" pattern="[0-9,+]+" title="Kindly enter your valid mobile numner" required pattern="[0-9,+]+" minlength="11" maxlength="14" style="background-color: #18344E; color: #D9D9D9;" value="<?= $myNumber; ?>">
													<label for="inputNumber" class="text-dark fs-6">Mobile Number</label>
													<div class="valid-feedback">
												    	Looks Good!
												    </div>
												    <div class="invalid-feedback">
												    	Mobile number looks invalid!
												    </div>
												</div>
												<div class="form-action d-flex justify-content-end">
													<?php
													if(isset($_GET['Account_Status'])){
														if($_GET['Account_Status'] == "Non_Activated"){
															?>
															<button class="btn btn-primary bg-gradient" type="submit" name="editProfile">
																Done
																<i class="bi bi-check-circle"></i>
															</button>
															<?php
														}
													}
													else{
														?>
														<button class="btn btn-primary bg-gradient" type="submit" name="editProfile">
															Edit
															<i class="bi bi-pencil"></i>
														</button>
														<?php
													}
													?>
												</div>
											</form>
										</div>
				        			</div>
								</div>
								<?php
							}
							elseif ($profileTab == "Privacy") {
								// IF AN NON-ACTIVATED USER TRY TO ACCESS THIS PAGE, THEY BE TAKEN BACK TO PROFILE-EDIT PAGE
								non_activated_user();
								?>
								<!-- PRIVACY SETTINGS -->
								<div class="profileBody" style="margin-top: 10rem;">
									<div class="card mt-2 mb-2">
				        				<div class="card-body">
				        					<div class="row profileHeading">
				        						<h3 class="card-title mb-5 mt-0 text-center">Privacy Settings</h3>
				        					</div>
				        					<div class="settingsBody p-1">
				        						<div class="birthDate d-flex justify-content-between mb-3">
				        							<h5>Date of Birth</h5>
				        							<div class="form-check form-switch">
				        								<input class="form-check-input form-control fs-4 birthDateSwitch" type="checkbox" role="switch" the-user="#" action="ActivateBirth" title="Allow or Disallow this data to be seen Public">
				        							</div>
				        						</div>
				        						<div class="emailAddress d-flex justify-content-between mb-3">
				        							<h5>Email Address</h5>
				        							<div class="form-check form-switch">
				        								<input class="form-check-input form-control fs-4 emailAddressSwitch" type="checkbox" role="switch" the-user="#" action="DeactivateEmail" title="Allow or Disallow this data to be seen Public" checked>
													</div>
				        						</div>
				        						<div class="mobileNumber d-flex justify-content-between mb-3">
				        							<h5>Mobile Number</h5>
				        							<div class="form-check form-switch">
												  		<input class="form-check-input form-control fs-4 mobileNumberSwitch" type="checkbox" role="switch" the-user="#" action="DeactivateNumber" title="Allow or Disallow this data to be seen Public" checked>
													</div>
				        						</div>
				        					</div>
										</div>
				        			</div>
								</div>
								<?php
							}
							elseif ($profileTab == "Delete") {								
								?>
								<!-- DELETE ACCOUNT -->
								<div class="profileBody" style="margin-top: 10rem;">
									<div class="card mt-2 mb-2">
				        				<div class="card-body">
				        					<div class="row profileHeading">
				        						<h3 class="card-title mb-5 mt-0 text-center">Deleting Account</h3>
				        					</div>
				        					<div class="accountDeletion p-1 text-center">
				        						<h4 class="text-danger">Warning!!!</h4>
				        						<p>Please be aware that, once your account is deleted, you're going to loose all your data as well, and you will not be able to get access to it ever again</p>
				        						<p class="text-warning">Are you sure you want to delete your account?</p>

				        						<div class="d-flex justify-content-end gap-2">
				        							<a href="profile.php?Profile=<?= $myUsername; ?>" class="btn btn-secondary" type="button" id="deleteDecline">Cancel <i class="bi bi-x-circle"></i> </a>
				        							<button class="btn btn-danger" type="button" data-bs-toggle="modal" data-bs-target="#deleteAccount<?= $myUniqueKey; ?>">Proceed <i class="bi bi-arrow-right-circle"></i></button>
				        						</div>
				        					</div>
										</div>
				        			</div>
								</div>
								<?php
							}
							elseif($profileTab == "SignOut"){								
								?>
								<!-- SIGN-OUT -->
								<div class="profileBody" style="margin-top: 10rem;">
									<div class="card mt-2 mb-2">
				        				<div class="card-body">
				        					<div class="row profileHeading">
				        						<h3 class="card-title mb-5 mt-0 text-center">Signing Out</h3>
				        					</div>
				        					<div class="signOut p-1 text-center">
				        						<h4 class="text-success">Farewell!!!</h4>
				        						<p>It's very nice have you here this time, hope to see you back soon. Farewell!</p>

				        						<div class="d-flex justify-content-end gap-2">
				        							<a href="signOut.php" class="btn btn-danger" type="button" id="signout">Sign-Out <i class="bi bi-door-open"></i></a>
				        						</div>
				        					</div>
										</div>
				        			</div>
								</div>
								<?php
							}
								?>
							</div>
						</div>
						<?php
					}
					?>
				</div>
			</div>
<?php
	include "incs/footer.php";
?>