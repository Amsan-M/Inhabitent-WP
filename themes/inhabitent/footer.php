<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">


				<div class="site-info">


					<div class= "contact"> 
					<h4> CONTACT INFO </h4> 
						<p>info@inhabitent.com <p>
						<p>	<i class="fas fa-phone"></i> 778-456-7891<p>
						<p>	<i class="fab fa-facebook-square"></i>
	        	            <i class="fab fa-twitter-square"></i>
		                    <i class="fab fa-google-plus-square"></i> <p>
					</div>    <!-- .contact-->
					

				    <div class= "buisness-hours"> 
				      <h4> BUISNESS HOURS </h4> 
				      <p>Monday-Friday: 9am to 5pm<p>
				      <p>Saturday:10am to 2pm<p>
				      <p>Sunday: closed<p> 
					</div>   <!-- .buisness-hours -->

<div class= "footer-image">
<?php
	echo "<img src='images/logos/ihabitent-logo-text-dark.svg' alt='inhabitent logo'/>";
	?>
</div>
				  <!--brand icon-->
				
					<a href="<?php echo esc_url( 'https://wordpress.org/' ); ?>"><?php printf( esc_html( 'Proudly powered by %s' ), 'WordPress' ); ?></a>
	
				
				</div><!-- .site-info -->
			
			
			</footer><!-- #colophon -->


		</div><!-- #page -->

		<?php wp_footer(); ?>
		 <!--user icon in two different styles-->

		 


	</body>
</html>
