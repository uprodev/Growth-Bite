<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

  <section class="case-main">
    <div class="container-fluid">
      <div class="block-header">

        <?php if ($title): ?>
          <h2><?= $title ?></h2>
        <?php endif ?>
        
        <?php if ($text): ?>
          <div class="lead"><?= $text ?></div>
        <?php endif ?>
        
      </div>

      <?php if (is_array($items) && checkArrayForValues($items)): ?>
      <div class="row">

        <?php foreach ($items as $item): ?>
          <div class="col-12">
            <div class="case-card">

              <?php if ($item['image']): ?>
                <div class="card-img">
                  <figure>
                    <?= wp_get_attachment_image($item['image']['ID'], 'full') ?>
                  </figure>
                </div>
              <?php endif ?>

              <div class="card-body">

                <?php if ($item['logo']): ?>
                  <span class="card-logo">
                    <?php if (pathinfo($item['logo']['url'])['extension'] == 'svg'): ?>
                      <img src="<?= $item['logo']['url'] ?>" alt="<?= $item['logo']['alt'] ?>">
                    <?php else: ?>
                      <?= wp_get_attachment_image($item['logo']['ID'], 'full') ?>
                    <?php endif ?>
                  </span>
                <?php endif ?>

                <?php if ($item['title']): ?>
                  <h3><?= $item['title'] ?></h3>
                <?php endif ?>

                <?= $item['text'] ?>

                <?php if ($item['link']): ?>
                  <a href="<?= $item['link']['url'] ?>" class="content-link"<?php if($item['link']['target']) echo ' target="_blank"' ?>>
                    <?= html_entity_decode($item['link']['title']) ?>
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M6 12L10 8L6 4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                  </a>
                <?php endif ?>

              </div>
            </div>
          </div>
        <?php endforeach ?>
        
      </div>
    <?php endif ?>

  </div>
  <div class="block-bg"></div>
</section>

<?php endif; ?>