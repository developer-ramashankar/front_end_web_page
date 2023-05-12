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

$sql = "SELECT * FROM add_blog";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
   ?>

<div class="col-lg-12 mb-70">
	<div class="blog-item">
		<div class="blog-img">
			<a href="#"><img src="assets/images/blog/inner/2.jpg" alt=""></a>
		</div>
		<div class="blog-content">
			<h3 class="blog-title"><a href="#"><?php echo $row['blog_title'];?></a></h3>
			<div class="blog-meta">
				<ul class="btm-cate">
					<li>
						<div class="blog-date">
							<i class="fa fa-calendar-check-o"></i> September 14, 2020                                                        
						</div>
					</li>
					<li>
						<div class="author">
							<i class="fa fa-user-o"></i> admin  
						</div>
					</li>   
					<li>
						<div class="tag-line">
							<i class="fa fa-book"></i>
							<a href="#">High School</a> 
						</div>
					</li>
				</ul>
			</div>
			<div class="blog-desc">   
				<?php echo $row['blog_detail'];?>                                   
			</div>
			<div class="blog-button">
				<a class="blog-btn" href="#">Continue Reading</a>
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