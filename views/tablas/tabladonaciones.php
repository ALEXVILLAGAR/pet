    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.css">

        <div class="table-wrapper tabla">
            <div class="table-title bg-info">
                <div class="row">
                    <div class="col-sm-6 pr-5 col-lg-5">
                        <h2><b>Mis Donaciones </b></h2>
                    </div>              
                        <div class="search-box pl-5 col-lg-5" >
                            <div class="input-group col-sm-5 col-lg-5" style="float: right;">
                                <input type="text" id="search" class="form-control" placeholder="Buscar por nombre">
                                <span class="input-group-addon"><i class="fas fa-search"></i></span>
                            </div>             
                    </div>
                </div>
            </div>
            <table class="table  table-striped table-hover tablad" id="tabla">
                <thead>
                    <tr>
                        <th>Fundación</th>
                        <th>Valor</th>
                        <th>Fecha</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($user->mis_donaciones() as $element): 
                        $fundacion=Fundacion::fundacion($element['id_fundacion']);
                        ?>
                    <tr>
                        <td><?php echo $fundacion['nombre'] ?></td>
                        <td><?php echo $element['monto'] ?></td>
                        <td><?php echo $element['fecha'] ?></td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
            <div class="clearfix">
                <div class="hint-text">Mostrando <b>5</b> De <b>25</b> Entradas</div>
                <ul class="pagination">
                    <li class="page-item disabled"><a href="#">Previo</a></li>
                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item active"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                    <li class="page-item"><a href="#" class="page-link">Siguiente</a></li>
                </ul>
            </div>
        </div>

<script src="//code.jquery.com/jquery-1.12.4.js"></script>

<script src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script>    
$(document).ready( function () {
    $('td:contains("Deleted")').parent().css('color','red');
    $('td:contains("Updated")').parent().css('color','blue');

    var table = $('#tabla').dataTable({ //!= DataTable
        "processing": true,
        //"serverSide": true,
        "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
        "language": {
                    "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
                      },
    });
</script>