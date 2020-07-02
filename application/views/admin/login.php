
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceso Administrador</title>
    <?php $this->load->view('template/cssPortal')?>
</head>
<body>
<div class="login-form">
    <form action="<?=base_url()?>admin/confirmacion" method="post">
        <img src="<?=base_url()?>assets/villaFarma/img/logo-page.png" alt="Logo" width="100%" class="mb-4 rounded">
        
        <div class="form-group">
            <input type="text" class="form-control" name="userName" placeholder="Username" required="required">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password" required="required">
        </div>
        <?php if(isset($mensaje)){?>
        <div class="alert alert-danger">
            <?=$mensaje?>
        </div>
        <?php }?>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
        </div>
        <div  class="text-center">
            <span style="font-size: 0.6rem">© Botica VillaFarma 2020.Todos los derechos reservados</span>
        </div>     
    </form>
</div>
    <?php $this->load->view('template/jsAdmin')?>
</body>
</html>