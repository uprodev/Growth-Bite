<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

  <section class="service-banner">
    <div class="container-fluid">
      <div class="block-header">

        <?php if ($title): ?>
          <h2><?= $title ?></h2>
        <?php endif ?>
        
        <?= $text ?>
        
      </div>
      <div class="inner">
        <div class="text">

          <?php if ($quote): ?>
            <blockquote><?= $quote ?></blockquote>
          <?php endif ?>
          
          <div class="item-info">

            <?php if ($avatar): ?>
              <figure>
                <?= wp_get_attachment_image($avatar['ID'], 'full') ?>
              </figure>
            <?php endif ?>

            <div>

              <?php if ($name): ?>
                <strong><?= $name ?></strong>
              <?php endif ?>

              <?= $position ?>

            </div>
          </div>
        </div>

        <?php if ($image): ?>
          <div class="image">
            <figure>
              <?= wp_get_attachment_image($image['ID'], 'full') ?>
            </figure>
          </div>
        <?php endif ?>

      </div>
    </div>
  </section>

  <?php endif; ?>