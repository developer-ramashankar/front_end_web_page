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

$sql = "SELECT * FROM add_latest_news";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
   ?>

<div class="blog-item">
	<div class="image-part">
		<img src="assets/images/blog/style2/1.jpg" alt="">
	</div>
	<div class="blog-content">
		<ul class="blog-meta">
			<li><i class="fa fa-user-o"></i><?php echo $row['admin']; ?></li>
			<li><i class="fa fa-calendar"></i><?php echo $row['date']; ?></li>
		</ul>
		<h3 class="title"><a href="blog-single.html"><?php echo $row['news_title']; ?></a></h3>
		<div class="desc"><?php echo $row['news_detail']; ?></div>
		<div class="btn-btm">
			<div class="cat-list">
				<ul class="post-categories">
					<li><a href="#">College</a></li>
				</ul>
			</div>
			<div class="rs-view-btn">
				<a href="#">Read More</a>
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