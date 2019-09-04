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
?>
<?php include 'inc/header.php';?>
<br><br>
<h3>Add New Pictures to Gallery.</h3>
<div style="height: 50px"></div>
    <form method="POST" enctype="multipart/form-data">
			<input type="file" name="images" /><br><br>
			<button class="btn" type="submit" name="Upload-img" style="float: none;
      padding: 15px;">Click to Add</button>
		</form>
<div style="height: 100px"></div>
<?php include 'inc/footer.php';?>