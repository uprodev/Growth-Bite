<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

  <?php if (is_array($items) && checkArrayForValues($items)): ?>
  <section class="service-strategy">
    <div class="container-fluid">
      <div class="block-header">

        <?php if ($title): ?>
          <h2><?= $title ?></h2>
        <?php endif ?>

        <?php if ($text): ?>
          <div class="lead"><?= $text ?></div>
        <?php endif ?>

      </div>
      <div class="row">

        <?php foreach ($items as $item): ?>
          <div class="col-sm-6 col-lg-3">
            <div class="card">

              <?php if ($item['image']): ?>
                <figure>
                  <?= wp_get_attachment_image($item['image']['ID'], 'full') ?>
                </figure>
              <?php endif ?>

              <?php if ($item['title']): ?>
                <h4><?= $item['title'] ?></h4>
              <?php endif ?>

              <?= $item['text'] ?>

            </div>
          </div>
        <?php endforeach ?>

      </div>
    </div>
  </section>
<?php endif ?>

<?php endif; ?>