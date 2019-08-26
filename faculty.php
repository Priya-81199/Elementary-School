<?php
  if(isset($_POST['add_faculty']))//aare kya gadbad tha mujhe samjha nai
  {
    $img=$_FILES['images']['name'];
    $img_location=$_FILES['images']['tmp_name'];
    $img_folder="faculty_img/";//create another folder for faculty okay..done..karo cgange 
    if(move_uploaded_file($img_location,$img_folder.$img))
    {
      $connf = mysqli_connect('localhost','root','123456','dynamic_gallery');
      $f_name=$_POST['f_name'];
      $f_sub=$_POST['f_sub'];
      $f_desc=$_POST['f_desc'];
      mysqli_query($connf,"INSERT INTO faculty (f_name,f_img,f_sub,f_desc) VALUES('$f_name','$img','$f_sub','$f_desc')");//isme second bracket me values dalte hai inside single quotes ok..dalo... karo run..f_img k jagaha kuch aur likha tha acchaa got it abb about us k page me change naaa.. baki hai ab wo
       
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
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Upload and save</title>
	</head>
	<body>
		<form method="POST" enctype="multipart/form-data">
      <input type="text" name="f_name" placeholder="Enter faculty's name..."><br><br>
			<input type="file" name="images" /><br><br>
      <input type="text" name="f_sub" placeholder="Enter the subject..."><br><br>
      <textarea name="f_desc" placeholder="Give description..." rows=5 cols=50></textarea><br><br>
			<button type="submit" name="add_faculty">Click to Add</button>
		</form>
	</body>
</html>