<?php defined('BASEPATH') or exit('Brak dostpu'); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home</title>
</head>
<body>

  <nav class="navbar navbar-default">
    <div class="container">
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?= $email ?> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/php-mvc/main/logout">Cofnij</a></li>
          </ul>
        </li>
      </ul>

    </div>
  </nav>

  <div class="container">
    <div>
      <div class="container text-center">
        <h1>Sesja zainicjowana</h1>
      </div>
    </div>

  </div>
</body>
</html>