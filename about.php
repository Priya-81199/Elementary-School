<?php
  $images='';
  $conn = mysqli_connect('localhost','root','123456','dynamic_gallery');
  $result = mysqli_query($conn,'SELECT * FROM faculty');    
  while ($row = $result->fetch_assoc()) {
    //$images.="<img class='gallery-img' src='img/".$row['img_name']."'>";

    $images.='<div class="child child-3">';
    $images.='<img class="flex-image" src="faculty_img/'.$row['f_img'].'" alt="">';//jaha na smje atkana yepp
    $images.='<h3>'.$row['f_name'].'</h3>';//kar yaha change aare ye sab variabes kaha use hore h images wale.. smja nhai ye sab aachaa haa yaad aaya got it// ab pahele jo static hai usse delete kar aare sunn 
    //mujhe vo mera wala photo chota lag rha hwo ...css me hoga changes tera jo pic tha uska hosrizontal size lamba tha so uss hishb nai vo square photo h ... to baki aks??
    $images.='<h4>'.$row['f_sub'].'</h4>';
    $images.='<p>'.$row['f_desc'].'<br></div>';
    } 
?>
<?php include 'inc/header.php';?>	
  <h2 class="abt-text">About us</h2>
  <div class="abt">
  <img class="abtc" src="images/course-1.jpg" >
  <img class="abtc" src="images/course-2.jpg" >
  <img class="abtc" src="images/course-3.jpg" >
  <img class="abtc" src="images/course-4.jpg" >
	</div>
  <div class="middle-container">
  <br>
  <p class="about-us description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
  </p>
  <p class="about-us description">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
  </p>
  <br>
  <hr>
  <h3 class="teacher-heading"> Meet Our Faculty</h3>
  <div class="parent faculty">
    <?php echo $images;?>
  </div>
  </div>
<?php include 'inc/footer.php';?>