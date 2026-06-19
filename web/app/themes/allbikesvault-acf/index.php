<?php get_header(); ?>

<main class="container section-padding">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article>
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
    </article>
<?php endwhile; else : ?>
    <p>No content found.</p>
<?php endif; ?>
</main>

<?php get_footer(); ?>
