<?php snippet('header') ?>
<?php snippet('menu') ?>




<!-- Content / Start -->
<section class="small">
<article>

		<div id="slideshow" class="owl-carousel">
		      <?php foreach($page->images() as $img): ?>
		  	  <div class="item"><img src="<?php echo $img->url() ?>" alt="<?php echo $img->title() ?>" title="<?php echo $img->title() ?>" data-description="<?php echo $img->description() ?>"></div><?php endforeach ?>
		</div>
		
		<div class="container">
		  	<ul id="status">
		  	<li><a class="prev">Previous<!-- <i class="fa fa-angle-left fa-lg"></i> --></a></li> / 
		  	<li><a class="next">Next <!-- <i class="fa fa-angle-right fa-lg"></i> --></a></li>
		  	<li class="currentItem">(<span class="result"></span></li> of <li class="owlItems"><span class="result"></span>)</li>
		    <!-- <li><a class="play">Autoplay</a></li>
		    <li><a class="stop">Stop</a></li> -->
		    </ul>
		</div>
			

<div class="container">
<h1><?php echo $page->title() ?> - <?php echo $page->date('Y') ?></h1>
<?php echo kirbytext($page->text()) ?>
</div>


</article>
</section>
<!-- Content / End -->


<!-- Slideshow Javascript / Start -->
<script type="text/javascript">
$(document).ready(function() {
 
  var owl = $("#slideshow"),
  	  status = $("#status");
 
  owl.owlCarousel({
		singleItem: true,
		pagination: false,
		paginationNumbers: false,
		afterAction : afterAction,
		slideSpeed: 0,
		rewindSpeed: 1000,
	    responsiveRefreshRate : 200,
 	    autoHeight: true,
  });
 
 
 // Count
  function updateResult(pos,value){
    status.find(pos).find(".result").text(value);
  }
 
  function afterAction(){
    updateResult(".owlItems", this.owl.owlItems.length);
    updateResult(".currentItem", this.owl.currentItem);
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