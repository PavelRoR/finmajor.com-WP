<?php get_header(); ?>
<main>
    <div class="section">
        <div class="container">
        <?php  if(have_posts()): ; ?>
        <?php while(have_posts()): the_post(); ?>
            <article class="article">
              <h2><?php the_title(); ?></h2>
              <div class="content">
                    <article>
                    <?php the_post_thumbnail(); ?>
                    <?php the_date('d.m.y', '<div class="date">', '</div>'); ?>
                    <div class="text">
                    <?php the_content(); ?>
                    </div>
                    </article>
              </div>
              <div class="blog-navigation">
                    <div class="blog-navigation__col">
                    <?php $prevPost = get_previous_post();
	                    if($prevPost) :?>
                        <a href="<?= get_permalink($prevPost);?>" class="blog-navigation__link ">
                            Предыдущая <span>новость</span>
                        </a>
                        <a href="<?= get_permalink($prevPost);?>" class="blog-preview">
                            <span class="blog-preview__img">
                                <img src="<?= get_the_post_thumbnail_url($prevPost); ?>" alt="<?= get_the_title($prevPost); ?>">
                            </span>
                            <span class="blog-preview__info">
                                <span class="date"><?= get_the_date('d.m.y',$prevPost); ?></span>
                                <span class="h3">
                                    <?php  
                                        if (get_post_meta($prevPost->ID, 'title_exc', true)) {
                                        echo get_post_meta($prevPost->ID, 'title_exc', true);
                                        } 
                                    ?>
                                </span>
                                <span class="text"><?= get_the_excerpt($prevPost); ?></span>
                            </span>
                        </a>
                        <?php endif;?>
                    </div>
                    <div class="blog-navigation__col">
                    <?php $nextPost = get_next_post();
	                    if($nextPost) :?>
                        <div class="text-lg-end">
                            <a href="<?= get_permalink($nextPost);?>" class="blog-navigation__link">
                                Следующая <span>новость</span>
                            </a>
                        </div>
                        <a href="<?= get_permalink($nextPost);?>" class="blog-preview">
                            <span class="blog-preview__img">
                            <img src="<?= get_the_post_thumbnail_url($nextPost); ?>" alt="<?= get_the_title($nextPost); ?>">
                            </span>
                            <span class="blog-preview__info">
                                <span class="date"><?= get_the_date('d.m.y',$nextPost); ?></span>
                                <span class="h3">
                                    <?php  
                                        if (get_post_meta($nextPost->ID, 'title_exc', true)) {
                                        echo get_post_meta($nextPost->ID, 'title_exc', true);
                                        } 
                                    ?>
                                </span>
                                <span class="text"><?= get_the_excerpt($nextPost); ?></span>
                            </span>
                        </a>
                        <?php endif;?>
                    </div>
                </div>





            </article>
        <?php endwhile; ?>
          <?php endif; ?>
        </div>
    </div>
    <div class="section section--white">
    <div class="container">
        <h2 class="text-center">Получайте главные новости раз в неделю </h2>
        <?php $fN='2'; require('form-0.php');?>
    </div>
</div>
</main>

<?php get_footer(); ?>