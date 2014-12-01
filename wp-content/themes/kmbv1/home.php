<?php get_header(); ?>

    <?php
    global $wp_query;
    $args = array_merge( $wp_query->query_vars, array( 'post_type' => 'project' ) );
    query_posts( $args );
    ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div <?php post_class() ?> id="project-<?php the_ID(); ?>">

			<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>

			<div class="entry">
				<?php the_content(); ?>
			</div> <!--/.entry-->

		</div> <!--/.project-->

	<?php endwhile; ?>

	<?php else : ?>

		<h4>Not Found</h4>

	<?php endif; ?>
    
    <?php wp_reset_query(); // reset the query ?>

<?php get_footer(); ?>