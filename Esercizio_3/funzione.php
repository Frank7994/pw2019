<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<?php 

function estrazione($inizio,$fine){
    $numeri=array();
    $i=' ';
for($x=0;$x<5;$x++){
$numero_estratto = rand($inizio,$fine);
$numeri[$x] = $numero_estratto;
}

return $numeri;
}





$ruote = array(
'Bari',
'Cagliari',
'Firenze',
'Genova',
'Milano',
'Napoli',
'Palermo',
'Roma',
'Torino',
'Venezia',
'Nazionale',
);


