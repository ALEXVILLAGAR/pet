        <div class="table-wrapper tabla">
            <div class="table-title">
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
            <table class="table  table-striped table-hover tablad">
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
