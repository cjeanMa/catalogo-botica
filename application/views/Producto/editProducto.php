<div class="container">

    <h2>Actualizar Producto</h2>

    <hr>

    <form action="<?= base_url('producto/edit/').$producto['idProducto'] ?>" method="post" enctype="multipart/form-data">
        <div class="row">
            <div hidden><?=$producto['idProducto']?></div>
            <div class="form-group col-6">
                <label for="nombreProducto">Nombre de Producto</label>
                <input type="text" class="form-control" name="nombreProducto" id="nombreProducto" value="<?=$producto['nombreProducto']?>">
            </div>
            <div class="form-group col-6">
                <label for="precioProducto">Precio</label>
                <input type="number" class="form-control" name="precioProducto" id="precioProducto" min="1" step="0.01" value="<?=$producto['precioProducto']?>">
                <small>Ingrese con 2 decimales ejm: 14.50</small>
            </div>
        </div>
        <div class="row">
            <div class="col-6 ">
                <div class="form-group col-12">

               <!--      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="imagenProducto" id="imagenProducto" accept="image/png, .jpeg, .jpg" required>
                        <label class="custom-file-label" for="imagenProducto"><span class=" bg-warning">Subir Archivo</span> </label>
                    </div> -->

                    <label for="imagenProducto">Imagen del Producto</label>
                    <input type="file" name="imagenProducto" id="imagenProducto" class="form-control-file" accept="image/png, .jpeg, .jpg">
                    
                </div>
                <div class="form-group col-12">
                    <label for="tipoProducto">Tipo</label>
                    <select name="tipoProducto" id="tipoProducto" class="form-control" required>
                        <option value="">--Seleccione--</option>
                        <?php foreach ($tipos as $t) { 
                                if($t['idTipo']==$producto['idTipo']){ ?>
                                <option value="<?= $t['idTipo'] ?>" selected><?=$t['nombreTipo']?></option>
                                <?php } else{?>
                            <option value="<?= $t['idTipo'] ?>"><?=$t['nombreTipo']?></option>
                        <?php } } ?>
                    </select>
                </div>
            </div>
            <div class="col-6 " id="imgPreview">
                <img class="imgPreview" src="<?php echo base_url('assets/villaFarma/img/img-products/').$producto['imagenProducto'];?>" alt="imagen">
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <label for="descripcionProducto">Descripcion de producto (Opcional)</label>
                <textarea class="form-control" name="descripcionProducto" id="descripcionProducto" rows="3" placeholder="Pequeña descripcion (Opcional)" value="<?=$producto['descripcionProducto']?>"></textarea>
            </div>
        </div>
        <hr>
        <button type="submit" class="btn btn-primary btn-block">Guardar</button>
    </form>

</div>