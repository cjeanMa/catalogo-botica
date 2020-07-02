<div class="container">

    <h2>Nuevo Producto</h2>

    <hr>

    <form action="<?= base_url() ?>producto/add" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="form-group col-6">
                <label for="nombreProducto">Nombre de Producto</label>
                <input type="text" class="form-control" name="nombreProducto" id="nombreProducto" placeholder="Ingrese nombre de producto" required>
            </div>
            <div class="form-group col-6">
                <label for="precioProducto">Precio</label>
                <input type="number" class="form-control" name="precioProducto" id="precioProducto" min="1" step="0.01" placeholder="0.00" required>
                <small>Ingrese con 2 decimales ejm: 14.50</small>
            </div>
        </div>
        <div class="row">
            <div class="col-6 ">
                <div class="form-group col-12">

                    <!-- <div class="custom-file">
                        <input type="file" class="custom-file-input" name="imagenProducto" id="imagenProducto" accept="image/png, .jpeg, .jpg" required>
                        <label class="custom-file-label" for="imagenProducto"><span class=" bg-warning">Subir Archivo</span> </label>
                    </div> -->
                    <label for="imagenProducto">Imagen del Producto</label>
                    <input type="file" name="imagenProducto" id="imagenProducto" class="form-control-file" accept="image/png, .jpeg, .jpg" required>
                </div>
                <div class="form-group col-12">
                    <label for="categoriaProducto">Categoria</label>
                    <select name="categoriaProducto" id="categoriaProducto" class="form-control" required>
                        <option value="">--Seleccione--</option>
                        <?php foreach ($categorias as $c) { ?>
                            <option value="<?= $c['idCategoria'] ?>"><?= $c["nombreCategoria"] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group col-12">
                    <label for="tipoProducto">Tipo</label>
                    <select name="tipoProducto" id="tipoProducto" class="form-control" required>
                        <option value="">--Seleccione--</option>
                        <?php foreach ($tipos as $t) { ?>
                            <option value="<?= $t['idTipo'] ?>"></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="col-6 " id="imgPreview"></div>
        </div>

        <div class="row">
            <div class="col-12">
                <label for="descripcionProducto">Descripcion de producto (Opcional)</label>
                <textarea class="form-control" name="descripcionProducto" id="descripcionProducto" rows="3" placeholder="Pequeña descripcion (Opcional)"></textarea>
            </div>
        </div>
        <hr>
        <button type="submit" class="btn btn-primary btn-block">Guardar</button>
    </form>

</div>