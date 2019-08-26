<?php
  if(isset($_POST['Upload-img']))
  {
    $img=$_FILES['images']['name'];
    $img_location=$_FILES['images']['tmp_name'];
    $img_folder="img/";
    if(move_uploaded_file($img_location,$img_folder.$img))
    {
      $conn = mysqli_connect('localhost','root','123456','dynamic_gallery');
      mysqli_query($conn,"INSERT INTO gallery (img_name) VALUES('$img')");
      
      ?>
      <script>alert('Added!!')</script>
      <?php
    }
    else
    {
      ?>
      <script>alert('Error')</script>
      <?php
    }
  }
  //add.php is perfect done
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Upload and save</title>
	</head>
	<body>
		<form method="POST" enctype="multipart/form-data">
			<input type="file" name="images" />
			<button type="submit" name="Upload-img">Click to Add</button>
		</form>
	</body>
</html>