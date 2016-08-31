 
<!--footer-->
<div class="footerwrap">
	<div class="container">
    <h2>Pharmacy<img src="<?php bloginfo ('url'); ?>/wp-content/uploads/Logo.png"</>Current</h2>
    <div class="col-md-offset-2 col-md-3">
    	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Widget 1') ) : ?>
        <?php endif; ?>
        </div>
        

    <div class="col-md-offset-2 col-md-3">
    	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Widget 2') ) : ?>
        <?php endif; ?>
    </div>
    
    </div>
</div>
<?php wp_footer(); ?>
</body>
</html>
?>