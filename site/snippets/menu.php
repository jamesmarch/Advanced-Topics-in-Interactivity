<!-- Title / Start -->
<nav class="title">
<div class="container">
<?php if(!$site->logo()->empty()): ?>
<div class="logo"><a href="<?php echo $site->url() ?>"><span class="zxx-sans">Advanced</span><br /><span class="zxx-xed">Topics In</span><br /><span class="zxx-noise">Interactivity</span></a><div>
<?php else: ?>
<a href="<?php echo $site->url() ?>"><?php echo $site->title() ?></a>
<?php endif ?>
</div>
</nav>
<!-- Title / End -->

<span class="separator">&&&</span>


<nav class="container" id="description">
<?php if(!$site->description()->empty()): ?>
<?php echo $site->description() ?>
<?php endif ?>
</nav>


<span class="separator">&&&</span>


<!-- Menu / Start -->
<nav role="navigation" id="navigation" class="container">
	<input type="checkbox" id="toggle-nav">
	<label id="burger" for="toggle-nav" onclick><span><i class="fa fa-bars"></i></span></label>
<ul id="accordion">
<?php foreach($pages->visible() AS $p): ?>
<?php $items = ($p) ? $p->children()->visible() : false; ?>
<?php if($items && $items->count()): ?>
	<li><div>—<a href="#"><?php echo html($p->title()) ?> <?php echo $p->picto() ?></a></div>
		<ul>
<?php foreach($items AS $item): ?>
        <li>&&&<a<?php echo ($item->isOpen()) ? ' class="active"' : '' ?> href="<?php echo $item->url() ?>"><?php echo $item->title() ?> <?php echo $item->picto() ?></a></li>
<?php endforeach ?>
		</ul>
	</li>
<?php else: ?>
    <li><div>—<a href="<?php echo $p->url() ?>"><?php echo $p->title() ?> <?php echo $p->picto() ?></a></div></li>
<?php endif ?>
<?php endforeach ?>
</ul>
</nav>
<!-- Menu / End -->

<script type="text/javascript">
			$(document).ready( function() {
				
				// initialize accordion
				$('#accordion ul').each( function() {
					var currentURI = window.location.href;
					var links = $('a', this);
					var collapse = true;
					for (var i = 0; i < links.size(); i++) {
						var elem = links.eq(i);
						var href = elem.attr('href');
						var hrefLength = href.length;
						var compareTo = currentURI.substr(-1*hrefLength);
						
						if (href == compareTo) {
							collapse = false;
							break;
						}
					};
					if (collapse) {
						$(this).hide();
					}
				});
				
				// on click, show this element and hide all others
				$('#accordion > li').click( function() {
					var me = $(this).children('ul');
					$('#accordion ul').not(me).slideUp();
					me.slideDown();
				});
			});
</script>