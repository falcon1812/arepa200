<!DOCTYPE HTML>
<html>
<head>
    <title>MVC</title>
	<meta charset="UTF-8">
    <?=
        HTML::getMetatag('viewport','width=device-width, initial-scale=1.0'),
        HTML::getStyle('https://fonts.googleapis.com/icon?family=Material+Icons'),
        HTML::getStyle(URL, 'materialize.min'),
        HTML::getStyle(URL, 'Style'),
        HTML::getJs(URL, 'jquery.min'),
        HTML::getJs(URL, 'materialize.min');
    ?>
</head>
<body>
  <nav>
    <div class="nav-wrapper blue-grey darken-3">
      <?= HTML::getLink('<i class="large material-icons">perm_identity</i>', 'Index', URL, 'brand-logo'); ?>
      <a href="#" data-activates="mobile-demo" class="button-collapse">
          <i class="material-icons">toc</i>
      </a>
      <ul class="right hide-on-med-and-down">
        <li><?= HTML::getLink('Inicio', 'Index', URL); ?></li>
        <li><?= HTML::getLink('Esto', 'Esto', URL); ?></li>
        <li><?= HTML::getLink('Ayuda', 'Ayuda', URL); ?></li>
        <li><?= HTML::getLink('Merwe', 'Merwe', URL); ?></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><?= HTML::getLink('Inicio', 'Index', URL); ?></li>
        <li><?= HTML::getLink('Esto', 'Esto', URL); ?></li>
        <li><?= HTML::getLink('Ayuda', 'Ayuda', URL); ?></li>
        <li><?= HTML::getLink('Merwe', 'Merwe', URL); ?></li>
      </ul>
    </div>
  </nav>
<div class="container">
          