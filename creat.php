<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">


<link rel="stylesheet" href="assets/css/style.css">
<style>

.create{
	
	background:green;
	color:white;
}
table{
	margin-top:50px;
}
p{
  margin-left: 70%;
}

</style>



</head>
<body>
<div class="container">
<div class="row" >
<h1>CREATE A CUSTOMER</h1>

<div class="col-md-4">
</div>

<div class="col-md-4">
<form action="" method="post"  enctype="multipart/form-data">
<input type="text" class="form-control" name="htext" placeholder="Title row"></br>
<input type="text" class="form-control" name="psmal" placeholder="Balaca paraqraf"></br>
<input type="text" class="form-control" name="pbig" placeholder="Boyuk paraqraf"></br>
<input class="btn btn-default" type="file" name="imgname"></br>
<input class="btn btn-default" name="create" type="submit" value="Create"> </br>
<input class="btn btn-default" name="back" type="submit" value="Back"> </br>
</form>
</div>

<div class="col-md-4">
<div class="alert alert-danger" role="alert">
  <strong>Oh snap!</strong> Change a few things up and try submitting again.
</div>
</div>
</div>
<div class="row" style="margin-top:30px;">
   <div class="col-md-12 text-center" style="background-color:#F0F0F0;padding:20px;">
</div>
</div>

</div>
</body>
</html>
<?php


if (isset($_POST["create"])) {
  include "confiq.php";
    $htext = $_POST["htext"];
    $psmal = $_POST["psmal"];
    $pbig = $_POST["pbig"];
    $target_file =date('dmYGis'). basename($_FILES["imgname"]["name"]);
    $imgExt =pathinfo($target_file,PATHINFO_EXTENSION);
    move_uploaded_file($_FILES["imgname"]["tmp_name"],"img/".$target_file);
      $sql = "INSERT INTO textimg (htext, psmal, pbig, img_name) VALUES ('$htext', '$psmal', '$pbig' ,'$target_file')";
      $query = mysqli_query($conn ,$sql);

      
      if ($query) {
         echo "alindi";
      }


   }


?>

