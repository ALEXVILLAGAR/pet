<?php if (isset($element['id'])): ?>
<div class="modal" id=<?php echo "newDonationM".$element['id'] ?>>
    <?php else: ?>
<div class="modal" id="newDonationM" ?>>
<?php endif ?>
    <div class="modal-dialog">
        <div class="modal-content border-success">
            <!-- Modal Header -->
            <div class="modal-header bg-dark text-white">
                <h3 class="modal-title" id="myModalLabel">
                    Nueva Donación
                <form action="../../ruta.php?variable=donacion" id="form-donar" method="post">
                    <input type="hidden" name="monto" id="monto" value="">
                    <?php if (isset($element['nombre'])):
                         echo $element['nombre'] ?>
                         <input type="hidden" name="id_fundacion" value="<?php echo $element['id'] ?>">
                    <?php else: ?>
                           <select name="id_fundacion">
                           <?php foreach (Fundacion::fundaciones() as $element): ?>
                               <option value="<?php echo $element['id'] ?>"> 
                                <?php echo $element['nombre'] ?> </option>
                            <?php endforeach ?>
                            </select>
                     <?php endif ?>
                 </form>
                </h3>
                <button class="close bg-danger" data-dismiss="modal" type="button">
                    x
                </button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <div class="valores">
                    <div class="form-group">
                        <label>
                            <h4>
                                ¿Cuánto quieres donar?
                            </h4>
                        </label>
                        <br>
                            <div aria-label="Basic example" class="btn-group values" role="group">
                                <button class="btn btn-sample active selectvalue" type="button" onclick="document.getElementById('stripeAmount').innerHTML = '5000'">
                                    5000
                                </button>
                                <button class="btn btn-sample selectvalue" type="button" onclick="document.getElementById('stripeAmount').innerHTML = '10000'">
                                    10000
                                </button>
                                <button class="btn btn-sample selectvalue" type="button" onclick="document.getElementById('stripeAmount').innerHTML = '20000'">
                                    20000
                                </button>
                                <button class="btn btn-sample selectvalue" type="button" onclick="document.getElementById('stripeAmount').innerHTML = '50000'">
                                    50000
                                </button>
                                <button class="btn btn-sample customvalue" type="button" onclick="document.getElementById('ool').style.display = 'inline'">
                                    Otra cantidad
                                </button>
                            </div>
                            
                    </div>
                </div>
                <br>
                <div class="input-group customam" style="display: none; margin-top:10px;" id="ool">
                                <span class="input-group-addon" id="basic-addon1">
                                    $
                                </span>
                                <input  id="custom" placeholder="Otra cantidad" min="1000" type="number"></input>
                                <button class="btn btn-sample customvalue" type="button" onclick="document.getElementById('stripeAmount').innerHTML = document.getElementById('custom').value">
                                    Agregar
                                </button>
                </div>
                <br><br>
                    <div class="money-donate">
                        <span id="displayAmount">
                            <h2>
                                <span id="sign">
                                    $
                                </span>
                                <span id="stripeAmount">
                                    5000
                                </span>
                            </h2>
                        </span>
                    </div>
                    <div class="info-box text-info text-center">
                        <h4>Muchas gracias por participar en esta campaña.</h4>
                    </div>
                </br>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer bg-secondary">
                <button class="btn btn-success" id="stripeButton" style="width: 100%;" onclick="SubmitForm()">
                        Continuar con la donación
                    </button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    
    function SubmitForm () {
        document.getElementById('monto').value = document.getElementById('stripeAmount').innerText;
        var form = document.forms['form-donar'];
        form.submit();
    }
</script>