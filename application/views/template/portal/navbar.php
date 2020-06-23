<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
  <div class="container">

    <a class="navbar-brand" href="#"><img class="logo-page" src="<?= base_url() ?>assets/villaFarma/img/logo-page.png" alt="VillaFarma"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link font-weight-bold" href="#">Inicio</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link font-weight-bold" href="<?= base_url() ?>/#servicios">Servicios</a>
        </li>
        <li class="nav-item dropdown active">
          <a class="nav-link font-weight-bold dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Productos
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="<?= base_url() ?>categoria/salud">Salud</a>
            <a class="dropdown-item" href="<?= base_url() ?>categoria/proteccion">Proteccion</a>
            <a class="dropdown-item" href="<?= base_url() ?>categoria/Maternidad">Maternidad</a>
          </div>
        </li>
      </ul>

      <div class="mx-3 ">
        <a href="" class="text-fb">
          <i class="fab fa-facebook fa-2x fa-fw"></i>
        </a>
      </div>
      <div>
        <p class="text-secondary m-0 p-0">Cel: 95941239</p>
        <p class="text-secondary m-0 p-0">Direccion: Jr. Tarpaca 453 - Azangaro</p>
      </div>
    </div>
  </div>

</nav>