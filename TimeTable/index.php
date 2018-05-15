<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
				
		<?php

		$start='<meta charset="UTF-8">'.PHP_EOL.'<title>Coconut Catalogue</title>'.PHP_EOL.'<meta name="viewport" content="width=device-width,initial-scale=1">'.PHP_EOL.'<meta name="theme-color" content="#5a5a5a">'.PHP_EOL.'<link rel="shortcut icon" href="Images/icon.ico">'.PHP_EOL;
		$style_link0='<link rel="stylesheet" href="Design/style0.css" media="screen and (max-width: 270px)">'.PHP_EOL;
		$style_link1='<link rel="stylesheet" href="Design/style1.css">'.PHP_EOL;
		$style_link2='<link rel="stylesheet" href="Design/style2.css" media="screen and (min-width:600px)">'.PHP_EOL;
		$style_link3='<link rel="stylesheet" href="Design/style3.css" media="screen and (min-width:770px)">'.PHP_EOL;
		$style_link4='<link rel="stylesheet" href="Design/time_table.css">'.PHP_EOL;
		$style_link5='<link rel="stylesheet" href="Design/ad_modal.css">'.PHP_EOL;
		$style_link6='<link rel="stylesheet" href="Design/datesheet_style1.css">'.PHP_EOL;
		echo $start.$style_link0.$style_link1.$style_link2.$style_link3.$style_link4.$style_link5.$style_link6;

		?>

		
		<style>
		
			<?php include "datesheet_style.php"; ?>
			<?php include "navigation_style.php"; ?>
			<?php include "alert_style.php"; ?>
			<?php include "sticky_header_style.php"; ?>

		</style>
	</head>
	<body>
			<div class="container">
				<?php
				include 'time_table.php';
				?>
			</div>
</body>