<?php get_header(); ?>
<div class="container content">
		<div class="main block">
			<?php if(have_posts()) : ?>
				<?php while(have_posts()) : the_post(); ?>
					<div class="archive-post">
						<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
						<p>Posteado en: <?php the_time('j F, Y g:i a'); ?></p>
					</div>
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