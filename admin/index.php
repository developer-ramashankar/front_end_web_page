<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<title>Admin page</title>
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
					<div class="mb-6 grid gap-6 sm:grid-cols-2 xl:grid-cols-3">
						<div class="panel h-full sm:col-span-2 xl:col-span-1">
							<div class="mb-5 flex items-center">
								<h5 class="text-lg font-semibold dark:text-white-light">
									Daily Sales  
								</h5>  
							</div>
							<div>  
							</div>
						</div>
						<div class="panel h-full">
							<div class="mb-5 flex items-center dark:text-white-light">
								<h5 class="text-lg font-semibold">Summary</h5>
								<div x-data="dropdown" @click.outside="open = false" class="dropdown ltr:ml-auto rtl:mr-auto">
								   
								  
								</div>
							</div>
						 
						</div>
						   <div class="panel h-full sm:col-span-2 xl:col-span-1">
							<div class="mb-5 flex items-center">
								<h5 class="text-lg font-semibold dark:text-white-light">
									Daily Sales  
								</h5>  
							</div>
							<div>  
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>

<?php include("./include/js.php")?>

</body>
</html>
