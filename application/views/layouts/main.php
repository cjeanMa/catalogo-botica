<!DOCTYPE html>
<html>

	<head>
		<title></title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    	<?php
    	$this->load->view('template/css');
    	?>
	</head>

	<body>
	<!-- Page Wrapper -->
  <div id="wrapper">
	<?php	

	if(isset($_view) && $_view)
		$this->load->view('template/admin/sidebar');
	    
	?>
	<!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <?php $this->load->view('template/admin/navbar');?>

        <!-- Begin Page Content -->
        <div class="container-fluid">
        	<?php $this->load->view($_view); ?>
          <!-- Page Heading -->


         
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <?php $this->load->view('template/admin/footer');?>

    </div>
    <!-- End of Content Wrapper -->
	</div>
  <!-- End of Page Wrapper -->
  <?php
	  $this->load->view('template/js');
	  //condidional para cargar los js propios si es que fueran necesarios
	 
      ?>
	</body>

</html>
