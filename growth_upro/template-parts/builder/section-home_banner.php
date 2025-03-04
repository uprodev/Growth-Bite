<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

  <section class="banner-home">
    <div class="bg-left"></div>
    <div class="bg-right"></div>
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-lg-10 text-center">


          <?php if ($label['link']): ?>
            <div class="case-link">
              <a href="<?= $label['link']['url'] ?>"<?php if($label['link']['target']) echo ' target="_blank"' ?>>

                <?php if ($label['text']): ?>
                  <span><?= $label['text'] ?></span>
                <?php endif ?>

                <?= html_entity_decode($label['link']['title']) ?>
                <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M6.5 12L10.5 8L6.5 4" stroke="#EC4A0A" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </a>
            </div>
          <?php endif ?>

          <?php if ($title): ?>
            <h1><?= $title ?></h1>
          <?php endif ?>
          
          <?php if ($text): ?>
            <div class="lead"><?= $text ?></div>
          <?php endif ?>
          
          <?php if ($link): ?>
            <div class="btn-wrap">
              <a href="<?= $link['url'] ?>" class="btn btn-primary"<?php if($link['target']) echo ' target="_blank"' ?>><?= html_entity_decode($link['title']) ?></a>
            </div>
          <?php endif ?>
          
        </div>
      </div>
    </div>

    <?php if($logos['gallery']): ?>
      <div class="cp-logos">

        <?php if ($logos['title']): ?>
          <div class="title"><?= $logos['title'] ?></div>
        <?php endif ?>
        
        <div class="logos-slider swiper">
          <div class="swiper-wrapper">

            <?php foreach($logos['gallery'] as $image): ?>

              <div class="swiper-slide">
                <?php if (pathinfo($image['url'])['extension'] == 'svg'): ?>
                  <img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>">
                <?php else: ?>
                  <?= wp_get_attachment_image($image['ID'], 'full') ?>
                <?php endif ?>
              </div>

            <?php endforeach; ?>

          </div>
        </div>
      </div>
    <?php endif; ?>

  </section>

  <?php endif; ?>