<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

  <section class="section-form">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-5 col-lg-4">

          <?php if ($title): ?>
            <h2><?= $title ?></h2>
          <?php endif ?>
          
          <?php if ($text): ?>
            <div class="lead"><?= $text ?></div>
          <?php endif ?>
          
        </div>
        <div class="col-md-7 col-lg-8">

          <?php if ($form): ?>
            <div class="form">
              <?= do_shortcode('[contact-form-7 id="256a9f6"]') ?>
            </div>
          <?php endif ?>
          
        </div>
      </div>
    </div>
  </section>

  <?php endif; ?>