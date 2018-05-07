<?php get_header(); ?>
<div class="container content">
		<div class="main block">
			<?php if(have_posts()) : ?>
				<?php while(have_posts()) : the_post(); ?>
					<article class="post">
						<h2><?php the_title(); ?></h2>
						<p class="meta">Posteado en
										<?php the_time('j F, Y g:i a'); ?>
										por
										<a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
											<?php the_author(); ?>
										</a> | Categoria: <?php 
															$categories = get_the_category();
															$separator = ", ";
															$output = '';

															if($categories){
																foreach($categories as $category){
																	$output .= '<a href="'.get_category_link( $category ->term_id ).'">'.$category->cat_name.'</a>'.$separator;
																}
															}
												echo trim( $output, $separator );
										?>
						</p>
						<?php if(has_post_thumbnail()) : ?>
							<div class="pst-thumbnail">
								<?php the_post_thumbnail(); ?>
							</div>
						<?php endif; ?>
						<?php the_excerpt(); ?>
						<a href="<?php the_permalink(); ?>" class="btn">More...</a>
					</article>
				<?php endwhile; ?>
		<?php else : ?>
			<?php echo apautop('Ooopsie...!'); ?>
		<?php endif; ?>
		</div>
		<div class="side">
			<div class="block">
				<h3>Sidebar</h3>
				<p>Bresaola pig filet mignon, spare ribs buffalo alcatra burgdoggen frankfurter rump kielbasa jowl biltong prosciutto.</p>
				<a href="#" class="btn">More...</a>
			</div>
		</div>
	</div>
<?php get_footer(); ?>