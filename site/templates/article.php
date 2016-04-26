<!-- site/templates/page.php -->
<?php snippet('header') ?>
<?php snippet('menu') ?>
<section>
<article>

<div class="container">
<?php snippet('prevnext') ?><a href="<?php echo html($page->parent()->parent()->url()) ?>" title="retours" class="right"><i class="fa fa-times"></i></a>
</div>


<!-- Slideshow / Start -->
		<div id="slideshow" class="owl-carousel">
		      <?php foreach($page->images() as $img): ?>
		  	  <div class="item"><img src="<?php echo $img->url() ?>" alt="<?php echo $img->title() ?>" title="<?php echo $img->title() ?>" data-description="<?php echo $img->description() ?>">
		  	  </div>
		  	  <?php endforeach ?>
		</div>
<!-- Slideshow / End -->


<div class="container">
	<span class="article-title"><?php echo $page->title() ?></span>&&&<?php echo $page->date('d / m / Y') ?>
	<?php echo kirbytext($page->text()) ?>
</div>



</article>
</section>


<!-- Slideshow Javascript / Start -->
<script type="text/javascript">
$(document).ready(function() {
 
  var owl = $("#slideshow"),
  	  status = $("#status");
 
  owl.owlCarousel({
		singleItem:true,
		pagination: false,
		paginationNumbers: false,
		afterAction : afterAction,
		slideSpeed: 500,
		rewindSpeed: 1000,
	    responsiveRefreshRate : 200,
	    
  });
 
 
 // Count
  function updateResult(pos,value){
    status.find(pos).find(".result").text(value);
  }
 
  function afterAction(){
    updateResult(".owlItems", this.owl.owlItems.length);
    updateResult(".currentItem", this.owl.currentItem);
    updateResult(".prevItem", this.prevItem);
    updateResult(".visibleItems", this.owl.visibleItems);
    updateResult(".dragDirection", this.owl.dragDirection);
  }
 
  /*
  All owl object information listed below:
 
  base.owl = {
    "userOptions" : base.userOptions,
    "baseElement" : base.$elem,   
    "userItems"   : base.$userItems,
    "owlItems"    : base.$owlItems,
    "currentItem" : base.currentItem,
    "prevItem"    : base.prevItem,
    "visibleItems": base.visibleItems,
    "isTouch"     : base.browser.isTouch,
    "browser"     : base.browser,
    "dragDirection": base.dragDirection
  }
  */

  // Custom Navigation Events
  $(".next").click(function(){
    owl.trigger('owl.next');
  })
  $(".prev").click(function(){
    owl.trigger('owl.prev');
  })
  $(".play").click(function(){
    owl.trigger('owl.play',2000); //owl.play event accept autoPlay speed as second parameter
  })
  $(".stop").click(function(){
    owl.trigger('owl.stop');
  })

 
});
</script>
<!-- Slideshow Javascript / End -->



<?php snippet('social') ?>
<?php snippet('footer') ?>