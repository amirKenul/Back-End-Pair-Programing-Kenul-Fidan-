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
	margin-bottom: 20px;
	background:lightgreen;
	color:white;
}
table{
	margin-top:50px;
}
a{  
	padding:5px;
	text-decoration: none;
	border-radius: 2px;
	margin:10px; 
}
.read{
	background-color:#F0F0F0;
}
.update{
	background-color:green;
	color:white;
}
.delete{
	background-color: darkred;
	color:white;
}

</style>
<?php

include "confiq.php";

$sql="SELECT * FROM textimg";

$query=mysqli_query($conn,$sql);

?>


</head>
<body>
<div class="container">
<div class="row" >
<h1>PHP CRUD Grid</h1>
<a href="create.php" class="create">CREATE</a>

<table class="table table-bordered">
  <thead>
    <tr>
    <th>ID</th>
      <th>htext</th>
      <th>P small</th>
      <th>P Big</th>
       <th>image-Name</th>
       <th>Action</th>
    </tr>
  </thead>

  <tbody>
<?php

while ($row=mysqli_fetch_assoc($query)){
?>
<tr>
<?php

	foreach ($row as $key => $value) {
		?>
		<td> <?php echo $value;//echo $key ."->". $value."<br>";?></td>
		<?php
	}
	?>
	<td style="padding: 10px;">

	     <a href="update.php?id=<?php echo $row['id']?>" class="update">Update</a>
	     <a href="delete.php?id=<?php echo $row['id']?>" class="delete">Delete</a>
	     
	 </td>
	</tr>
	
	<?php
}

?>
</tbody>
</table>
</div>
</div>
</body>
</html>
