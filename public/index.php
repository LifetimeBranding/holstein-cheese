<?php 
  require_once('../resources/config.php'); 
  
  // Contains the render function
  require_once(LIBRARY_PATH . '/router.php');
  $Router = new Router();
?>

<!-- Header -->
<?php require_once(TEMPLATES_PATH . '/header.php'); ?>

<!-- Main Content -->
<div> 
  <?php 
    $Router->render(isset($_GET['page']) ? $_GET['page'] : 'home'); 
  ?> 
</div>

<!-- Footer -->
<?php require_once(TEMPLATES_PATH . '/footer.php'); ?>