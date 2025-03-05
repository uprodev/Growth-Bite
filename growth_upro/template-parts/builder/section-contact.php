<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

  <section class="section-contacts">
    <div class="container-fluid">
      <div class="block-header">

        <?php if ($title): ?>
          <h1 class="h2"><?= $title ?></h1>
        <?php endif ?>
        
        <?php if ($text): ?>
          <div class="lead"><?= $text ?></div>
        <?php endif ?>
        
      </div>
      
      <?php if ($form): ?>
        <div class="row justify-content-center">
          <div class="col-md-7 col-lg-8">
            <div class="form">
              <?= do_shortcode('[contact-form-7 id="' . $form . '"]') ?>
            </div>
          </div>
        </div>
      <?php endif ?>
      
    </div>
    <div class="block-bg"></div>
  </section>

  <?php endif; ?>