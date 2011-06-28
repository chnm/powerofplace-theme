<?php head(array('title'=>html_escape('Browse Lesson Plans'),'bodyid'=>'exhibit','bodyclass'=>'browse')); ?>
<div id="primary">
    <h1>Browse Lesson Plans (<?php echo $total_records; ?> total)</h1>
	<?php if (count($exhibits) > 0): ?>
    <div class="pagination"><?php echo pagination_links(); ?></div>
	
    <div id="exhibits">
    <?php $exhibitCount = 0; ?>
    <?php while(loop_exhibits()): ?>
    	<?php $exhibitCount++; ?>
    	<div class="exhibit <?php if ($exhibitCount%2==1) echo ' even'; else echo ' odd'; ?>">
    		<h2><?php echo link_to_exhibit(); ?></h2>
    		<div class="description"><?php echo exhibit('description'); ?></div>
    		<?php if ($exhibit->Tags): ?>
    		<p class="tags"><span style="color: #c90; font-weight: bold;">Tags:&nbsp;</span><?php echo tag_string(get_current_exhibit(), uri('exhibits/browse/tag/')); ?></p>
    	    <?php endif; ?>
    	</div>
    <?php endwhile; ?>
    </div>
    
    <div class="pagination"><?php echo pagination_links(); ?></div>

    <?php else: ?>
	<p>There are no lesson plans available yet.</p>
	<?php endif; ?>
</div>
<?php foot(); ?>