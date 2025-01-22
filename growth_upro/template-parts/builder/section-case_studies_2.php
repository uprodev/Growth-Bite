<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

  <section class="cases-list">
    <div class="container-fluid">
      <div class="block-header">

        <?php if ($title): ?>
          <h1 class="h2"><?= $title ?></h1>
        <?php endif ?>

        <?php if ($text): ?>
          <div class="lead"><?= $text ?></div>
        <?php endif ?>

      </div>

      <?php 
      $post_type = 'case_study';
      $args = array(
        'post_type' => $post_type, 
        'posts_per_page' => -1,
        'paged' => get_query_var('paged')
      );
      $wp_query = new WP_Query($args);
      if($wp_query->have_posts()): 
        ?>

        <div class="row">

          <?php while ($wp_query->have_posts()): $wp_query->the_post(); ?>

            <div class="<?= $wp_query->current_post == 0 ? 'col-12' : 'col-sm-6 col-md-4' ?>">
              <?php get_template_part('parts/content', 'case_study', ['index' => $wp_query->current_post, 'is_left_image' => true]) ?>
            </div>
            
          <?php endwhile; ?>

        </div>

        <?php 
      endif;
      wp_reset_query(); 
      ?>

    </div>
    <div class="block-bg"></div>
  </section>

  <?php endif; ?>