<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Nuestra Labor es ofrecerles productos de salud, estetica e higiene de buena calidad.">
    <meta name="author" content="Jean Castillo">

    <title>BOTICA VILLA FARMA</title>
    <?php
    $this->load->view('template/cssPortal');
    ?>
</head>

<body>
    <!-- Page Wrapper -->
    <div id="wrapper">
        <?php

        if (isset($_view) && $_view)
            $this->load->view('template/portal/navbar');
            $this->load->view('template/portal/banner');

        ?>
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <?php $this->load->view($_view); ?>
                <?php $this->load->view('template/portal/middleInformation'); ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->



                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <?php $this->load->view('template/portal/footer'); ?>

        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->
    <?php
    $this->load->view('template/jsPortal');
    //condidional para cargar los js propios si es que fueran necesarios

    ?>
</body>

</html>