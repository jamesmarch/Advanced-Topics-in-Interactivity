<!DOCTYPE html>
<html lang="fr">
<head>
  
  <title><?php echo html($site->title()) ?> - <?php echo html($page->title()) ?></title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">   

  <meta name="description" content="<?php echo html($site->description()) ?>">

<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Roboto:400,100italic,100,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Libre+Baskerville:400,700,400italic' rel='stylesheet' type='text/css'>
	<?php
	echo css('assets/css/styles.css');
	echo css('assets/css/font-awesome.min.css');
    echo js('http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js');
    ?>

	<?php 
	echo css('assets/css/custom.css');
	$cssURI  = 'assets/css/' . $page->template() . '.css';
	$cssRoot = c::get('root') . '/' . $cssURI;
	if(file_exists($cssRoot)) echo css($cssURI);
	?>

	<?php 
	echo css('assets/owl-carousel/owl.carousel.css');
	echo css('assets/owl-carousel/owl.theme.css');	
	echo js('assets/owl-carousel/owl.carousel.js');
	?>



</head>
<body class="<?php echo $page->template() ?>" >