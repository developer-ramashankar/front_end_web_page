<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "educavo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM add_top_courses";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
   ?>

<div class="col-lg-4 col-md-6 mb-30">
	<div class="categories-items">
		<div class="cate-images">
			<a href="#"><img src="../my_assets/2.jpg" alt=""></a>
		</div>
		<div class="contents">
			<div class="img-part">
				<img src="assets/images/categories/main-home/icon/1.png" alt="">
			</div>
			<div class="content-wrap">
				<h2 class="title"><a href="#"><?php echo $row['course_name'];?></a></h2>
				<span class="course-qnty">02 Courses</span>
			</div>
		</div>
	</div>
</div>  

   <?php
  }
} else {
  echo "0 results";
}
$conn->close();
?>