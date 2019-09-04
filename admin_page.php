<?php
$conn = mysqli_connect('localhost','root','123456','dynamic_gallery');
?>
<?php include 'inc/header.php';?>	
<body>
<h2>Hey Admin!!</h2>
<h3>Actions that can be performed...</h3>

<div class="button-div">
			<a href="faculty.php"><button class="btn" style="float: none; padding: 20px;">Add Faculty</button></a>
			<a href="delete_faculty.php"><button class="btn" style="float: none; padding: 20px;">Delete Faculty</button></a>
			<a href="ADGE.php"><button class="btn" style="float: none; padding: 20px;">Add Pictures to Gallery</button></a>
			<a href="delete.php"><button class="btn" style="float: none; padding: 20px;">Delete Pictures from Gallery</button></a>
	</div>
	<br>
<?php include 'inc/footer.php';?>