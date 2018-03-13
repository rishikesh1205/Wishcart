<html>
<head>
<link type="text/css" rel="stylesheet" href="stylesheet3.css">
</head>
<body>
<?php 
session_start();
session_destroy();
header("location:design2.php");	
?>
</body>
</html>