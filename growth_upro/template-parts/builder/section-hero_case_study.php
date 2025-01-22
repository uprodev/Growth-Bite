<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

  <section class="case-hero">
  <div class="container-fluid">
    <div class="block-header">

      <?php if ($title): ?>
        <h1 class="h2"><?= $title ?></h1>
      <?php endif ?>
      
      <?php if ($text): ?>
        <div class="lead"><?= $text ?></div>
      <?php endif ?>
      
    </div>
    <div class="row">
      <div class="col-md-7 col-lg-8">

        <?php if ($image): ?>
          <div class="image">
            <?= wp_get_attachment_image($image['ID'], 'full') ?>
          </div>
        <?php endif ?>

      </div>
      <div class="col-md-5 col-lg-4">
        <div class="text">

          <?php if ($label): ?>
            <h4><?= $label ?></h4>
          <?php endif ?>

          <?php if ($text_2): ?>
            <h3><?= $text_2 ?></h3>
          <?php endif ?>

        </div>
      </div>
    </div>
  </div>
</section>

  <?php endif; ?>