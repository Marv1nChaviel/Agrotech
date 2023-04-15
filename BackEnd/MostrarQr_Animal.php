<?php 
include ('../BackEnd/phpqrcode/qrlib.php');
$Numero_Animal = $_POST['id_animal'];
$rutaqr="../assets/qr_creados/".$Numero_Animal.".png";
if(file_exists($rutaqr)){

    echo '<div class="row">
<div style="text-align: center;"><a href="../assets/qr_creados/'.$Numero_Animal.'.png" download><img src="../assets/qr_creados/'.$Numero_Animal.'.png" /></a>
<label for="colFormLabel"><h4>Animal Codigo: '.$Numero_Animal.'</h4></label>
</div>
</div>';


}else{
    QRcode::png($Numero_Animal,$rutaqr,"Q",6,2);

    echo '<div class="row">
<div style="text-align: center;"><a href="../assets/qr_creados/'.$Numero_Animal.'.png" download><img src="../assets/qr_creados/'.$Numero_Animal.'.png" /></a>
<label for="colFormLabel"><h4>Animal Codigo: '.$Numero_Animal.'</h4></label>
</div>
</div>';
}






?>