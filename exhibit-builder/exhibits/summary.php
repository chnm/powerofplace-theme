<?php head(array('title' => html_escape('Summary of ' . exhibit('title')),'bodyid'=>'exhibit','bodyclass'=>'summary')); ?>
<div id="nav-container">
	<?php echo exhibit_builder_page_nav($exhibit->getFirstSection());?>
</div>
<div id="primary">
<h1><?php echo html_escape(exhibit('title')); ?></h1>

<h2>Description</h2>
<?php echo exhibit('description'); ?>

<h2>Credits</h2>
<p><?php echo html_escape(exhibit('credits')); ?></p>

</div>
<?php foot(); ?>