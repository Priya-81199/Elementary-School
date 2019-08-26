<?php
  $images='';
  $conn = mysqli_connect('localhost','root','123456','dynamic_gallery');
  $result = mysqli_query($conn,'SELECT * FROM gallery');    
  while ($row = $result->fetch_assoc()) {
    $images.="<img class='gallery-img' src='img/".$row['img_name']."'>";
    // upar $images karke ek blank variable banaya 
    // append hota hai when u write .= acha matlab kisi bhi variable me apppend karna ho to .=?? ha.. for string so wo variable me sab aa gaya
    //niche jo echo kiya hai wo jo mene string me likha hai wo same html tags ki tarha wo code me aa jata hai let see in developer tool
    // ye line ka $row['column name'] ye mujhe waha se har ek ittere me colu ka . dega aare vo dot ka kya significanc h? o achaa ok
    // do you know this in c --> a+=c yeah shorthand pata h
  } 
?>

<?php include 'inc/header.php';?>	
  <h2>Gallery</h2>
  <div class="middle">
    <?php echo $images;?>
  </div>
  <hr>
<?php include 'inc/footer.php';?>