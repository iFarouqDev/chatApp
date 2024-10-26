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

	<!-- SYSTEM CSS FILES -->
	<link rel="stylesheet"type="text/css" href="cssFiles/index.css">
	<link rel="stylesheet" type="text/css" href="cssFiles/menuBar.css">
	<link rel="stylesheet" type="text/css" href="cssFiles/subMenu.css">
	<link rel="stylesheet" type="text/css" href="cssFiles/chatContainer.css">

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
			
			<!-- DIVISION/LAYOUT OF PAGES -->
			<div class="row layout">
				
				<!-- MENUBAR/MENU LIST -->
				<div class="menuBar position-relative">
					<ul class="nav flex-column position-absolute start-0 top-0">
					    <li class="nav-item">
					    	<a class="nav-link brand" aria-current="page" href="#">chatApp</a>
					    </li>
					</ul>

					<ul class="nav menuBody flex-column mt-5">
						<li class="nav-item" title="Chats">
							<a class="nav-link postion-relative" href="chats.php">
								<i class="menuIcon bi bi-chat"></i>
								<span class="menuText">Chats</span>
								<span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" id="menuChatCount">
									999
									<span class="visually-hidden">Unread messages count</span>
								</span>
							</a>
						</li>
						<li class="nav-item" title="Friends">
							<a class="nav-link postion-relative" href="#">
								<i class="menuIcon bi bi-people"></i>
								<span class="menuText">Friends</span>
							</a>
						</li>
						<li class="nav-item" title="Friend Requests">
							<a class="nav-link postion-relative" href="#">
								<i class="menuIcon bi bi-person-exclamation"></i>
								<span class="menuText">Friend Requests</span>
								<span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" id="menuChatCount">
									999
									<span class="visually-hidden">Friend requests count</span>
								</span>
							</a>
						</li>
						<li class="nav-item" title="Search">
							<a class="nav-link postion-relative" href="#">
								<i class="menuIcon bi bi-people"></i>
								<span class="menuText">Seach</span>
							</a>
						</li>
					</ul>
					<!-- USER PROFILE BUTTON -->
					<ul class="nav menuFooter flex-column position-absolute start-0 bottom-0 mx-2 w-100">
						<li class="nav-item" title=Profile>
							<a class="nav-link" href="#">
								<i class="bi bi-person"></i> 
								<span class="menuText">Profile</span>
							</a>
						</li>
					</ul>
				</div>

				<!-- SELECTED MENU DISPLAY -->
				<div class="subMenu">
					<div class="subMenuHeading position-relative">
						<nav class="navbar navbar-expand-lg">
							<div class="container-fluid">
								<a class="navbar-brand" href="chats.php" title="Chats">Chats</a>

								<!-- NEW CHAT BUTTON -->
								<ul class="navbar-nav newChat d-flex ms-auto mb-3 mb-lg-0 z-3 position-absolute end-0 top-0" title="New Chat">
									<li class="nav-item dropstart">
										<a class="nav-link dropdown-toggle float-end px-3" role="button" data-bs-toggle="dropdown" data-bs-display="static" arial-expanded="false" href="#">
											<i class="bi bi-pencil-square"></i>
										</a>
									</li>

									<!-- NEW CHAT DROP-DOWN MENU -->
									<ul class="dropdown-menu" id="new-chats">
										<a class="navbar-brand px-2" href="chats.php" title="Chats">New Chat</a>
										<form class="d-flex col-sm-12 mb-3" role="search" placeholder="Search" id="searchNewChat" arial-lable="Search" arial-describeby="chatSearch" style="background-color: #18344E;">
										</form>
										<div class="theNewSeachChat">
											<li class="nav-item">
												<a class="nav-link" href="chats.php">
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
						<ul class="navbar-nav mb-lg-0 chats-list">
							<li class="nav-item">
								<a class="nav-link" href="chats.php">
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
				<div class="chatContainer position-relative">
					<div class="chatBodyAlt position-absolute start-50 top-50 translate-middle text-center">
						<i class="bi bi-chat-dots bannerIcon"></i>
						<h3 class="bannerText">chatApp</h3>
						<p class="encMessage"><i class="bi bi-lock"></i> personal messages are end-to-end encrypted</p>
					</div>
					<div class="selectedChat">
						<!-- CHAT HEADING -->
						<div class="selectedChatHeading position-relative">
							<nav class="navbar navbar-expand-lg">
								<div class="container-fluid">
									<a class="navbar-brand position-relative" href="chats.php">
										<i class="bi bi-person-circle"></i>
									</a>
									<ul class="navbar d-flex ms-auto mb-3 mb-lg-0 z-2 position-absolute end-0 top-0">
										<li class="nav-item dropstart">
											<a class="nav-link dropdown-toggle float-end" role="button" data-bs-toggle="dropdown" arial-expanded="false" href="#">
												<i class="bi bi-three-dots-vertical"></i>
											</a>
											<ul class="dropdown-menu chatMenu">
												<li>
													<a class="dropdown-item link-primary" href="#">
														<i class="bi bi-person-circle"></i> View Profile
													</a>
												</li>
												<li>
													<a class="dropdown-item link-warning" href="#">
														<i class="bi bi-person-slash"></i> Block User
													</a>
												</li>
												<li>
													<a class="dropdown-item link-danger" href="#">
														<i class="bi bi-person-x"></i> Unfriend User
													</a>
												</li>
											</ul>
										</li>
									</ul>
								</div>
							</nav>
						</div>
						<!-- BACK BUTTON -->
						<div class="backButton position-relative z-3">
							<a class="btn btn-outline-secondary position-absolute top-0 start-0" href="chats.php" title="">
								<i class="bi bi-reply fs-4 fs-2 fw-bold text-light"></i>
							</a>
						</div>
						<!-- CHAT BODY -->
						<div class="selectedChatBody">

							<div class="chatBox">
								
								<!-- SENT TEXT -->
								<div class="card textSent mt-2 mb-2 ms-auto">
									<div class="row card-body">
										<!-- CHAT MENU -->
										<ul class="navbar-nav mb-lg-0 position-relative">
											<li class="nav-item dropstart position-absolute end-0 top-0" style="margin-top: -1.5rem">
												<a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="#">
													<i class="bi bi-three-dots-vertical"></i>
												</a>
												<ul class="dropdown-menu textMenu">
													<li>
														<a class="dropdown-item link-secondary replyToThis" href="#">
															<i class="bi bi-reply"></i> Reply
														</a>
													</li>
													<li>
														<a class="dropdown-item link-secondary editThis" href="#">
															<i class="bi bi-pencil"></i> Edit
														</a>
													</li>
													<li>
														<a class="dropdown-item link-secondary deleteThis" href="#">
															<i class="bi bi-trash"></i> Delete
														</a>
													</li>
												</ul>
											</li>
										</ul>
										<p class="card-text">
											Hello Buddy...
										</p>
										<span class="">
											<small class="card-text chatTime float-end" style="margin-top: -1rem; margin-bottom: -1rem;">
												<small class="fst-italic text-warning">Edited </small>

												21:32 
												<i class="bi bi-check2"></i>
												<i class="bi bi-check2-all"></i>
											</small>
										</span>
									</div>
								</div>

								<div class="card textSent mt-2 mb-2 ms-auto">
									<div class="row card-body">
										<!-- CHAT MENU -->
										<ul class="navbar-nav mb-lg-0 position-relative">
											<li class="nav-item dropstart position-absolute end-0 top-0" style="margin-top: -1.5rem">
												<a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="#">
													<i class="bi bi-three-dots-vertical"></i>
												</a>
												<ul class="dropdown-menu textMenu">
													<li>
														<a class="dropdown-item link-secondary replyToThis" href="#">
															<i class="bi bi-reply"></i> Reply
														</a>
													</li>
													<li>
														<a class="dropdown-item link-secondary editThis" href="#">
															<i class="bi bi-pencil"></i> Edit
														</a>
													</li>
													<li>
														<a class="dropdown-item link-secondary deleteThis" href="#">
															<i class="bi bi-trash"></i> Delete
														</a>
													</li>
												</ul>
											</li>
										</ul>
										<p class="card-text">
											How're you doing tonight?
										</p>
										<span class="">
											<small class="card-text chatTime float-end" style="margin-top: -1rem; margin-bottom: -1rem;">
												<small class="fst-italic text-warning">Edited </small>

												21:32 
												<i class="bi bi-check2"></i>
												<i class="bi bi-check2-all"></i>
											</small>
										</span>
									</div>
								</div>

								<!-- RECEIVED TEXT -->
								<div class="card textReceived mt-2 mb-2 ms-auto">
									<div class="row card-body">
										<!-- REPLY -->
										<div class="reply mb-3" style="margin-top: -0.8rem;">
											<h5 class="card-title text-warning-emphasis">My Friend</h5>
											<p class="card-text">Hello Buddy...</p>
										</div>

										<!-- CHAT MENU -->
										<ul class="navbar-nav mb-lg-0 position-relative">
											<li class="nav-item dropstart position-absolute end-0 top-0" style="margin-top: -1.5rem">
												<a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="#">
													<i class="bi bi-three-dots-vertical"></i>
												</a>
												<ul class="dropdown-menu textMenu">
													<li>
														<a class="dropdown-item link-secondary replyToThis" href="#">
															<i class="bi bi-reply"></i> Reply
														</a>
													</li>
												</ul>
											</li>
										</ul>
										<p class="card-text">
											Hell Man
										</p>
										<span class="">
											<small class="card-text chatTime float-end" style="margin-top: -1rem; margin-bottom: -1rem;">
												<small class="fst-italic text-warning">Edited </small>

												21:32 
											</small>
										</span>
									</div>
								</div>
								<div class="card textReceived mt-2 mb-2 ms-auto">
									<div class="row card-body">
										<!-- REPLY -->
										<div class="reply mb-3" style="margin-top: -0.8rem;">
											<h5 class="card-title text-warning-emphasis">My Friend</h5>
											<p class="card-text">How're you doing tonight?</p>
										</div>

										<!-- CHAT MENU -->
										<ul class="navbar-nav mb-lg-0 position-relative">
											<li class="nav-item dropstart position-absolute end-0 top-0" style="margin-top: -1.5rem">
												<a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="#">
													<i class="bi bi-three-dots-vertical"></i>
												</a>
												<ul class="dropdown-menu textMenu">
													<li>
														<a class="dropdown-item link-secondary replyToThis" href="#">
															<i class="bi bi-reply"></i> Reply
														</a>
													</li>
												</ul>
											</li>
										</ul>
										<p class="card-text">
											I'm doing well, thanks. How about you?
										</p>
										<span class="">
											<small class="card-text chatTime float-end" style="margin-top: -1rem; margin-bottom: -1rem;">
												<small class="fst-italic text-warning">Edited </small>
												21:32 
											</small>
										</span>
									</div>
								</div>
							</div>
							<p class="encMessage text-center text-warning mt-2">
								<i class="bi bi-lock"></i> Messages are end-to-end encrypted. No one outside of this chat, not even itChat can read them.
							</p>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
</body>
</html>
<script type="text/javascript" src="jsFiles/formValidator.js"></script>