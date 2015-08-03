</div>
</div>
<footer>
	<div class="container">
	<?php wp_nav_menu(array(
	    'container'=> 'nav',
	    'container_class' => '',
	    'container_id' => 'footer-menu',
	    'menu_id' =>'footermenu',
	    'menu_class' =>'',
	    'theme_location' => 'footer'
	)); ?>
	<div id="copywrite">&copy; <?php echo date("Y"); ?> <?php bloginfo( 'name' ); ?>. Biovetrex is a trademark of Anacapa Technologies, Inc. All rights reserved.</div>
	<div class="social-media-links">
		<a href="http://www.facebook.com/pages/Anacapa-Technologies-Inc/133472353351019" id="facebook" target="_blank" class="social-media-link obj_badge">
		facebook
		</a>
		<a href="https://twitter.com/AnacapaTechInc" id="twitter" class="social-media-link obj_badge" target="_blank">
		Twitter
		</a>
		<!--
<a href="#"id="google-plus" class="social-media-link obj_badge">
		Google Plus
		</a>
-->
	</div>
	</div>
</footer>
