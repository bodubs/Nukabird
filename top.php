<!DOCTYPE HTML>
<html lang="en">
<head>

	<title>Nukabird Web Solutions</title>

	<meta charset="utf-8">
    <meta name="author" content="Nukabird Web Solutions">
    <meta name="description" content="Nukabird Web Solutions">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="style.css" type="text/css" media="screen">


	<!-- ####################### Initializing PHP variables #################### -->
	<?php

	define ('PHP_SELF', htmlentities($_SERVER['PHP_SELF'], ENT_QUOTES, 'UTF-8'));

	$PATH_PARTS = pathinfo(PHP_SELF);

	?>
	<!-- ####################### END Initializing PHP variables #################### -->

</head>

<!-- **********************     Body section      ********************** -->
<?php

print '<body id="' . $PATH_PARTS['filename'] . '">';
    
include 'header.php';
    
?>