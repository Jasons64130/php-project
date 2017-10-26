<!DOCTYPE html>

<html>
	<head>
		<title>Project</title>
		<meta charset="utf-8">
		<meta name="viewport" content="initial-scale=1, width=device-width"/>
		<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,700i,900" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/main.css">

		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/file.js"></script>
		<link rel="stylesheet" href="css/flexslider.css" type="text/css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
		<script src="js/jquery.flexslider.js"></script>
	</head>
			<?php include 'header.php'; ?>

	<body>
		<form action="Home.php" method="POST">
			<input type="text" name="searchdtrip" placeholder="Depature Stations" length="100px">
			<input type="text" name="searchatrip" placeholder="Arrive Stations" length="100px">
			<input type="text" name="depatime" placeholder="When do you want to depature" length="100px">
			<input type="date" name="thedate">
			<input type="submit" value="Find Trips">
		</form>
			
		
	
<?php
	echo include 'footer.php';
?>


		
	</body>
</html>
