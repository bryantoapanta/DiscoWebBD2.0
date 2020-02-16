<?php
// Guardo la salida en un buffer(en memoria)
// No se envia al navegador
ob_start();

?>
<div id='aviso'><b><?= (isset($msg))?$msg:"" ?></b></div>
<center>
	<h1 class="paginas">Ficheros Del Usuario <?=$_SESSION["user"]?></h1>
	<h2><?php 
	$user=$_SESSION["user"];
	$espacio = ModeloUserDB::calcularEspacio($user);
	$plan = modelouserdb::obtener_plan($user);
	//echo $plan." y ".$espacio;
	
	switch ($plan){
	    case "B�sico":
	        echo ($espacio/1024)."/"."2000 KB";
	        break;
	    case "Profesional":
	        echo ($espacio/1024)."/"."5000 KB";
	        break;
	    case "Premium":
	        echo ($espacio/1024)."/"."10000 KB";
	        break;
	}
	
	?>
	</h2>
	<table id="verusuarios">
		<tr>
		<th>Nombre Fichero</th>
		<th>Directorio</th>
		<th>Tipo</th>
		<th>Tamano</th>
<?php
$auto = $_SERVER['PHP_SELF'];
// identificador => Nombre, email, plan y Estado
?>
<?php foreach ($ficheros as $clave => $datosusuario) : ?>
		
		<tr>
			
			<?php for  ($j=0; $j < count($datosusuario); $j++) :?>
     		<?php 
     		if ($j==0 || $j==1 || $j==3){
     		    echo "<td class=\"ocultos\">";
     		    echo $datosusuario[$j];
     		}
     		else{
     		    echo "<td>";
     		    echo $datosusuario[$j];
     		}
     		
     		if($j==3){//posicion 3 (tama�o archivo)
     		    
     		    echo " KB/";
     		}
     		
     		
     		 ?></td>
			<?php endfor;?>
			<td class="borrador"  ><a href="#" onclick="confirmarBorrarfichero('<?= $datosusuario[0]."','".$clave."'"?>);">&#9760;&#9851;</a></td>
			<td class="modificacion"><a href="#" onclick="confirmarRenombrarfichero('<?= $datosusuario[0]."','".$clave."'"?>);">&#9998;</a></td>
			<td class="detalle"><a href="<?= $auto?>?operacion=Descargar&id=<?= $datosusuario[0]?>">Descargar</a></td>
		</tr>
<?php endforeach; ?>
</table>

	<br>
	<form action='index.php'>
		<p><input type='button' value='Subir Fichero' onclick="subirFicheros();"></p>
		<input type='button' value='Cerrar sesión' onclick="cerrarSesionUsuario()">
		<input type='button' value='Modificar Datos' onclick="modificarDatos()">
	</form>
	
</center>
<?php
// Vacio el bufer y lo copio a contenido
// Para que se muestre en div de contenido de la página principal
$contenido = ob_get_clean();
include_once "principal.php";

?>
