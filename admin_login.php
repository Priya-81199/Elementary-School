<?php
if(isset($_POST['a_login'])){
$conn = mysqli_connect('localhost','root','123456','dynamic_gallery');

if($conn){
	$uname=$_POST['u_name'];
	$pass=$_POST['p_word'];
	$result=mysqli_query($conn,"select * from admin_login where username='$uname' and password='$pass'");
	if(mysqli_num_rows($result)){
	?>
    <script>alert('LOGGED IN')</script>
    <?php
	}
	else{
	?>
	<body onload="wrong()"></body>
    <script>
    	function wrong(){
    		var x=document.getElementById("alert");
    		x.innerHTML="Wrong Credentials";
    	}
    </script>
    <?php
	}
}
else{
	?>
    <script>alert('Error')</script>
    <?php
}
}
?>
<?php include 'inc/header.php';?>	
	<br><br><h2>Admin login!</h2>
	<div class="login-div">
		<form class="login-form" method="POST" >
			<h3 class="login-head">Username:</h3>
			<input type="text" name="u_name" class="input_area" id="input_override">
			<br>
			<h3 class="login-head">Password: </h3>
			<input type="password" name="p_word" class="input_area">
			<br>
			<button class="butn" name="a_login">Login</button>
			<div id="alert" style="color:red;">
			</div>
		</form>
	</div>

<?php include 'inc/footer.php';?>