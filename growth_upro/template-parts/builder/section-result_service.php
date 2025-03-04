<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

  <?php if (is_array($items) && checkArrayForValues($items)): ?>
  <section class="service-steps">
    <div class="container-fluid">
      <div class="block-header">

        <?php if ($title): ?>
          <h2><?= $title ?></h2>
        <?php endif ?>
        
        <?php if ($text): ?>
          <div class="lead"><?= $text ?></div>
        <?php endif ?>
        
      </div>
      <div class="steps">
        <div class="steps-line"></div>
        <div class="wrapper">

          <?php foreach ($items as $index => $item): ?>
            <div class="step-item step<?= $index + 1 ?>">
              <div class="step-number">
                <span class="num-text"><?= $index + 1 ?></span>
                <span class="hightlight"></span>
              </div>

              <?php if ($item['title']): ?>
                <h4><?= $item['title'] ?></h4>
              <?php endif ?>
              
              <?= $item['text'] ?>

            </div>
          <?php endforeach ?>
          
        </div>
      </div>
    </div>
  </section>
<?php endif ?>

<?php endif; ?>