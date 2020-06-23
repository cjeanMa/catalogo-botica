
  <!-- Bootstrap core JavaScript-->
  <script src="<?=base_url()?>assets/theme/vendor/jquery/jquery.min.js"></script>
  <script src="<?=base_url()?>assets/theme/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?=base_url()?>assets/theme/vendor/jquery-easing/jquery.easing.min.js"></script>


  <!-- Modificar el o los archivos js que se utilizara-->
 <?php if(!empty($javascript)){
    foreach($javascript as $js){
   ?>
		  <script src="<?=base_url().'assets/modulos/'.$js?>"></script>
	<?php } } ?>


