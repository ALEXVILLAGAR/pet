<div class="container tabla">
<table class="table border border-dark">
  <thead class="thead-dark ">
    <tr>
      <th class="text-center bg-primary" colspan="4"> <h2>preguntas frecuentes</h2></th>
    </tr>
    <tr>
      <th scope="col">pregunta</th>
      <th scope="col">respuesta</th>
      <th scope="col">fecha</th>
      <th scope="col">fundacion</th>
    </tr>
  </thead>
  <tbody>

    <?php 

    foreach ($user->todas_preguntas() as $element): 
      $fundacion = Fundacion::fundacion($element['id_fundacion']);
      ?>
    <tr>
      <td><?php echo $element['pregunta'] ?></td>
      <td><?php echo $element['respuesta'] ?></td>
      <td><?php echo $element['fecha'] ?></td>
      <td><?php echo $fundacion['nombre'] ?></td>
    </tr>
    <?php endforeach ?>
  </tbody>
</table>
</div>