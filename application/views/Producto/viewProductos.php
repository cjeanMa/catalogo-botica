<div class="container">
    <h2>Productos de la tienda</h2>
    <table class="table table-response">
        <thead>
        <tr>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Tipo</th>
        <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
            <?php foreach($productos as $p){?>
            <tr>
                <td><?=$p['nombreProducto']?></td>
                <td><?=$p['precioProducto']?></td>
                <td><?=
                $p['nombreTipo']?>
                </td>
                <td>
                        <a href="<?=base_url('producto/edit/').$p['idProducto']?>" class="btn btn-warning btn-sm"><span class="fa fa-edit"></span></a>
                        <a href="<?=base_url('producto/remove/').$p['idProducto']?>" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span></a>
                </td>
            </tr>
            <?php }?>
        </tbody>
    </table>
</div>
