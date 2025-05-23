<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <?php wp_head(); ?>
</head>
<body>
    <h1><?php bloginfo('name'); ?></h1>
    <p><?php bloginfo('description') ?></p>

    <?php if (have_posts()): while (have_posts()): the_post(); ?>
    
    <div class="post">
        <h3><?php the_title(); ?></h3>

        <?php the_content(); ?>
        <?php wp_link_pages(); ?>
        <?php edit_post_link(); ?>
    </div>

    <?php endwhile; ?>
    
    <?php
        if ( get_next_posts_link() ) {
            next_posts_link();
        }
    ?>
    <?php
        if ( get_previous_posts_link() ) {
            previous_posts_link();
        }
    ?>

    <?php else: ?>
    
    <p>Нет постов</p>

    <?php endif; ?>
    <?php wp_footer(); ?>
</body>
</html>