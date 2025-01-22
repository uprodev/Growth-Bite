<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

  <section class="cta">
    <div class="container-fluid">
      <div class="inner">

        <?php if ($title): ?>
          <h2><?= $title ?></h2>
        <?php endif ?>

        <?php if ($text): ?>
          <div class="lead"><?= $text ?></div>
        <?php endif ?>

        <?php if ($link): ?>
          <div class="btn-wrap">
            <a href="<?= $link['url'] ?>" class="btn btn-white"<?php if($link['target']) echo ' target="_blank"' ?>><?= html_entity_decode($link['title']) ?></a>
          </div>
        <?php endif ?>

      </div>
    </div>
  </section>

  <?php endif; ?>