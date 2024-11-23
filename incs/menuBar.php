<div class="menuBar position-relative">
	<ul class="nav flex-column position-absolute start-0 top-0">
	    <li class="nav-item">
	    	<a class="nav-link brand" aria-current="page" href="#">chatApp</a>
	    </li>
	</ul>

	<ul class="nav menuBody flex-column mt-5">
		<li class="nav-item" title="Chats">
			<a class="nav-link position-relative" href="chats.php">
				<i class="menuIcon bi bi-chat"></i>
				<span class="menuText">Chats</span>
				<span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" id="menuChatCount">
					999
					<span class="visually-hidden">Unread messages count</span>
				</span>
			</a>
		</li>
		<li class="nav-item" title="Friends">
			<a class="nav-link" href="friends.php">
				<i class="menuIcon bi bi-people"></i>
				<span class="menuText">Friends</span>
			</a>
		</li>
		<li class="nav-item" title="Friend Requests">
			<a class="nav-link position-relative" href="friendRequests.php">
				<i class="menuIcon bi bi-person-exclamation"></i>
				<span class="menuText">Friend Requests</span>
				<span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" id="menuChatCount">
					999
					<span class="visually-hidden">Friend requests count</span>
				</span>
			</a>
		</li>
		<li class="nav-item" title="Search">
			<a class="nav-link" href="search.php">
				<i class="menuIcon bi bi-search"></i>
				<span class="menuText">Seach</span>
			</a>
		</li>
	</ul>
	<!-- USER PROFILE BUTTON -->
	<ul class="nav menuFooter flex-column position-absolute start-0 bottom-0 mx-2 w-100">
		<li class="nav-item" title=Profile>
			<a class="nav-link" href="profile.php">
				<i class="bi bi-person"></i> 
				<span class="menuText">Profile</span>
			</a>
		</li>
	</ul>
</div>