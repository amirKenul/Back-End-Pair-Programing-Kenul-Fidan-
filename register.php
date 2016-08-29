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
							<input type="text" class="form-control"  name="nikname" placeholder="NikName">
						</div>
						<div class="form-group">
							<input type="email" class="form-control"  name="email" placeholder="Email Address">
						</div>
						<div class="form-group">
							<input type="password" class="form-control" name="password" placeholder="Password">
						</div>
						<button type="submit" class="btn" name="submit">GET STARTED</button>
						<a href="index.html" class="btn btn-info pull-right" name="submit">Back</a>
					</form>
					<?php
					
					if(isset($_POST['submit'])){
						if(!empty($_POST['nikname']) && !empty($_POST['email']) && !empty($_POST['password'])){

						
						
							$nikname = $_POST['nikname'];
							$email = $_POST['email'];
							$pas = $_POST['password'];
							include "confiq.php";

							$sql2="SELECT email FROM peoplename";
							$query2 = mysqli_query($conn, $sql2);

								if(!$query2){
										$sql = "INSERT INTO peoplename(nikname, email, password) VALUES ('$nikname', '$email', '$pas')";
								$query = mysqli_query($conn, $sql);
								header("Location:index.html");
										}else{
											?>
												<div class="alert alert-danger" role="alert"><a href="login.php"><?php echo "Artiq qeydiyyatdan kecmisiniz!!!" ?></a></div>
										<?php
										}			
	
					}else{
						?>

						<div class="alert alert-danger" role="alert"><?php echo"Qeydiyatdan kecin!!!" ?></div>
						<?php
					}
					}
					?>
					<!-- $sql2="SELECT * FROM peoplename WHERE email=$email";
					$query2 = mysqli_query($conn, $sql);
					 -->
 
</div>
				</div>
			</div>
		</div>
		
	</body>
</html>