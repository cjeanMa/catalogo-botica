<section class="features-icons bg-light text-center mb-2 pb-4">
    <div class="container">
        <!-- Zona par aproductos de salud -->
        <div class="alert py-4 px-0">
            <h2 class="text-center bg-own-primary py-2 rounded">Productos - <?=$categoria['nombreCategoria']?></h2>
        </div>
        <div class="row">

            <?php foreach ($productos as $producto) { ?>
                <div class="col-sm-6 col-12 col-md-4 col-lg-3">
                    <div class="card mb-4 card-sombra">
                        <a href="<?= base_url("portal/producto/") . $producto['idProducto'] ?>">
                            <img class="card-img-top img-cartilla mt-3" src="<?= base_url() ?>assets/villaFarma/img/img-products/<?=$producto['imagenProducto']?>" alt="Producto">
                            <p class="text-center text-secondary py-3"><?= $producto['nombreProducto'] ?></p>
                            <div class="card-body bg-light">
                                <p class="card-text font-weight-bold"><?= "S/." . $producto['precioProducto'] ?></p>
                            </div>
                        </a>

                    </div>
                </div>

            <?php } ?>
        </div>
        <br>
        </div>
</section>