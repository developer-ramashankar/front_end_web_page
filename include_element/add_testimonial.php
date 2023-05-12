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

$sql = "SELECT * FROM add_testimonial";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
   ?>

<div class="testi-item">
	<div class="author-desc">                                
		<div class="desc"><img class="quote" src="assets/images/testimonial/main-home/test-2.png" alt=""><?php echo $row['text']; ?></div>
		<div class="author-img">
			<img src="assets/images/testimonial/style5/1.png" alt="">
		</div>
	</div>
	<div class="author-part">
		<a class="name" href="#"><?php echo $row['author']; ?></a>
		<span class="designation"><?php echo $row['student']; ?></span>
	</div>
</div>
   <?php
  }
} else {
  echo "0 results";
}
$conn->close();
?>