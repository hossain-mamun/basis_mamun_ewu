<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Edit</title>
</head>
<body>
<?php
include_once("../../../"."vendor/autoload.php");
use \src\bitm\SEIP107992\mobile\mobile;
$mobile=new mobile();
echo $mobile->edit();


?>
</body>
</html>