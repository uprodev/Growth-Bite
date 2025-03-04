<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

  <section class="about-hero">
    <div class="container-fluid">
      <div class="block-header">

        <?php if ($title): ?>
          <h1 class="h2"><?= $title ?></h1>
        <?php endif ?>
        
        <?php if ($text): ?>
          <div class="lead"><?= $text ?></div>
        <?php endif ?>

      </div>

      <?php if (is_array($banner) && checkArrayForValues($banner)): ?>
      <div class="banner">

        <?php if ($banner['image']): ?>
          <figure>
            <?= wp_get_attachment_image($banner['image']['ID'], 'full') ?>
          </figure>
        <?php endif ?>
        
        <?php if (is_array($banner['labels']) && checkArrayForValues($banner['labels'])): ?>
        <?php foreach ($banner['labels'] as $index => $item): ?>
          <?php if ($item['text']): ?>
            <div class="label btn btn-sm label<?= $index + 1 ?>"><?= $item['text'] ?></div>
          <?php endif ?>
        <?php endforeach ?>
      <?php endif ?>
      
    </div>
  <?php endif ?>
  
  <?php if (is_array($items) && checkArrayForValues($items)): ?>
  <div class="advantages">
    <div class="row">

      <?php foreach ($items as $item): ?>
        <div class="col-sm-6 col-md-3">
          <div class="item">

            <?php if ($item['title']): ?>
              <strong><?= $item['title'] ?></strong>
            <?php endif ?>
            
            <?php if ($item['text']): ?>
              <p><?= $item['text'] ?></p>
            <?php endif ?>
            
          </div>
        </div>
      <?php endforeach ?>
      
    </div>
  </div>
<?php endif ?>

</div>
<div class="block-bg"></div>
</section>

<?php endif; ?>