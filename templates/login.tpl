{include file="header.tpl"}
<div class="container">
  <div class="row">
    <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
      <div class="card border-0 shadow rounded-3 my-5">
        <div class="card-body p-4 p-sm-5">
          <h5 class="card-title text-center mb-5 fw-light fs-5">Iniciar sesión</h5>
          <!-- Mensaje de usuario o contraseña incorrectos -->
          <span class="text-danger">{$msg|default:""}</span>

          <form action="{$BASE_URL}verificar" method="post">
            <!-- Usuario input -->
            <div class="form-outline mb-4">
              <input type="text" class="form-control" name="usuario" placeholder="Ingrese su usuario" value="">
              <label class="form-label" for="usuario">Usuario</label>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
              <input type="password" class="form-control" name="password" placeholder="Ingrese su contraseña" value="">
              <label class="form-label" for="password">Password</label>
            </div>

            <button type="submit" class="btn btn-block mb-4">Sign in</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

{include file="footer.tpl"}