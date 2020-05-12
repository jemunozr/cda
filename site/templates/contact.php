<?php snippet('header-post') ?>

<main class="main" role="main">
    <div class="container project">
      <div class="row">
          <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1">
            <?php echo $page->text()->kirbytext(); ?>
            <br><br>
          </div>  
          <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1">  
            <form method="post">
                <?php if($alert_ok): ?>
                <div class="form-group">               
                    <?php foreach($alert_ok as $message): ?>
                    <div class="alert alert-success" role="alert"><?php echo html($message) ?></div>
                    <?php endforeach ?>
                </div>
                <?php endif ?>

                <?php if($alert): ?>
                <div class="form-group">               
                    <?php foreach($alert as $message): ?>
                    <div class="alert alert-warning" role="alert"><?php echo html($message) ?></div>
                    <?php endforeach ?>
                </div>
                <?php endif ?>

                <div class="form-group">
                  <label for="name">NAME: *</label><br>
                  <input class="form-group form-field" type="text" id="name" name="name">
                </div>

                <div class="form-group">
                  <label for="email">EMAIL: * </label><br>
                  <input class="form-group form-field" type="email" id="email" name="email" required>
                </div>

                <div class="form-group">
                  <label for="text">HOW CAN WE HELP YOU? * </label><br>
                  <textarea class="form-group form-field form-field-textarea" id="text" name="text" required rows="8"></textarea>
                </div>
                <div class="form-group">

                  <input class="form-input-button" type="button" name="reset" id="reset" value="RESET">
                  <input class="form-input-button" type="submit" name="submit" value="SUBMIT">

              </form>
          </div>
          <br><br><br>
          <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1">            
            <b>Note:</b> If you are having difficulties with our contact us form above, send us an email to info@bemoacademicconsulting.com (copy & paste the email address)
          </div>
          <br><br><br><br>
      </div>
    </div>
</main>

<?php snippet('footer') ?>