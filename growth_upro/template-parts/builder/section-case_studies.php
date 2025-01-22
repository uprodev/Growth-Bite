<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

  <?php if($case_studies): ?>

    <section class="home-cases">
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

          <?php foreach($case_studies as $index => $post): 

            global $post;
            setup_postdata($post); ?>
            <div class="<?= $index == 0 ? 'col-12' : 'col-sm-6 col-md-4' ?>">
              <?php get_template_part('parts/content', 'case_study', ['index' => $index]) ?>
            </div>
          <?php endforeach; ?>
          
          <?php wp_reset_postdata(); ?>

        </div>
      </div>
    </section>

  <?php endif; ?>

  <?php endif; ?>