<!-- Products -->
<section class="features-icons bg-light text-center mb-2 pb-4">
    <div class="container">
        <!-- Zona par aproductos de salud -->
        <div class="alert py-4 px-0">
            <h2 class="text-center bg-own-primary py-2 rounded">Productos - Salud</h2>
        </div>
        <div class="row">

            <?php foreach ($productos as $producto) { ?>
                <div class="col-sm-6 col-12 col-md-4 col-lg-3 ">
                    <div class="card card-sombra">
                        <a href="<?= base_url("productos/salud/") . $producto['idProducto'] ?>">
                            <img class="card-img-top img-cartilla" src="<?= base_url() ?>assets/villaFarma/img/img-products/product1.jpg" alt="Producto">
                            <p class="text-center text-secondary py-3"><?= $producto['nombreProducto'] ?></p>
                            <div class="card-body bg-light">
                                <p class="card-text font-weight-bold"><?= "S/." . $producto['precioProducto'] ?></p>
                            </div>
                        </a>

                    </div>
                </div>

            <?php } ?>
            <br>
            <button class="btn btn-success btn-block mt-4 text-uppercase">Ver Mas Productos</button>
        </div>
        <br>

        <!-- Zona par aproductos de Proteccion Personal -->
        <div class="alert py-4 px-0">
            <h2 class="text-center bg-own-primary py-2 rounded">Productos - Porteccion Personal</h2>
        </div>
        <div class="row">

            <?php foreach ($productos as $producto) { ?>
                <div class="col-sm-6 col-12 col-md-4 col-lg-3 ">
                    <div class="card mb-4 card-sombra">
                        <a href="<?= base_url("productos/salud/") . $producto['idProducto'] ?>">
                            <img class="card-img-top img-cartilla" src="<?= base_url() ?>assets/villaFarma/img/img-products/product1.jpg" alt="Producto">
                            <div class="titulo-card">
                                <p class="text-center text-secondary py-3"><?= $producto['nombreProducto'] ?></p>
                            </div>

                            <div class="card-body bg-light">
                                <p class="card-text font-weight-bold"><?= "S/." . $producto['precioProducto'] ?></p>
                            </div>
                        </a>

                    </div>
                </div>

            <?php } ?>
            <br>
            <button class="btn btn-success btn-block mt-4 text-uppercase">Ver Mas Productos</button>
        </div>

    </div>
</section>