<?php
  $images='';
  $conn1 = mysqli_connect('localhost','root','123456','dynamic_gallery');
  $result = mysqli_query($conn1,'SELECT * FROM faculty');   

  while ($row = $result->fetch_assoc()) {
    if(isset($_POST['image_'.$row['id']]))
    {
      unlink('faculty_img/'.$row['f_img']);
      mysqli_query($conn1,'Delete FROM faculty WHERE id="'.$row['id'].'"');
      header("location: delete_faculty.php");
    }

    $images.='<table class="table1"><tr><td class="table-data"><div class="child child-3">';
    $images.='<img class="flex-image" src="faculty_img/'.$row['f_img'].'" alt="">';
    $images.='<h3>'.$row['f_name'].'</h3>';
    $images.='<h4>'.$row['f_sub'].'</h4>';
    $images.='<p>'.$row['f_desc'].'<br></div></td>';
    $images.="<td class='table-data'><form method='POST'><input type='submit' value='delete' class='btn' name='image_".$row['id']."'></form></td></tr></table>";
  
  } 
  
?>

<?php include 'inc/header.php';?>	
  <h2>Faculty</h2>
  <div class="middle">
    <table><?php echo $images;?></table>
  </div>
  <hr>
<?php include 'inc/footer.php';?>

