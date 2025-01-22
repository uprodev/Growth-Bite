<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

  <?php if($team): ?>

    <section class="about-team">
      <div class="container-fluid">
        <div class="block-header">
          <div class="text">

            <?php if ($title): ?>
              <h2><?= $title ?></h2>
            <?php endif ?>
            
            <?php if ($text): ?>
              <div class="lead"><?= $text ?></div>
            <?php endif ?>

          </div>
          <div class="reviews-controls swiper-controls">
            <div class="swiper-button-prev">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M15 17.9963L9 11.9963L15 5.99634" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </div>
            <div class="swiper-button-next">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M9 17.9963L15 11.9963L9 5.99634" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </div>
          </div>
        </div>
        <div class="swiper reviews-slider">
          <div class="swiper-wrapper">

            <?php foreach($team as $post): 

              global $post;
              setup_postdata($post); ?>
              <div class="swiper-slide">
                <div class="team-item">
                  <figure>

                    <?php if (has_post_thumbnail()): ?>
                      <a href="<?php the_permalink() ?>">
                        <?php the_post_thumbnail('full') ?>
                      </a>
                    <?php endif ?>
                    
                    <?php if ($field = get_field('linkedin')): ?>
                      <a href="<?= $field ?>" class="team-social" target="_blank">
                        <img src="<?= get_stylesheet_directory_uri() ?>/images/icons/in.svg" alt="" />
                      </a>
                    <?php endif ?>
                    
                  </figure>
                  <a href="<?php the_permalink() ?>" class="item-info">
                    <h4><?php the_title() ?></h4>

                    <?php if ($field = get_field('position')): ?>
                      <h5><?= $field ?></h5>
                    <?php endif ?>
                    
                    <?php if (has_excerpt()): ?>
                      <?php the_excerpt() ?>
                    <?php endif ?>
                    
                  </a>
                </div>
              </div>
            <?php endforeach; ?>

            <?php wp_reset_postdata(); ?>

          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </section>

  <?php endif; ?>

  <?php endif; ?>