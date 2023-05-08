<?php
if(isset($_POST['upload']))
{	
	//Photo Uploding Code Start
			
	$filename = $_FILES["photo"]["name"];  //Change FIle Name Only
	$file_basename = substr($filename, 0, strripos($filename, '.')); // get file extention
	$file_ext = substr($filename, strripos($filename, '.')); // get file name
	$filesize = $_FILES["photo"]["size"];  //Change FIle Name Only
	$allowed_file_types = array('.gif','.png','.JPG','.jpg','.PNG','.jpeg','.WebP');	

	if (in_array($file_ext,$allowed_file_types) && ($filesize < 200000000))
	{	
		
			$t=time();


		$newfilename = $file_basename. $t .'edu'. $file_ext;
		if (file_exists("../my_assets/" . $newfilename))  //Change FIle Root Only
		{
			// file already exists error
			echo "You have already uploaded this file.";
		}
		else
		{		
			move_uploaded_file($_FILES["photo"]["tmp_name"], "../my_assets/" . $newfilename); //Change FIle Name & Root Only
			//echo "Successfully Uploaded Student Pic.";		
		}
	}
	elseif (empty($file_basename))
	{	
		// file selection error
		echo "Please select a file to upload.";
	} 
	elseif ($filesize > 200000000)
	{	
		// file size error
		echo "The file you are trying to upload is too large.";
	}
	else
	{
		// file type error
		echo "Only these file typs are allowed for upload: " . implode(', ',$allowed_file_types);
		unlink($_FILES["file"]["tmp_name"]);
	}
	
$photo='assets/'.$newfilename;
	
	//Photo Uploding Code End
		
		
		
	
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "educavo";

$course_title = $_POST['course_title'];
$course_fee = $_POST['course_fee'];
$student_number = $_POST['student_number'];
$course_lesson = $_POST['course_lesson'];

$date = date('d-m-y');
$datetime = time();

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "insert into add_explore_popular_courses (id,course_title,photo,course_fee,student_number,date,datetime,course_lesson) VALUES (id,'$course_title','$photo','$course_fee','$student_number','$date','$datetime','$course_lesson')";

if ($conn->query($sql) === TRUE) {
header("location:./add_explore_popular_courses.php?msg=success");
} else {
header("location:./add_explore_popular_courses.php?msg=error");
}

$conn->close();
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<title>Add Explore Popular Courses</title>
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
					<form class="space-y-5" action="./add_explore_popular_courses.php" method="post" enctype="multipart/form-data">
					  <div>
							<span class="text-black-dark text-[110px] inline-block mb-3">Enter Popular Course Photo</span>
							<input required type="file" name ="photo" placeholder="Enter Course Photo Link" class="form-input" />
						</div>
						<div>
							<span class="text-black-dark text-[110px] inline-block mb-3">Enter Popular Course Title</span>
							<input type="text" name ="course_title" placeholder="Enter Course Name" class="form-input" />
						</div>
						<div>
							<span class="text-black-dark text-[110px] inline-block mb-3">Enter Fee</span>
							<input type="text" name ="course_fee" placeholder="Enter Course Name" class="form-input" />
						</div>
						<div>
							<span class="text-black-dark text-[110px] inline-block mb-3">Enter Student Number</span>
							<input type="text" name ="student_number" placeholder="Enter Course Name" class="form-input" />
						</div>
					  	<div>
							<span class="text-black-dark text-[110px] inline-block mb-3">Enter Course Lesson</span>
							<input type="text" name ="course_lesson" placeholder="Enter Course Name" class="form-input" />
						</div>
					  
						 
						<button type="submit" name= "upload" class="btn btn-primary !mt-6">Submit</button>
					</form>
				</div>
			</div>

		</div>
	</div>
</div>

   <?php 
				
				if(isset($_GET['msg']))
				{
					
	?>				


<script>
function myFunction() {
  alert("<?php echo $_GET['msg']; ?>");
}
myFunction();
</script>

     <?php	
					
				}
   
   
   ?>
   

<?php include("./include/js.php")?>

</body>
</html>