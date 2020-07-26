<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Green_Petal
 */

?>

	<footer class="site-footer" data-scroll-section>
		<div class="container">
			<div class="row">
				<div class="col">
					<h3>Quick Links</h3>
					<ul class="unstyled-list">
						<?php
							while(have_rows('menu_1', 'options')):
								the_row();
								echo '<li><a href="'.get_sub_field('link')['url'].'">'.get_sub_field('link')['title'].'</a></li>';
							endwhile;
						?>
					</ul>
				</div>
				<div class="col">
					<h3>Explore</h3>
					<ul class="unstyled-list">
						<?php
							while(have_rows('menu_2', 'options')):
								the_row();
								echo '<li><a href="'.get_sub_field('link')['url'].'">'.get_sub_field('link')['title'].'</a></li>';
							endwhile;
						?>
					</ul>
				</div>
				<div class="col">
					<h3>Contact</h3>
					<ul class="unstyled-list">
						<?php
							$contactInfo = get_field('contact_information', 'options');
							echo '<li>'.$contactInfo['address'].'</li>';
							$email = preg_split ("/\,/", $contactInfo['email']);
							$phone = preg_split ("/\,/", $contactInfo['phone']);
						?>
						<li>
							<?php
								foreach($email as $e){ 
									echo '<a href="mailto:'.$e.'">'.$e.'</a>';
								}
							?>
						</li>
						<li>
							<?php
								foreach($phone as $p){ echo '<a href="mailto:'.$p.'">'.$p.'</a>';}
							?>
						</li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<span id="credits">Design and developed by <a href="javascript:void(0)">Akish Joseph</a></span>
				</div>
			</div>
		</div>		
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
