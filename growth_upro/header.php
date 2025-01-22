<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
  <meta charset="UTF-8" />
  <?php wp_head(); ?>
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <div class="global-wrapper" >
    <header class="header">
      <div class="container-fluid">

        <?php if ($field = get_field('logo_h', 'option')): ?>
          <div class="header-logo">
            <a href="<?= get_home_url() ?>">
              <?php if (pathinfo($field['url'])['extension'] == 'svg'): ?>
                <img src="<?= $field['url'] ?>" alt="<?= $field['alt'] ?>">
              <?php else: ?>
                <?= wp_get_attachment_image($field['ID'], 'full') ?>
              <?php endif ?>
            </a>
          </div>
        <?php endif ?>
        
        <nav class="navigation-main">
          <div class="inner">

            <?php wp_nav_menu( array(
              'theme_location'  => 'header',
              'container'       => '',
              'items_wrap'      => '<ul>%3$s</ul>'
            )); ?>

            <?php if ($field = get_field('link_h', 'option')): ?>
              <div class="btn-wrap d-lg-none">
                <a href="<?= $field['url'] ?>" class="btn btn-outline"<?php if($field['target']) echo ' target="_blank"' ?>><?= html_entity_decode($field['title']) ?></a>
              </div>
            <?php endif ?>

          </div>
        </nav>
        <div class="header-meta">

          <?php if ($field = get_field('link_h', 'option')): ?>
            <div class="btn-wrap d-none d-lg-block">
              <a href="<?= $field['url'] ?>" class="btn btn-outline btn-sm"<?php if($field['target']) echo ' target="_blank"' ?>><?= html_entity_decode($field['title']) ?></a>
            </div>
          <?php endif ?>

          <button type="button" class="navbar-toggler">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </div>
    </header>

    <main class="content">