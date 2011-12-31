<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title><?php echo $config['blog_title'] ?></title>
  <link rel="stylesheet" href="<?php echo theme_url() ?>/css/style.css" type="text/css" />
</head>
<body>

<header>
  <h1><a href="<?php echo $config['base_url'] ?>"><?php echo $config['blog_title'] ?></a></h1>
  <p class="description"><?php echo $config['blog_description'] ?></p>
</header>

<section class="main">
  <?php include $view ?>
</section>

<section class="sidebar">
</section>

<footer>
</footer>

</body>
</html>
