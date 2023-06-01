<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <base href="{$BASE_URL}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <title>{$titulo}</title>
</head>
<body>
<header>
<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="home">Home</a>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link" href="{$BASE_URL}paises",paises>Paises</a></li>
          <li class="nav-item"><a class="nav-link" href="{$BASE_URL}jugadores",jugadores>Jugadores</a></li>
          <li class="nav-item"><a class="nav-link" href="{$BASE_URL}login",login>Log in</a></li>
          <li class="nav-item"><a class="nav-link" href="{$BASE_URL}logout",logout>Log out</a></li>
        </ul>
      </div>
    </div>
  </nav>
</header>
