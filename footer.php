<?php if ( is_active_sidebar( 'gridly_footer')) { ?>
   <div id="footer-area">
			<?php dynamic_sidebar( 'gridly_footer' ); ?>
        </div><!-- // footer area -->   
<?php }  ?>     
      


 <div id="copyright">
<!-- <p>&copy; --><?php //echo date("Y"); echo " "; bloginfo('name'); ?><!-- | <a href="--><?php //echo esc_url( __('http://www.eleventhemes.com/', 'eleventhemes') ); ?><!--" title="Eleven WordPress Themes" target="_blank">Theme by Eleven Themes </a></p>-->
 </div><!-- // copyright -->

<script>
    <?php $title = wp_title("",false) ?>
    var title = ("<?= $title ?>" == "") ? 'Index' : "<?= $title ?>";
    mixpanel.track('Pageview',{
        "Page Title" : title
    });
</script>
</div><!-- // wrap -->   

	<?php wp_footer(); ?>
	
</body>
</html>