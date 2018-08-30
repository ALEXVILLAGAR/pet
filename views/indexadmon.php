
<div class="container">
    <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 class="text-info">Estadisticas</h1>
                </div>
            </div>
            <br>
            <br>
      <div class="row">
                    <div class="col-md-3">
                        <div class="card p-30 border-0 rounded shadow">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-home f-s-40  fa-3x px-3 py-4 pr-5" style="color: #4680ff;"></i></span>
                                </div>
                                <div class="media-body media-text-right py-4 pr-1 pl-3">
                                    <h2 class="h2db"> <?php echo mysqli_num_rows(Fundacion::fundaciones()); ?> </h2>
                                    <p class="m-b-0"> Fundaciones</p>
                                </div>
                            </div>
                        </div>
                    </div>
                      <div class="col-md-3">
                        <div class="card p-30 border-0 rounded shadow">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-usd f-s-40  fa-3x px-3 py-4 pr-5" style="color: #4680ff;"></i></span>
                                </div>
                                <div class="media-body media-text-right py-4 pr-1 pl-3">
                                    <h2 class="h2db"> <?php echo Fundacion::recaudo()[0]; ?> </h2>
                                    <p class="m-b-0">Recaudado</p>
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="col-md-3">
                        <div class="card p-30 border-0 rounded shadow">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-paw f-s-40  fa-3x px-2 py-4 pr-5" style="color: #4680ff;"></i></span>
                                </div>
                                <div class="media-body media-text-right py-4 pr-1 pl-2">
                                    <h2 class="h2db"> <?php echo mysqli_num_rows(Adopcion::adoptados()); ?> </h2>
                                    <p class="m-b-0">Adopciones</p>
                                </div>
                            </div>
                        </div>
                    </div>
                     <div class="col-md-3">
                        <div class="card p-30 border-0 rounded shadow">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-user f-s-40  fa-3x px-3 py-4 pr-5" style="color: #4680ff;"></i></span>
                                </div>
                                <div class="media-body media-text-right py-4 pr-1 pl-3">
                                    <h2 class="h2db"> <?php echo mysqli_num_rows(Usuario::todos_usuarios()); ?> </h2>
                                    <p class="m-b-0">Usuarios</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </div>

<canvas id="grafico">
    
</canvas>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
  <script> 

    var myLineChart = {
    type: 'bar',
    data: {
        labels: [ <?php foreach (Fundacion::fundaciones() as $fundacion): ?>
                "<?php echo $fundacion['nombre'] ?>",
                <?php endforeach ?>
        ],
        datasets: [{
            label: 'numero de mascotas',
             // data: [12, 19, 3, 5, 2, 3],
             data: [<?php foreach (Mascota::MascotasDe() as $pet): ?>
                             "<?php echo $pet ?>",
                    <?php endforeach ?>] ,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
               'rgba(255, 206, 86, 0.2)'
            ],
            borderWidth: 1
        }, {
                    label: 'Cantidad de Donaciones',
                    fill: false,
                    backgroundColor: ['rgba(155, 99, 132, 0.2)','rgba(255, 105, 142, 0.2)','rgba(84, 162, 235, 0.2)'],
                    borderColor: ['rgba(155, 99, 132, 0.2)',
                                    'rgba(54, 162, 235, 0.2)','rgba(164, 202, 155, 0.2)'],
                    data: [<?php foreach (Fundacion::DonacionesDe() as $pet): ?>
                             "<?php echo $pet ?>",
                    <?php endforeach ?>] ,
                },
                {
                    label: 'Cantidad de Mascotas Adoptadas',
                    fill: false,
                    backgroundColor: ['rgba(240, 99, 100, 0.2)','rgba(170, 105, 120, 0.2)','rgba(84, 162, 134, 0.2)'],
                    borderColor: ['rgba(155, 99, 132, 0.2)',
                                    'rgba(54, 162, 135, 0.2)','rgba(164, 102, 155, 0.2)'],
                    data: [<?php foreach (Adopcion::AdopcionesDadas() as $pet): ?>
                             "<?php echo $pet ?>",
                    <?php endforeach ?>] ,
                }]
    },
    options: {
        spanGaps: false,
        responsive: true,
            title: {
                display: true,
                text: 'Estadisticas Want a Pet'
                },
        elements: {
            line: {
                tension: 0.000001
                }
            },
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                    }
                }]
            }
        }
    }


    var linea = document.getElementById('grafico').getContext('2d');//seleccionamos el canvas
    window.line = new Chart(linea,myLineChart);
    </script>