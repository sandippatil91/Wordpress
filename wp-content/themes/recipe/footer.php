<footer class="site-footer">
	<nav class="site-nav">
		<?php
		$args = array(
			'location' => 'footer'
		);
		?>
		<?php wp_nav_menu( $args ); ?>	
	</nav>
	<p class="text-center"><?php bloginfo('name');?>&nbsp; -&nbsp;&nbsp; &copy; <?php echo date('Y');?></p>
</footer>

</div>
</div>
</div>

<?php wp_footer(); ?>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
<script type="text/javascript">
  var onloadCallback = function() {
 
 };
</script>
 <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>

</body>
</html>