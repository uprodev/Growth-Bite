<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

  <section class="home-reviews">
    <div class="container-fluid">

      <?php if (is_array($items) && checkArrayForValues($items)): ?>
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

          <?php foreach ($items as $item): ?>
            <div class="swiper-slide">
              <div class="review-item">

                <?php if ($item['logo']): ?>
                  <span class="item-logo">
                    <?php if (pathinfo($item['logo']['url'])['extension'] == 'svg'): ?>
                      <img class="img-svg" src="<?= $item['logo']['url'] ?>" alt="<?= $item['logo']['alt'] ?>">
                    <?php else: ?>
                      <?= wp_get_attachment_image($item['logo']['ID'], 'full', false, array('class' => 'logo_mob')) ?>
                    <?php endif ?>
                  </span>
                <?php endif ?>

                <?php if ($item['text']): ?>
                  <blockquote><?= $item['text'] ?></blockquote>
                <?php endif ?>

                <div class="item-info">

                  <?php if ($item['avatar']): ?>
                    <figure>
                      <?= wp_get_attachment_image($item['avatar']['ID'], 'full') ?>
                    </figure>
                  <?php endif ?>

                  <div>

                    <?php if ($item['name']): ?>
                      <strong><?= $item['name'] ?></strong>
                    <?php endif ?>

                    <?= $item['position'] ?>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach ?>
          
        </div>
        <div class="swiper-pagination"></div>
      </div>
    <?php endif ?>

    <?php if($logos['gallery']): ?>
      <div class="cp-logos">

        <?php if ($logos['title']): ?>
          <div class="title"><?= $logos['title'] ?></div>
        <?php endif ?>
        
        <ul>

          <?php foreach($logos['gallery'] as $image): ?>

            <li>
              <?php if (pathinfo($image['url'])['extension'] == 'svg'): ?>
                <img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>">
              <?php else: ?>
                <?= wp_get_attachment_image($image['ID'], 'full') ?>
              <?php endif ?>
            </li>

          <?php endforeach; ?>

        </ul>
      </div>
    <?php endif ?>
    
  </div>
</section>

<?php endif; ?>