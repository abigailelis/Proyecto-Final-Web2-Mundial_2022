<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <base href="{$BASE_URL}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link rel="stylesheet" href="{$BASE_URL}css/style.css" type="text/css">
  <title>{$titulo}</title>
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid justify-content-between">
        <div class="navbar-collapse">
          <ul class="navbar-nav">
            <li class="nav-item nav-link"><a class="nav-link" href="{$BASE_URL}home">Home</a></li>
            <li class="nav-item nav-link"><a class="nav-link" href="{$BASE_URL}paises">Paises</a></li>
            <li class="nav-item nav-link"><a class="nav-link" href="{$BASE_URL}jugadores">Jugadores</a></li>
          </ul>
        </div>
        <div class="navbar-collapse justify-content-end">
          <ul class="navbar-nav">
            {if $logueado == false}
              <li class="nav-item">
                <button class="btn btn-sm btn-outline-secondary" type="button">
                  <a class="nav-link" href="{$BASE_URL}login">Log in</a>
                </button>
              </li>
            {else}
              <li class="nav-item">
                <div class="navbar-collapse justify-content-between">
                  <span class="spinner-grow text-success spinner-grow-sm"></span>
                  <span class="nav-link">En línea: {$usuario|default: ''}</span>
                  <button class="btn btn-sm btn-outline-secondary" type="button">
                    <a class="nav-link" href="{$BASE_URL}logout">Log out</a>
                  </button>
                </div>
              </li>
            {/if}
          </ul>
        </div>
      </div>
    </div>
  </nav>
</header>