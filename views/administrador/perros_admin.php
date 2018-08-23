<?php 
    include('../layout/app_administrador.php');
 ?>
 <section class="bg-faded page-content" >
        <?php $consulta=Mascota::all_dogs();$titulo='Perros'; ?>
            <?php include '..\tablas\tabla_mascotas_admin.php'?>
            
        </section>
        <!-- page-content" -->
    </div>

    <!-- page-wrapper -->
    <script src="../../vendor/jquery-easing/jquery.easing.min.js">
    </script>
    <script src="../../vendor/scrollreveal/scrollreveal.min.js">
    </script>
    <script src="../../vendor/magnific-popup/jquery.magnific-popup.min.js">
    </script>
    <script src="../../vendor/jquery/jquery.min.js">
    </script>
    <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js">
    </script>
    <script src="../../js/custom.js">
    </script>
    <script src="../../js/pinterest_grid.js">
    </script>
    <script src="../../js/creative.min.js">
    </script>
    <script src="../../js/main.js">
    </script>
</body>
