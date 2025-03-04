<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

  <section class="about-inner">
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

        <?php if (is_array($resume) && checkArrayForValues($resume)): ?>
        <div class="col-md-6">
          <div class="text">

            <?php if ($resume['title']): ?>
              <h4><?= $resume['title'] ?></h4>
            <?php endif ?>
            
            <?= $resume['text'] ?>

            <?php if ($field = get_field('linkedin')): ?>
              <a href="<?= $field ?>" class="content-link" target="_blank">
                <?php _e('Review on LinkedIn', 'Growth') ?>
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M6 12L10 8L6 4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </a>
            <?php endif ?>
            
          </div>
        </div>
        <div class="col-md-6 col-image">

          <?php if ($resume['image']): ?>
            <div class="image">
              <figure>
                <?= wp_get_attachment_image($resume['image']['ID'], 'full') ?>
              </figure>
            </div>
          <?php endif ?>
          
        </div>
      <?php endif ?>

      <?php if (is_array($items) && checkArrayForValues($items)): ?>
      <?php foreach ($items as $item): ?>
        <div class="col-md-6">
          <div class="text">

            <?php if ($item['title']): ?>
              <h4><?= $item['title'] ?></h4>
            <?php endif ?>
            
            <?= $item['text'] ?>

          </div>
        </div>
      <?php endforeach ?>
    <?php endif ?>
    
  </div>
</div>
<div class="block-bg">
  <div class="block-bg-item block-bg-item--c1"></div>
  <div class="block-bg-item block-bg-item--c2"></div>
  <div class="block-bg-item block-bg-item--c3"></div>
  <div class="block-bg-item block-bg-item--c4"></div>
</div>
</section>

<?php endif; ?>