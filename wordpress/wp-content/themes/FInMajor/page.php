<?php get_header();?>
<main>
  <div class="section">
    <div class="container">
      <?php  if(have_posts()): ; ?>
      <?php while(have_posts()): the_post(); ?>
      <h2><?php the_title(); ?></h2>
      <div class="content">
        <?php the_content(); ?>
        <?php endwhile; ?>
        <?php  if(comments_open( get_the_ID() ))  {
                  comments_template(); 
                } ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</main>
<?php get_footer();?>