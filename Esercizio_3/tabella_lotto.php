<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<?php 
include('funzione.php');
?>

<table class="table">
  <tbody>
  
    <?php foreach($ruote as $citta){?>
        <tr>
        <th scope="row"><?=$citta?></th>
    
      <?php foreach (estrazione(1,90) as $numero){?>
        <td><?=$numero?></td>
        
      <?php }?>
      </tr>
      <?php } ?>
  </tbody>
</table>