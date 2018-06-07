<?php
/**
 * The template for displaying the footer.
 *
 * @package inhabitent
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">


				<div class="site-info">


					<!-- <div class= "contact"> 
					<h4> CONTACT INFO </h4> 
					
					
					<!-- </div>    .contact -->
					

	
					

				<?php if (is_active_sidebar ('footer-sidebar')):?>
				<?php dynamic_sidebar('footer-sidebar'); ?>
					<?php endif; ?>

					</div>   		

<div class= "footer-image">

</div>
				  <!--brand icon-->
				
					<!-- <a href="<?php echo esc_url( 'https://wordpress.org/' ); ?>"><?php printf( esc_html( 'Proudly powered by %s' ), 'WordPress' ); ?></a> -->
	
				
				</div><!-- .site-info -->
			
			
			</footer><!-- #colophon -->


		</div><!-- #page -->

		<?php wp_footer(); ?>
		 <!--user icon in two different styles-->

		 


	</body>
</html>
