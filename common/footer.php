	</div><!-- end content -->

	<div id="footer">
		<div id="footer-wrap">
			<div id="logos">
				<div id="chnm-logo"><a class="hidden" href="http://www.chnm.gmu.edu" title="link to Roy Rosenweig Center for History and New Media logo">Roy Rosenzweig Center for History and New Media</a></div>
			 	<div id="dcps-logo"><a class="hidden" href="http://dcps.dc.gov/portal/site/DCPS/" title="link to DC Public Schools">D.C. Public Schools</a></div>
			</div><!--end #logos-->
	
		    <ul class="navigation">
				 <?php echo nav(array('Home' => uri(''), 'Resources' => uri('items'), 'Lessons' => uri('exhibits'), 'About' => uri('about'))); ?>
		    </ul>

		    <div id="footer-text">
		        <?php echo get_theme_option('Footer Text'); ?>
		        <?php if ((get_theme_option('Display Footer Copyright') == 1) && $copyright = settings('copyright')): ?>
		            <p><?php echo $copyright; ?></p>
		        <?php endif; ?>
		        <p>Proudly powered by <a href="http://omeka.org">Omeka</a>.</p>
		    </div>

		<?php plugin_footer(); ?>
		</div><!--end #footer-wrap-->
	
	</div><!-- end footer -->

</div><!-- end wrap -->
</body>
</html>