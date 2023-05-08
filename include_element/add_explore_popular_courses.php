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

$sql = "SELECT * FROM add_explore_popular_courses";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
   ?>
<div class="col-lg-4 col-md-6 mb-30">
   <div class="courses-item">
		<div class="courses-grid">
			<div class="img-part">
				<a href="#"><img src="assets/images/courses/main-home/1.jpg" alt=""></a>
			</div>
			<div class="content-part">
				<div class="info-meta">
					<ul>                                                
						<li class="ratings">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							(1 rating)
						</li>
					</ul>
				</div>
				<div class="course-price">
					<span class="price"><?php echo $row['course_fee'];?></span>
				</div>
				<h3 class="title"><a href="#"><?php echo $row['course_title'];?></a></h3>
				<ul class="meta-part">
					<li class="user">
						<i class="fa fa-user"></i>
						 <?php echo $row['student_number'];?> numbers                                     
					</li>
					<li class="user">
						<i class="fa fa-file"></i>
						 <?php echo $row['course_lesson'];?> Lessons                                        
					</li>
				</ul>
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