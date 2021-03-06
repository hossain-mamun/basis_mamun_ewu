<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Edit</title>
	<link rel="stylesheet" type="text/css" href="public/myStyle.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
<?php 
error_reporting(E_ALL & ~E_DEPRECATED & ~E_NOTICE);
include_once("../../../"."vendor/autoload.php");
use \src\bitm\SEIP107992\mobile\mobile;
$mb_id=$_GET['var'];
$mobile=new mobile();
$mobileUpdate=$mobile->view($mb_id); 
?>
<div class="container">
	<div class="row">
		<div class="com-sm-12">
			<div class="jumbotron header">
				<h3>Mobile Name Update</h3>
			</div>
		</div>
	</div>
</div>


<div class="container">
	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			<form action="update.php?var=<?php echo $mb_id ?>" method='post'>
			    <div class="form-group">
				    <label for="serial">New Serial NO:</label>
				    <input type="text" class="form-control input-lg" id="serial" name="serial" value="<?php echo $mobileUpdate['mobile_serial']?>" required>
			    </div>
				<div class="form-group">
				    <label for="m_name">New Mobile Name:</label>
				    <input type="text" class="form-control input-lg" id="m_name" name="m_name" value="<?php echo $mobileUpdate['mobile_name']?>" required>
			    </div>
			    <input type="submit" class="btn btn-warning" value="Update">
			</form>
		</div>
	</div>
</div>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>	
</body>
</html>
