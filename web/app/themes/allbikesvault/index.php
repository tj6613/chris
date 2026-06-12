<?php get_header(); ?>
<main class="container">
<?php if(have_posts()): while(have_posts()): the_post(); ?>
<h2><?php the_title(); ?></h2>
<?php the_content(); ?>
<?php endwhile; else: ?>
<p>No content found.</p>
<?php endif; ?>
</main>
<?php get_footer(); ?>
