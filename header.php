<?php 
	$root = get_template_directory_uri();
?>
<!DOCTYPE html>


<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Starter Kit</title>
	<link rel="stylesheet" href="<?php echo "$root/dist/assets/css/style.css?=" ?>">
	<meta name="viewport" content="Width=device-width, initial-scale=1, user-scalable=no">
	<script src="https://use.fontawesome.com/1eda73ce4d.js"></script>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>



