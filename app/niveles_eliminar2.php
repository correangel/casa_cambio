<?php
session_name('casa_cambio');
session_start();
$config=parse_ini_file('./configs/config.inc',true);
include('./configs/bd.php');
include('./configs/funciones_sistema.php');
include('./configs/funciones.php');
include('./configs/smarty.php');
include('./modelo/bd_modelo.php');
//if (bd_verificar_privilegios('niveles_eliminar2.php',$_SESSION['usuario']['nivel_id'])!='CONCEDER')
//{
//	ir('negacion_usuario.php');
//}
if (!isset($_REQUEST['id'])) ir('niveles_lista.php');

$id=$_REQUEST['id'];
$datos=bd_niveles_eliminar($id);
ir('mensajev.php?mensaje=Elemento eliminado satisfactoriamente')
;