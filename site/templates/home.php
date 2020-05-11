<?php snippet('header') ?>

  <main class="main" role="main">
    <div class="container project">
      <div class="row">
          <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1">
            <?php echo $page->text()->kirbytext(); ?>
          </div>
      </div>
    </div>
    <hr>

    <?php //snippet('posts') ?>

  </main>

<?php snippet('footer') ?>