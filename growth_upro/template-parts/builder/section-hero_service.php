<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

  <section class="service-hero">
    <div class="container-fluid">
      <div class="block-header">

        <?php if ($title): ?>
          <h1 class="h2"><?= $title ?></h1>
        <?php endif ?>
        
        <?php if ($text): ?>
          <div class="lead"><?= $text ?></div>
        <?php endif ?>
        
        <?php if ($link_1 || $link_2): ?>
          <div class="buttons">

            <?php if ($link_1): ?>
              <a href="<?= $link_1['url'] ?>" class="btn btn-primary"<?php if($link_1['target']) echo ' target="_blank"' ?>><?= html_entity_decode($link_1['title']) ?></a>
            <?php endif ?>

            <?php if ($link_2): ?>
              <a href="<?= $link_2['url'] ?>" class="btn btn-white"<?php if($link_2['target']) echo ' target="_blank"' ?>><?= html_entity_decode($link_2['title']) ?></a>
            <?php endif ?>

          </div>
        <?php endif ?>
        
      </div>
    </div>
    <div class="block-bg"></div>
  </section>

  <?php endif; ?>