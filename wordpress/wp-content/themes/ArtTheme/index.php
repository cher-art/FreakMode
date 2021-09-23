<?php get_header()?>
<div class="main_article_container">
    <div class="main-article">
      <div class="main-article_content">
        <div class="main-article_content-image"> <?php echo do_shortcode('[smartslider3 slider="2"]');?></div>
        <div class="main-article_content-title">
          <p class="main-article_title">A platform to lift your spirits? Mood-boosting? No. To kill the missing time.</p>
          <p class="main-article_subtitle">Dive into a world of adventure, laughter, joy, fun without the use of heroin and other drugs!</p>
        </div>
      </div>
    </div>
  </div>

  <div class="second_article_container">
    <div class="articles-wrapper">
      <div class="articles-items">
        <h2 class="body_title">All articles</h2>
        <?php

            // параметры по умолчанию
            $posts = get_posts(array(
              'numberposts' => -1,
              'category'    => 0,
              'orderby'     => 'date',
              'order'       => 'DESC',
              'include'     => array(),
              'exclude'     => array(),
              'meta_key'    => '',
              'meta_value'  => '',
              'post_type'   => 'post',
              'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
            ));

            foreach ($posts as $post) {
              setup_postdata($post);


            ?>
              <article class="post" style="padding-top:35px">
                <header>
                <ul class="main_list">
                  <li class="main_item">
                  <a href="<?php the_permalink() ?>">
                  <div class="title">
                    <h2 style="font-size: 1.5em; text-align: center;"><?php the_title(); ?></h2>
                    <p style="text-align: center;"><?php the_content() ?></p>
                    </a>
                  </li>
                </ul>
                

                </header>
            </article>
          </div>

        <?php }wp_reset_postdata(); // сброс ?>
      </div>
    </div>
  </div>
<?php get_footer() ?>