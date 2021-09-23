<?php get_header(); ?>

<article class="single-post">
    <div style="display: flex; justify-content: space-around; padding-top: 40px;" class="title">
      <h2 style="font-size: 2.1em; margin: 200px 50px 0 50px; transform: rotate(-40deg);
  transform-origin: top left;"><a href="#"><?php the_title(); ?></a></h2>
      <div><?php the_content() ?></div>
    </div>
    <div class="meta">
    <small><?php the_time('F jS, Y') ?>   Author:<a href="#" class="author"> <?php the_author_posts_link() ?></small></a>
    </div>
 
</article>

<?php get_footer(); ?>