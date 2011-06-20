<?php head(array('bodyid'=>'home', 'bodyclass' =>'')); ?>
<!--replaced featured items and recent items with polaroid display. Removed #primary and #secondary 
Will need to insert hrefs to full-size images, see if images can be dynamically generated from an array-->

	<div class="photo-album">					
			<a href="http://" class="medium polaroid img1"><img src="<?php echo img('home-page/garfield.jpg'); ?>" alt="" />The Garfield Memorial</a>
			<a href="http:/" class="medium polaroid img2"><img src="<?php echo img('home-page/grant.jpg'); ?>" alt="" />The Grant Memorial</a>
			<a href="http://" class="medium polaroid img4"><img src="<?php echo img('home-page/mason.jpg'); ?>" alt="" />The George Mason Monument</a>
			<a href="http://" class="medium polaroid img3"><img src="<?php echo img('home-page/fdr.jpg'); ?>" alt="" />The FDR Memorial</a>				
			<a href="http://" class="medium polaroid img5"><img src="<?php echo img('home-page/jefferson.jpg'); ?>" alt="" />The Thomas Jefferson Memorial</a>				
			<a href="http://" class="medium polaroid img6"><img src="<?php echo img('home-page/peace.jpg'); ?>" alt="" />The Peace Memorial</a>		
			<a href="http://" class="medium polaroid img7"><img src="<?php echo img('home-page/lincoln.jpg'); ?>" alt="" />The Lincoln Memorial</a>
	</div><!--end .photo-album-->


<?php foot(); ?>