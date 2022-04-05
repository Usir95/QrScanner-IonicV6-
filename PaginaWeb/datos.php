<?php 

$to = "usir95.hp@gmail.com";
$subject = "Mensaje enviado por Página Web HLA";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
 
$message = '
<h2 style="text-align: left;font-size: 16px; padding: 0px; margin: 0px;margin-left: 16px;">Datos de contacto</h2><hr>
<table style="border-collapse: collapse; text-align: left; width: 100%; font: normal 12px/150% Arial, Helvetica, sans-serif; background: #fff; overflow: hidden; border: 10px solid #8C8C8C;">
	<thead>
		<tr>
			<th style="padding: 3px 20px; font-size: 16px; font-weight: bold; border-left: 3px solid #A8A8A8;">Nombre</th>
			<th style="padding: 3px 20px; font-size: 16px; font-weight: bold; border-left: 3px solid #A8A8A8;">Teléfono</th>
			<th style="padding: 3px 20px; font-size: 16px; font-weight: bold; border-left: 3px solid #A8A8A8;">Correo</th>
		</tr>
	</thead>
	
	<tbody>
		<tr style="padding: 3px 20px; background: #C9C9C9; color: #050505;">
			<td style="padding: 3px 20px; font-size: 14px; font-weight: bold; border-left: 3px solid #A8A8A8;">'.$_POST['nombre'].'</td>
			<td style="padding: 3px 20px; font-size: 14px; font-weight: bold; border-left: 3px solid #A8A8A8;">'.$_POST['telefono'].'</td>
			<td style="padding: 3px 20px; font-size: 14px; font-weight: bold; border-left: 3px solid #A8A8A8;">'.$_POST['correo'].'</td>
		</tr>
	</tbody>
</table>

<table style="border-collapse: collapse; text-align: left; width: 100%; background: #fff; overflow: hidden;">
	<thead>
		<tr style="background: #323040; color: white; text-align: center;">
			<th style="text-align: center; padding: 3px 20px; font-size: 16px; font-weight: bold; border-left: 3px solid #A8A8A8;">Mensaje</th>
		</tr>
	</thead>
	
	<tbody>
		<tr style="padding: 3px 20px; background: #C9C9C9; color: #050505;">
			<td style="padding: 3px 20px; font-size: 14px; font-weight: bold; border-left: 3px solid #A8A8A8;">'.$_POST['mensaje'].'</td>
		</tr>
	</tbody>
</table>
';
 
$bool = mail($to, $subject, $message, $headers);
if($bool){
    echo "Mensaje enviado";
}else{
    echo "Mensaje no enviado";
}
?>
