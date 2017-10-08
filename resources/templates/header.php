<?php $current_page = isset($_GET['page']) ? $_GET['page'] : 'home'; ?>
<!doctype html>
<html lang="en">

<head>
  <title>Holstein Cheese | <?php echo $current_page ?> </title>

  <meta charset="utf-8">
  <meta name="theme-color" content="#be0049">
  <meta name="short_name" content="Holstein">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Choose Holstein, the brand that’s better tasting, better for you, and offers more cheese than any other cheese.">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ"
    crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">
  <link rel="shortcut icon" type="image/x-icon" href="favicon.png?">
</head>

<body>
  <!-- nav component -->
  <nav class="navbar navbar-toggleable-sm w-100 py-4">

    <!-- brand logo -->
    <a class="navbar-brand ml-5" href="?page=home"> 
      <img class="img-fluid" src="images/holstein-navbar.png" alt="Holstein Logo"> 
    </a>

    <!-- links -->
    <div class="navbar-collapse justify-content-end text-center mr-lg-5" id="navbarToggle">
      <ul class="nav mt-3">
        <li class="nav-item">
          <a href="?page=home" class="nav-link navbar-text">Holstein</a> <hr class="activeLinkUnderline" <?php if ($current_page == "home") echo "style=\"display: block !important;\"" ?>> 
        </li>
        <li class="nav-item">
          <a href="?page=products" class="nav-link navbar-text">Products </a> <hr class="activeLinkUnderline" <?php if ($current_page == "products") echo "style=\"display: block !important;\"" ?>> 
        </li>
        <li class="nav-item">
          <a href="?page=aboutus" class="nav-link navbar-text">About </a> <hr class="activeLinkUnderline" <?php if ($current_page == "aboutus") echo "style=\"display: block !important;\"" ?>> 
        </li>
        <li class="nav-item">
          <a href="?page=contact" class="nav-link navbar-text">Contact </a> <hr class="activeLinkUnderline" <?php if ($current_page == "contact") echo "style=\"display: block !important;\"" ?>> 
        </li>
      </ul>
    </div>
  </nav>