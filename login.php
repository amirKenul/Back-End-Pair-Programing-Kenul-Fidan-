<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
		<style>
			body{
				background-image: url("img/1.jpg");
				font-family:Arial;
			}
			h1{
				color:#fff;
				font-size:46px;
			}
			span{
				color:#1ac6ff;
			}
			button{
				background:#1ac6ff!important;
				color:#eee;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<h1 class="text-center">START YOUR <span>30-DAY</span> FREE TRIAL</h1>
			</div>
			<div class="row admin" style="margin-top: 100px;">
				<div class="col-md-6 col-md-offset-3">
					<form role="form" action="" method="post">
						<div class="form-group">
							<input type="email" class="form-control"  name="email" placeholder="Email Address">
						</div>
						<div class="form-group">
							<input type="password" class="form-control" name="password" placeholder="Password">
						</div>
						<button type="submit" class="btn" name="submit">LOGIN</button>
						<a href="register.php" class="btn btn-success pull-right" name="submit">REGISTRATION</a>
						<a href="index.php" class="btn btn-info" name="submit">Back</a>
						<?php
						/*if(isset($_POST['submit'])){
							if(!empty($_POST['email']) && !empty($_POST['password'])){

							$email = $_POST['email'];
							$pas = $_POST['password'];
							include "confiq.php";

							}
						}*/	
							?>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>				
<?php
if(isset($_POST['submit'])){
						if(!empty($_POST['email']) && !empty($_POST['password'])){
							$email = $_POST['email'];
							$pas = $_POST['password'];
							include "confiq.php";

						if ($email=='admin@gmail.com' && $pas=='12345') {
							header("Location:admin.php");
						}else{

							$sql2="SELECT * FROM peoplename WHERE email='$email' and password='$pas'";
							$query2 = mysqli_query($conn, $sql2);
							/*var_dump($sql2);*/
								
							$row=mysqli_fetch_assoc($query2);
							


								if($row['email'] && $row['password']){
										
								echo "Salam, eziz istifadecimiz!";
										}else{
											?>
												<div class="alert alert-danger" role="alert"><?php echo "Parol Duzgun deyil!!!" ?></div>
										<?php
										}	
						}
						
	
					}
					else{
						?>

						<div class="alert alert-danger" role="alert"><?php echo"Bosh qoymayin!!!" ?></div>
						<?php
					}
					}
					?>