<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

  <?php if($services): ?>

    <section class="home-services">
      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-lg-8 col-xl-8 text-center">

            <?php if ($title): ?>
              <h2><?= $title ?></h2>
            <?php endif ?>

            <?php if ($text): ?>
              <div class="lead"><?= $text ?></div>
            <?php endif ?>

          </div>
        </div>
        <div class="row">

          <?php foreach($services as $post): 

            global $post;
            setup_postdata($post); ?>
            <div class="col-sm-6 col-md-4">
              <div class="service-card">
                <div class="card-body">
                  <h5><?php the_title() ?></h5>

                  <?php if (has_excerpt()): ?>
                    <?php the_excerpt() ?>
                  <?php endif ?>

                  <a href="<?php the_permalink() ?>" class="content-link">
                    <?php _e('Learn more', 'Growth') ?>
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M6 12L10 8L6 4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                  </a>
                </div>

                <?php if (has_post_thumbnail()): ?>
                  <figure>
                    <?php the_post_thumbnail('full') ?>
                  </figure>
                <?php endif ?>
                
              </div>
            </div>
          <?php endforeach; ?>

          <?php wp_reset_postdata(); ?>

        </div>
      </div>
      <div class="block-bg"></div>
    </section>

  <?php endif; ?>

  <?php endif; ?>