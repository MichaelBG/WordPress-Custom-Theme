<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WP_Bootstrap_Starter
 */

 $image = get_field('Header_Image');
 $picture = $image['sizes']['custom_size'];

get_header(); ?>

	<section class="content-area col-sm-4 col-lg-5">
		<div>
		<img src="<?php echo($picture);?>" class="img-fluid">
		</div><!-- #main -->
	</section><!-- #primary -->
		
	<section class="content-area col-xl-7 col-lg-4">
		<div >
		<?php

		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_format() );

			    the_post_navigation();

				
echo "<div class='row'>
<div style='padding-left:50px;padding-top:15px;background-color:#b5c6d0;' class='col-sm-6'>";
echo '<h4>Facts</h4>'; 
				the_field('facts');
echo "</div><br>
";
echo "<div style='width:10px;background-color:#fff;'></div>";
echo "<div style='padding-left:50px;padding-top:15px;background-color:#f5f5f5;' class='col-sm-6'>
";				
echo '<h4>Payment Plan</h4>'; 
echo "Reservation Fee:  $"; the_field('Price');
				the_field('payment_plan');
echo "</div></div>
";

			// If comments are open or we have at least one comment, load up the comment template.
			// if ( comments_open() || get_comments_number() ) :
			// 	comments_template();
			// endif;

		endwhile; // End of the loop.
		?>



		</div><!-- #main -->
	</section><!-- #primary -->

<?php
//get_sidebar();
get_footer();
