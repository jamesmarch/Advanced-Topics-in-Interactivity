<!-- site/templates/page.php -->
<?php snippet('header') ?>
<?php snippet('menu') ?>


<section>
<article>

<div class="container">
	<h1><?php echo $page->title() ?></h1>
	<?php echo kirbytext($page->text()) ?>
</div>



</article>
</section>
<?php snippet('social') ?>
<?php snippet('footer') ?>