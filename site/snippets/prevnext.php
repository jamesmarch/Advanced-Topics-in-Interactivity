<?php if($page->hasPrev()): ?>
<span> <a href="<?php echo $page->prev()->url() ?>">Previous <?php echo $page->template() ?></a> </span>
<?php endif ?>
 / 
<?php if($page->hasNext()): ?>
<span> <a href="<?php echo $page->next()->url() ?>">Next <?php echo $page->template() ?></span>
<?php endif ?>