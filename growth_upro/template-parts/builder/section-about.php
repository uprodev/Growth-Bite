<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

  <section class="about-text">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6">

          <?php if ($image): ?>
            <div class="image">
              <figure>
                <?= wp_get_attachment_image($image['ID'], 'full') ?>
              </figure>
            </div>
          <?php endif ?>
          
        </div>
        <div class="col-md-6">
          <div class="text">

            <?php if ($title): ?>
              <h3><?= $title ?></h3>
            <?php endif ?>

            <?= $text ?>

            <?php if ($link): ?>
              <a href="<?= $link['url'] ?>" class="content-link"<?php if($link['target']) echo ' target="_blank"' ?>>
                <?= html_entity_decode($link['title']) ?>
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M6 12L10 8L6 4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </a>
            <?php endif ?>

          </div>
        </div>

        <?php if ($banner): ?>
          <div class="col-12">
            <div class="image">
              <figure>
                <?= wp_get_attachment_image($banner['ID'], 'full') ?>
              </figure>
            </div>
          </div>
        <?php endif ?>
        
      </div>
    </div>
    <div class="block-bg"></div>
  </section>

  <?php endif; ?>