<!-- Bootstrap core JavaScript-->
<script src="<?= base_url() ?>assets/theme/vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url() ?>assets/theme/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url() ?>assets/theme/vendor/jquery-easing/jquery.easing.min.js"></script>

<script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js" integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew==" crossorigin=""></script>


<!-- Modificar el o los archivos js que se utilizara-->
<?php if (!empty($javascript)) {
  foreach ($javascript as $js) {
?>
    <script src="<?= base_url() . 'assets/modulos/' . $js ?>"></script>
<?php }
} ?>