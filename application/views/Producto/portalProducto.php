<div class="container bg-light my-5 rounded p-5">
    <!-- <h2 class="text-center mb-5">Producto</h2> -->
    <div class="row">
        <div class="col-sm-12 col-md-6">
            <img class="img-producto" src="<?=base_url('assets/villaFarma/img/img-products/').$producto['imagenProducto']?>" alt="Producto">
        </div>
        <div class="col-md-6 col-sm-12">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3>Nombre del Producto:</h3>
                        <h5 class="p-2"><?=$producto['nombreProducto']?></h5>
                    </div>
                    <div class="col-12">
                        <h3>Precio:</h3>
                        <h5 class="p-2">S/. <?=$producto['precioProducto']?></h5>
                    </div>
                    <div class="col-12">
                        <h3>Descripcion:</h3>
                        <h5 class="p-2"><?=$producto['descripcionProducto']?></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>