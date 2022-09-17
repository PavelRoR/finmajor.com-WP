<?php get_header(); ?>
<main>
<div class="section">
    <div class="container">
        <h2>
        <?php single_cat_title(); ?>
            <span class="subtitle subtitle--mob">
            <?= category_description() ; ?>
            </span>
        </h2>
        <div class="row row--blog row--blog__column">
        <?php
            if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="col-12 col-sm-6 col-lg-4">
                <a href="<?php the_permalink(); ?>" class="blog-preview" target="_blank">
                    <span class="blog-preview__img">
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                    </span>
                    <span class="date"><?php the_date(); ?></span>
                    <h3><?php  
    				if (get_post_meta($post->ID, 'title_exc', true)) {
					 echo get_post_meta($post->ID, 'title_exc', true);
					} ?></h3>
                    <span class="text"><?php the_excerpt(); ?></span>
                </a>
            </div>
            <?php endwhile; ?>
<?php

$args = array(
	'show_all'     => true, // показаны все страницы участвующие в пагинации
	'end_size'     => 1,     // количество страниц на концах
	'mid_size'     => 1,     // количество страниц вокруг текущей
	'prev_next'    => true,  // выводить ли боковые ссылки "предыдущая/следующая страница".
	'prev_text'    => __('&lt;','textdomain'),
	'next_text'    => __('&gt;','textdomain'),
	'add_args'     => false, // Массив аргументов (переменных запроса), которые нужно добавить к ссылкам.
    // 'type' => 'list',
	'add_fragment' => '',     // Текст который добавиться ко всем ссылкам.
	'screen_reader_text' => __( 'Posts navigation' ),
	'class'        => 'pagination', // CSS класс, добавлено в 5.5.0.
);
the_posts_pagination( $args );
?>



          
    <?php else: ?>
        <!-- no posts found -->
        <?php endif; ?>
        </div>
    </div>
</main>
<div class="section section--white">
    <div class="container">
        <h2 class="text-center">Получайте главные новости раз в неделю </h2>
        <?php $fN='2'; require('form-0.php');?>
    </div>
</div>
<?php get_footer(); ?>