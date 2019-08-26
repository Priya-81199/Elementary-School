<?php
  $images='';
  $conn = mysqli_connect('localhost','root','123456','dynamic_gallery');
  $result = mysqli_query($conn,'SELECT * FROM gallery');   

  while ($row = $result->fetch_assoc()) {
    if(isset($_POST['image_'.$row['id']]))
    {
      unlink('img/'.$row['img_name']);
      mysqli_query($conn,'Delete FROM gallery WHERE id="'.$row['id'].'"');
      header("location: delete.php");
    }
    $images.="<tr><td><img class='gallery-img' src='img/".$row['img_name']."'><form method='POST'></td><td><input style='float: left;
  width: 100%;' type='submit' value='delete' class='btn' name='image_".$row['id']."'></form></td></tr>";
  } 
  
?>

<?php include 'inc/header.php';?>	
  <h2>Gallery</h2>
  <div class="middle">
    <table><?php echo $images;?></table>
  </div>
  <hr>
<?php include 'inc/footer.php';?>

