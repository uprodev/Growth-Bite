<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

  <section class="text-page">
    <div class="container-fluid">
      <div class="block-header">

        <?php if ($title): ?>
          <h1 class="h2"><?= $title ?></h1>
        <?php endif ?>
        
        <?php if ($text): ?>
          <div class="lead"><?= $text ?></div>
        <?php endif ?>
        
      </div>

      <?php if ($content): ?>
        <div class="text-wrapper">
          <div class="row align-items-start">

            <?php if ($is_left_navigation): ?>
              <div class="col-md-3">
                <div class="content-nav">
                  <ul></ul>
                </div>
              </div>
            <?php endif ?>
            
            <div class="<?= $is_left_navigation ? 'col-md-9' : 'col-md-12' ?>">
              <div class="page-content"><?= $content ?></div>
            </div>
          </div>
        </div>
      <?php endif ?>
      
    </div>
  </section>

  <?php endif; ?>