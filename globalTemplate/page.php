<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

<?php the_title('<h1 class="label">', '</h1>'); ?>
<?php the_content(); ?>

<?php endwhile; ?>

<?php get_footer(); ?>