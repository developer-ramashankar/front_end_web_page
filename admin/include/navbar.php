 <nav x-data="sidebar" class="sidebar fixed top-0 bottom-0 z-50 h-full min-h-screen w-[260px] shadow-[5px_0_25px_0_rgba(94,92,154,0.1)] transition-all duration-300">
	<div class="h-full bg-white dark:bg-[#0e1726]">
		<div class="flex items-center justify-between px-4 py-3">
			<a href="#" class="main-logo flex shrink-0 items-center">
				<img class="ml-[5px] w-8 flex-none" src="assets/images/logo.svg" alt="image" />
				<span class="align-middle text-2xl font-semibold ltr:ml-1.5 rtl:mr-1.5 dark:text-white-light lg:inline">VRISTO</span>
			</a>
			<a
				href="javascript:;"
				class="collapse-icon flex h-8 w-8 items-center rounded-full transition duration-300 hover:bg-gray-500/10 rtl:rotate-180 dark:text-white-light dark:hover:bg-dark-light/10"
				@click="$store.app.toggleSidebar()"
			>
			 
				<i class="fa-solid fa-arrow-up-from-bracket fa-rotate-270"></i>
			</a>
		</div>
		<ul
			class="perfect-scrollbar relative h-[calc(100vh-80px)] space-y-0.5 overflow-y-auto overflow-x-hidden p-4 py-0 font-semibold"
			x-data="{ activeDropdown: 'dashboard' }"
		>
			<li class="menu nav-item">
				<button
					type="button"
					class="nav-link group"
					:class="{'active' : activeDropdown === 'dashboard'}"
					@click="activeDropdown === 'dashboard' ? activeDropdown = null : activeDropdown = 'dashboard'"
				>
					<div class="flex items-center">
					<a href="index.php">
				<i class="fa-solid fa-house" style="color: #8c95a6;"></i>
						<span class="text-black ltr:pl-3 rtl:pr-3 dark:text-[#506690] dark:group-hover:text-white-dark">Dashboard</span>
					</div>
					</a>
				  
				</button>
		  
			</li>

			<h2 class="-mx-4 mb-1 flex items-center bg-white-light/30 py-3 px-7 font-extrabold uppercase dark:bg-dark dark:bg-opacity-[0.08]">
				<span>Home Page</span>
			</h2>

			<li class="nav-item">
				<ul>
					<li class="nav-item">
						<a href="add_top_courses.php" class="group">
							<div class="flex items-center">
								<i class="fa-solid fa-pen-to-square"></i>
								<span class="text-black ltr:pl-3 rtl:pr-3 dark:text-[#506690] dark:group-hover:text-white-dark">Add Top Courses</span>
							</div>
						</a>
					</li>
				 <li class="nav-item">
						<a href="apps-mailbox.html" class="group">
							<div class="flex items-center">
								<i class="fa-solid fa-pen-to-square"></i>
								<span class="text-black ltr:pl-3 rtl:pr-3 dark:text-[#506690] dark:group-hover:text-white-dark">Top Courses List</span>
							</div>
						</a>
					</li>
				</ul>
			</li>
			 <h2 class="-mx-4 mb-1 flex items-center bg-white-light/30 py-3 px-7 font-extrabold uppercase dark:bg-dark dark:bg-opacity-[0.08]">
				<span>Home Page</span>
			</h2>
			<li class="nav-item">
				<ul>
					<li class="nav-item">
						<a href="apps-mailbox.html" class="group">
							<div class="flex items-center">
								<i class="fa-solid fa-pen-to-square"></i>
								<span class="text-black ltr:pl-3 rtl:pr-3 dark:text-[#506690] dark:group-hover:text-white-dark">Top Course</span>
							</div>
						</a>
					</li>
				 <li class="nav-item">
						<a href="apps-mailbox.html" class="group">
							<div class="flex items-center">
								<i class="fa-solid fa-pen-to-square"></i>
								<span class="text-black ltr:pl-3 rtl:pr-3 dark:text-[#506690] dark:group-hover:text-white-dark">Top Course</span>
							</div>
						</a>
					</li>
				</ul>
			</li>
		</ul>
	</div>
</nav>