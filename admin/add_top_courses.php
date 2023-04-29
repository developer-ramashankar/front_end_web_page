<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<title>Add Top Courses</title>
	   <?php include("./include/stylesheet.php")?>
</head>
<body
x-data="main"
class="relative overflow-x-hidden font-nunito text-sm font-normal antialiased"
:class="[ $store.app.sidebar ? 'toggle-sidebar' : '', $store.app.theme, $store.app.menu, $store.app.layout,$store.app.rtlClass]">
        
<div x-cloak class="fixed inset-0 z-50 bg-[black]/60 lg:hidden" :class="{'hidden' : !$store.app.sidebar}" @click="$store.app.toggleSidebar()"></div>
<div class="main-container min-h-screen text-black dark:text-white-dark" :class="[$store.app.navbar]">
	<!-- start sidebar section -->
	<div :class="{'dark text-white-dark' : $store.app.semidark}">
	   <?php include("./include/navbar.php")?>
	</div>

	<div class="main-content">
	<?php include("./include/header.php")?>
		<div class="animate__animated p-6" :class="[$store.app.animation]">
			<!-- start main content section -->
			<div x-data="sales">
				<div class="pt-5">
				 
				</div>
			</div>

		</div>
	</div>
</div>

<?php include("./include/js.php")?>

</body>
</html>
