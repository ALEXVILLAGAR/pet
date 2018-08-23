    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.css">

        <div class="table-wrapper tabla">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h2><b>Mis Donaciones </b></h2>
                    </div>
                    <div class="">
                        <div class="search-box" id="don">
                            <div class="input-group">
                                <input type="text" id="search" class="form-control" placeholder="Buscar por nombre de fundación" >
                                <span class="input-group-addon"><i class="fas fa-search"></i></span>
                            </div>
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
                <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                <ul class="pagination">
                    <li class="page-item disabled"><a href="#">Previous</a></li>
                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item active"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                    <li class="page-item"><a href="#" class="page-link">Next</a></li>
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