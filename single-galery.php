<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>


<div class="elementor-container elementor-column-gap-default">
    <div class="title">
        <h3> <?php echo do_shortcode('[acf field="title"]') ?></h3>
        <h4> <?php echo do_shortcode('[acf field="data"]') ?></h4>
        <p><a href="/realizacje">Inne Realizacje</a></p>
    </div>
    <div class="elementor-widget-container foto">
        <?php echo the_content(); ?>
        <?php echo do_shortcode('[gallery size="custom-size"]'); ?>

    </div>
</div>







<?php endwhile; ?>

<?php get_footer(); ?>