<div class="case-card">

  <?php if (isset($args['is_left_image']) && $args['is_left_image'] && has_post_thumbnail()): ?>
  <div class="card-img">
    <figure>
      <?php the_post_thumbnail('full') ?>
    </figure>
  </div>
<?php endif ?>

<div class="card-body">

  <?php if ($field = get_field('logo')): ?>
    <span class="card-logo">
      <?php if (pathinfo($field['url'])['extension'] == 'svg'): ?>
        <img src="<?= $field['url'] ?>" alt="<?= $field['alt'] ?>">
      <?php else: ?>
        <?= wp_get_attachment_image($field['ID'], 'full') ?>
      <?php endif ?>
    </span>
  <?php endif ?>

  <?php if (isset($args['index']) && $args['index'] == 0): ?>

    <?php if ($field = get_field('subtitle')): ?>
      <h3><?= $field ?></h3>
    <?php endif ?>

    <?php if (has_excerpt()): ?>
      <?php the_excerpt() ?>
    <?php endif ?>

  <?php else: ?>

    <?php if ($field = get_field('subtitle')): ?>
      <h4><?= $field ?></h4>
    <?php endif ?>

  <?php endif ?>

  <a href="<?php the_permalink() ?>" class="content-link">
    <?php _e('Read full case study', 'Growth') ?>
    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M6 12L10 8L6 4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
    </svg>
  </a>
</div>

<?php if (!isset($args['is_left_image']) && has_post_thumbnail()): ?>
<div class="card-img">
  <figure>
    <?php the_post_thumbnail('full') ?>
  </figure>
</div>
<?php endif ?>

</div>