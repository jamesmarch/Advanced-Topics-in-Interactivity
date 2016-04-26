<!-- site/templates/page.php -->
<?php snippet('header') ?>
<?php snippet('menu') ?>


<section class="large">


<?php if($page->hasImages()): ?> 
	<?php foreach($page->images() as $image): ?>
		<img src="<?php echo $image->url() ?>" width="<?php echo $image->width() ?>" height="<?php echo $image->height() ?>" alt="<?php echo $image->name() ?>" />
	<?php endforeach ?>
<?php endif ?>

<?php if(!$page->text()->empty()): ?>
<article>  
<div class="container">
	<?php echo kirbytext($page->text()) ?>
</div>
</article>
<?php endif ?>


</section>
<?php snippet('social') ?>
<?php snippet('footer') ?>