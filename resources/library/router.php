<?php 

// Real path function is used to ensure symlink compatibility
require_once(realpath(dirname(__FILE__) . "/../config.php")); 

class Router {

  function render($page, $variables = array()) {

    // Page templates start with 'page-'
    $pageFile = TEMPLATES_PATH . '/' . 'page-' . $page . '.php'; 
  
    // Captures variables if they exist and then creates a key-value pair.
    if (count($variables) > 0) {
      foreach ($variables as $key => $value) {
        if (strlen($key) > 0) {
          ${$key} = $value;
        }
      }
    }
  
    // Display the page if a file match exists and a 404 if it doesn't.
    if (file_exists($pageFile)) {
      require_once($pageFile);
    } else {
      require_once(TEMPLATES_PATH . '/' . '404.php');
    }
  }
}

?>