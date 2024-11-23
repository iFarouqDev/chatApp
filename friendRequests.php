<?php
	include "incs/preAuthHeader.php";
?>
<body>
	<main>
		<div class="container-fluid">
			
			<!-- DIVISION/LAYOUT OF PAGES -->
			<div class="row layout">
				
				<!-- MENUBAR/MENU LIST -->
				<?php
					include "incs/menuBar.php";
				?>

				<title>Friend Requests | User's Username</title>
				<!-- SELECTED MENU DISPLAY -->
				<div class="subMenu">
					<div class="subMenuHeading position-relative">
						<nav class="navbar navbar-expand-lg">
							<div class="container-fluid">
								<a class="navbar-brand" href="friendRequests.php" title="Friend Requests">Friend Requests</a>

								<!-- NEW CHAT BUTTON -->
								<ul class="navbar-nav newChat d-flex ms-auto mb-3 mb-lg-0 z-3 position-absolute end-0 top-0" title="New Chat">
									<li class="nav-item dropstart">
										<a class="nav-link dropdown-toggle float-end px-3" role="button" data-bs-toggle="dropdown" data-bs-display="static" arial-expanded="false" href="#">
											<i class="bi bi-pencil-square"></i>
										</a>
									</li>

									<!-- NEW CHAT DROP-DOWN MENU -->
									<ul class="dropdown-menu" id="new-friendRequests">
										<a class="navbar-brand px-2" href="friendRequests.php" title="Friend Requests">New Chat</a>
										<form class="d-flex col-sm-12 mb-3" role="search" placeholder="Search" id="searchNewChat" arial-lable="Search" arial-describeby="chatSearch" style="background-color: #18344E;">
										</form>
										<div class="theNewSeachChat">
											<li class="nav-item">
												<a class="nav-link" href="friendRequests.php">
													<div class="card">
														<div class="row card-body">
															<div class="listIcon col-sm-2">
																<i class="bi bi-person-circle fs-1"></i>
															</div>
															<div class="listBody col-sm-10">
																<h6 class="card-title">
																	John Due (Johny)
																</h6>
																<p class="card-text">
																	<i class="bi bi-geo-alt"></i>
																	City, State
																</p>
															</div>
														</div>
													</div>
												</a>
											</li>
										</div>
									</ul> 
								</ul>
							</div>
						</nav>

						<form class="d-flex col-sm-12 chatSearch mb-3" role="search" onkeydown="if(event.keyCode === 13) { return false; }">
							<div class="input-group">
								<span class="input-group-text" type="reset"><i class="bi bi-search"></i></span>
								<input class="form-control" type="search" placeholder="Search" id="searchChat" arial-label="Search" arial-describedby="chatSearch" style="background-color: #18344E;">
							</div>
						</form>
					</div>

					<div class="subMenuBody" id="the-chat-list">
						<ul class="navbar-nav mb-lg-0 searched-chat-list">
							<!--  -->
						</ul>
						<ul class="navbar-nav mb-lg-0 friendRequests-list">
							<li class="nav-item">
								<a class="nav-link" href="friendRequests.php">
									<div class="card">
										<div class="row card-body">
											<div class="listIcon col-sm-2">
												<i class="bi bi-person-circle"></i>
											</div>
											<div class="listBody col-sm-10">
												<h6 class="card-title">
													John Due (Johny)
												</h6>
												<p class="card-text">
													<i class="bi bi-geo-alt"></i>
													City, State
												</p>
											</div>
										</div>
									</div>
								</a>
							</li>
						</ul>

						<p class="encMessage text-center"><i class="bi bi-lock"></i> Your personal messages are end-to-end encrypted</p>
					</div>
				</div>

				<!-- SELECTED BODY DISPLAY -->
				<div class="nonChatContainer position-relative">
					<div class="chatBodyAlt position-absolute start-50 top-50 translate-middle text-center d-none">
						<i class="bi bi-chat-dots bannerIcon fs-1"></i>
						<h3 class="bannerText">chatApp</h3>
						<p class="encMessage"><i class="bi bi-lock"></i> personal messages are end-to-end encrypted</p>
					</div>
					<div class="selectedNonChat">
						<!-- CHAT HEADING -->
						<div class="selectedChatHeading position-relative">
							<nav class="navbar navbar-expand-lg">
								<div class="container-fluid">
									<a class="navbar-brand btn btn-outline-secondary" href="#">
										<!-- <i class="bi bi-person-circle"></i> -->
										<i class="bi bi-reply fs-4 fs-2 fw-bold text-light"></i>
									</a>
								</div>
							</nav>
						</div>
						
						<!-- FRIEND'S PROFILE BODY -->
						<div class="profileBody">
							<div class="profileIcon">
								<!-- <a href="#">
									<img src="#" class="mx-auto img-thumbnail img-outline-secondary" alt="Friend's Profile Photo">
								</a> -->
								<i class="bi bi-person-circle"></i>
							</div>
							<div class="card mt-2 mb-2">
		        				<div class="card-body">
		        					<div class="row profileHeading">
		        						<div class="profileTitle col-sm-6 text-center">
		        							<h5 class="card-title">John Due</h5>
		        							<h6 class="card-title">
		        								(Johny)
		        								<span class="userCount bg-secondary bg-gradient text-secondary-emphasis p-1 rounded">
		        									@32
		        								</span>
		        							</h6>

		        						</div>
		        						<div class="profileButtons col-sm-6 d-grid gap-2 d-lg-block">
		        							<!-- FRIEND REQUEST ACTION BUTTONS -->
	        								<div class="d-grid gap-2 justify-content-end gap-2 mb-2 userActions" my-key="#" user-username="#">
	        									<div class="dropdown">
													<button class="btn btn-sm btn-secondary dropdown-toggle w-100 mx-0" type="button" role="button" data-bs-toggle="dropdown" aria-expanded="false">
														<i class="bi bi-person-check"></i> Friend Request
													</button>
													<ul class="dropdown-menu">
											            <li>
											            	<a class="dropdown-item link-warning blockFriend" the-sender="#" the-receiver="#" the-blocker="#" the-blockee="#">
											            		<i class="bi bi-person-slash"></i> Block User
											            	</a>
											            </li>
											            <li>
											            	<a class="dropdown-item link-danger unfriendFriend" the-sender="#" the-receiver="#" the-unfriender="#" the-unfriendee="#">
											            		<i class="bi bi-person-x"></i> Unfriend User
											            	</a>
											            </li>
											        </ul>
												</div>
												<a href="chats.php?User=#" class="btn btn-sm btn-primary w-100 mx-0" type="button">
													<i class="bi bi-chat"></i> Message
												</a>
											</div>
		        						</div>
		        					</div>
		        					
		        					<hr class="border border-2">
		        					<div class="row profileDetails">
		        						<div class="profileBasics col-sm-6 mb-4">
		        							<h6 class="card-title mb-3">Basic Info.</h6>
		        							<p class="card-text">
		        								<big class="fw-bolder fs-6">Username:</big> Johny
		        							</p>
		        							<p class="card-text">
		        								<big class="fw-bolder">
		        									<i class="bi bi-gender-ambiguous fs-5"></i>
		        								</big> Male
		        							</p>
		        							<p class="card-text"><big class="fw-bolder"><i class="bi bi-cake2 fs-5"></i></big> 
		        								<small class='text-warning'>Private</small>
		        							</p>
		        						</div>
		        						<div class="profileAddress col-sm-6 mb-4">
		        							<h6 class="card-title mb-3">Place From</h6>
		        							<p class="card-text">
		        								<big class="fw-bolder"><i class="bi bi-globe fs-5"></i></big> Nigeria
		        							</p>
		        							<p class="card-text">
		        								<big class="fw-bolder"><i class="bi bi-geo-alt fs-5"></i></big> City, State
		        							</p>
		        						</div>
		        						<div class="profileContact col-sm-6 mb-4">
		        							<h6 class="card-title mb-3">Contact Info.</h6>
		        							<p class="card-text"><big class="fw-bolder"><i class="bi bi-envelope fs-5"></i></big>
		        								johDue@gmail.com
		        							</p>
		        							<p class="card-text"><big class="fw-bolder"><i class="bi bi-telephone fs-5"></i></big> 
		        								+234 8043234543
		        							</p>
		        						</div>
		        					</div>
								</div>
		        			</div>
						</div>
					</div>
				</div>

				<div class="compressedLayout">
					<!-- SELECTED MENU DISPLAY -->
					<div class="comressedSubMenu d-none">
						<div class="subMenuHeading position-relative">
							<nav class="navbar navbar-expand-lg">
								<div class="container-fluid">
									<a class="navbar-brand" href="friendRequests.php" title="Friend Requests">Friend Requests</a>

									<!-- NEW CHAT BUTTON -->
									<ul class="navbar-nav newChat d-flex ms-auto mb-3 mb-lg-0 z-3 position-absolute end-0 top-0" title="New Chat">
										<li class="nav-item dropstart">
											<a class="nav-link dropdown-toggle float-end px-3" role="button" data-bs-toggle="dropdown" data-bs-display="static" arial-expanded="false" href="#">
												<i class="bi bi-pencil-square"></i>
											</a>
										</li>

										<!-- NEW CHAT DROP-DOWN MENU -->
										<ul class="dropdown-menu" id="new-friendRequests">
											<a class="navbar-brand px-2" href="friendRequests.php" title="Friend Requests">New Chat</a>
											<form class="d-flex col-sm-12 mb-3" role="search" placeholder="Search" id="searchNewChat" arial-lable="Search" arial-describeby="chatSearch" style="background-color: #18344E;">
											</form>
											<div class="theNewSeachChat">
												<li class="nav-item">
													<a class="nav-link" href="friendRequests.php">
														<div class="card">
															<div class="row card-body">
																<div class="listIcon col-sm-2">
																	<i class="bi bi-person-circle fs-1"></i>
																</div>
																<div class="listBody col-sm-10">
																	<h6 class="card-title">
																		John Due (Johny)
																	</h6>
																	<p class="card-text">
																		<i class="bi bi-geo-alt"></i>
																		City, State
																	</p>
																</div>
															</div>
														</div>
													</a>
												</li>
											</div>
										</ul> 
									</ul>
								</div>
							</nav>

							<form class="d-flex col-sm-12 chatSearch mb-3" role="search" onkeydown="if(event.keyCode === 13) { return false; }">
								<div class="input-group">
									<span class="input-group-text" type="reset"><i class="bi bi-search"></i></span>
									<input class="form-control" type="search" placeholder="Search" id="searchChat" arial-label="Search" arial-describedby="chatSearch" style="background-color: #18344E;">
								</div>
							</form>
						</div>

						<div class="subMenuBody" id="the-chat-list">
							<ul class="navbar-nav mb-lg-0 searched-chat-list">
								<!--  -->
							</ul>
							<ul class="navbar-nav mb-lg-0 friendRequests-list">
								<li class="nav-item">
									<a class="nav-link" href="friendRequests.php">
										<div class="card">
											<div class="row card-body">
												<div class="listIcon col-sm-2">
													<i class="bi bi-person-circle"></i>
												</div>
												<div class="listBody col-sm-10">
													<h6 class="card-title">
														John Due (Johny)
													</h6>
													<p class="card-text">
														<i class="bi bi-geo-alt"></i>
														City, State
													</p>
												</div>
											</div>
										</div>
									</a>
								</li>
							</ul>

							<p class="encMessage text-center"><i class="bi bi-lock"></i> Your personal messages are end-to-end encrypted</p>
						</div>
					</div>

					<!-- SELECTED BODY DISPLAY -->
					<div class="compressedNonChatContainer position-relative">
						<div class="selectedNonChat">
							<!-- CHAT HEADING -->
							<div class="selectedChatHeading position-relative">
								<nav class="navbar navbar-expand-lg">
									<div class="container-fluid">
										<a class="navbar-brand btn btn-outline-secondary" href="#">
											<!-- <i class="bi bi-person-circle"></i> -->
											<i class="bi bi-reply fs-4 fs-2 fw-bold text-light"></i>
										</a>
									</div>
								</nav>
							</div>
							
							<!-- FRIEND'S PROFILE BODY -->
							<div class="profileBody">
								<div class="profileIcon">
									<!-- <a href="#">
										<img src="#" class="mx-auto img-thumbnail img-outline-secondary" alt="Friend's Profile Photo">
									</a> -->
									<i class="bi bi-person-circle"></i>
								</div>
								<div class="card mt-2 mb-2">
			        				<div class="card-body">
			        					<div class="row profileHeading">
			        						<div class="profileTitle col-sm-6 text-center">
			        							<h5 class="card-title">John Due</h5>
			        							<h6 class="card-title">
			        								(Johny)
			        								<span class="userCount bg-secondary bg-gradient text-secondary-emphasis p-1 rounded">
			        									@32
			        								</span>
			        							</h6>

			        						</div>
			        						<div class="profileButtons col-sm-6 d-grid gap-2 d-lg-block">
			        							<!-- FRIEND REQUEST ACTION BUTTONS -->
		        								<div class="d-grid gap-2 justify-content-end gap-2 mb-2 userActions" my-key="#" user-username="#">
		        									<div class="dropdown">
														<button class="btn btn-sm btn-secondary dropdown-toggle w-100 mx-0" type="button" role="button" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="bi bi-person-check"></i> Friend Request
														</button>
														<ul class="dropdown-menu">
												            <li>
												            	<a class="dropdown-item link-warning blockFriend" the-sender="#" the-receiver="#" the-blocker="#" the-blockee="#">
												            		<i class="bi bi-person-slash"></i> Block User
												            	</a>
												            </li>
												            <li>
												            	<a class="dropdown-item link-danger unfriendFriend" the-sender="#" the-receiver="#" the-unfriender="#" the-unfriendee="#">
												            		<i class="bi bi-person-x"></i> Unfriend User
												            	</a>
												            </li>
												        </ul>
													</div>
													<a href="chats.php?User=#" class="btn btn-sm btn-primary w-100 mx-0" type="button">
														<i class="bi bi-chat"></i> Message
													</a>
												</div>
			        						</div>
			        					</div>
			        					
			        					<hr class="border border-2">
			        					<div class="row profileDetails">
			        						<div class="profileBasics col-sm-6 mb-4">
			        							<h6 class="card-title mb-3">Basic Info.</h6>
			        							<p class="card-text">
			        								<big class="fw-bolder fs-6">Username:</big> Johny
			        							</p>
			        							<p class="card-text">
			        								<big class="fw-bolder">
			        									<i class="bi bi-gender-ambiguous fs-5"></i>
			        								</big> Male
			        							</p>
			        							<p class="card-text"><big class="fw-bolder"><i class="bi bi-cake2 fs-5"></i></big> 
			        								<small class='text-warning'>Private</small>
			        							</p>
			        						</div>
			        						<div class="profileAddress col-sm-6 mb-4">
			        							<h6 class="card-title mb-3">Place From</h6>
			        							<p class="card-text">
			        								<big class="fw-bolder"><i class="bi bi-globe fs-5"></i></big> Nigeria
			        							</p>
			        							<p class="card-text">
			        								<big class="fw-bolder"><i class="bi bi-geo-alt fs-5"></i></big> City, State
			        							</p>
			        						</div>
			        						<div class="profileContact col-sm-6 mb-4">
			        							<h6 class="card-title mb-3">Contact Info.</h6>
			        							<p class="card-text"><big class="fw-bolder"><i class="bi bi-envelope fs-5"></i></big>
			        								johDue@gmail.com
			        							</p>
			        							<p class="card-text"><big class="fw-bolder"><i class="bi bi-telephone fs-5"></i></big> 
			        								+234 8043234543
			        							</p>
			        						</div>
			        					</div>
									</div>
			        			</div>
							</div>
						</div>
					
					</div>
				</div>
			</div>

<?php
	include "incs/footer.php";
?>