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
                        <a href="/news/article-3.php" class="blog-navigation__link ">
                            Предыдущая <span>новость</span>
                        </a>
                        <a href="/news/article-3.php" class="blog-preview">
                            <span class="blog-preview__img">
                                <img src="/img/news/article-3.jpg" alt="">
                            </span>
                            <span class="blog-preview__info">
                                <span class="date">09.03.22</span>
                                <span class="h3">Хотите сохранить деньги? Покупайте недвижимость!</span>
                                <span class="text">В стране разгорается кризис, экономические условия стремительно меняются, и рынок под них подстраивается...</span>
                            </span>
                        </a>
                    </div>
                    <div class="blog-navigation__col">
                        <div class="text-lg-end">
                            <a href="/news/article-5.php" class="blog-navigation__link">
                                Следующая <span>новость</span>
                            </a>
                        </div>
                        <a href="/news/article-5.php" class="blog-preview">
                            <span class="blog-preview__img">
                                <img src="/img/news/article-5.jpg" alt="">
                            </span>
                            <span class="blog-preview__info">
                                <span class="date">14.06.22</span>
                                <span class="h3">Запрет на выдачу кредитов</span>
                                <span class="text">Банк России предложил механизм самозапрета на выдачу кредитов, чтобы обезопасить граждан от мошенничества. Для этого в личной кредитной истории появится галочка, нажав на которую, вы сами себе выпишите запрет на получение кредита от банка. Запрет может распространяться только на оформление через интернет, либо запрещать выдачу займа вообще.</span>
                            </span>
                        </a>
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