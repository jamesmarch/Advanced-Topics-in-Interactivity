<!-- site/templates/blog.php -->
<?php snippet('header') ?>
<?php snippet('menu') ?>
<section>
<article>

<?php 
// find the open/active page on the first level
$items  = $pages->findOpen()->children()->findBy('uid', 'articles')->children()->sortBy('date')->flip(); ?>
<?php if($items && $items->count()): ?>
  <ul class="container">
    <?php foreach($items AS $item): ?>
    <li class="list">
    <span class="article-title"><?php echo $item->title() ?></span>&&&<?php echo $item->date('d/m/Y') ?>
	<p><?php echo kirbytext($item->text()) ?>
    </p></li>
    <?php endforeach ?>            
  </ul>

<?php endif ?>


<?php // echo excerpt($item->text(), 5000) ?> <span class="excerpt"><!-- <a href="<?php // echo $item->url() ?>">EXPAND</a></span> -->


</article>  
</section>
<?php snippet('social') ?>
<?php snippet('footer') ?>