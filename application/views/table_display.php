<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GroceryCRUD</title>
    <link rel="shortcut icon" type="image/png" href="<?php echo base_url('/assets/img/icons/favicon.ico'); ?>" />
    
    <?php foreach($css_files as $file): ?>
      <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
    <?php endforeach; ?>

  </head>
  <body>
    <div style="padding: 10px">
      <h2 style="text-align: center;">Table</h2>
      <?php echo $output; ?>
    </div>

    <div class="padding: 10px">
      <a href='<?php echo base_url(); ?>'>Back to Home</a>
    </div>

    <?php foreach($js_files as $file): ?>
      <script src="<?php echo $file; ?>"></script>
    <?php endforeach; ?>
  </body>
</html>
