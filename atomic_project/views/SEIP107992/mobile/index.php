<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Index</title>
	<link rel="stylesheet" type="text/css" href="public/myStyle.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
<?php
 include_once("../../../"."vendor/autoload.php");
use \src\bitm\SEIP107992\mobile\mobile;
$mobile=new mobile();
#echo $mobile->index();
?>
<div class="container">
	<div class="row">
		<div class="com-sm-12">
			<div class="jumbotron header">
				<h3>Mobile List</h3>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			<table class="table table-bordered table-hover">
               <thead>
                    <tr>
				        <th>Serial Number</th>
				        <th>Mobile Name</th>
				        <th>Action</th>
                    </tr>
               </thead>
               <tbody>
               	  <tr>
			        <td>1</td>
			        <td>Nokia</td>
			        <td><a class="btn btn-default" href="view.php">Views</a><a class="btn btn-warning" href="edit.php">Edit</a><a class="btn btn-danger" href="">Delete</a></td>
			      </tr>
			      <tr>
			        <td>2</td>
			        <td>samsung</td>
			        <td><a class="btn btn-default" href="view.php">Views</a><a class="btn btn-warning" href="edit.php">Edit</a><a class="btn btn-danger" href="">Delete</a></td>
			      </tr>
              </tbody>
		</div>
	</div>
</div>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>	
</body>
</html>