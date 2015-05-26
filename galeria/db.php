<?php
 
 /*Archivo donde se puede accesar a la funcion para conectar a la base de datos en MySQL*/
include('conexion.php');

/** Switch donde se seleccion la funcion a realizar dependiendo de cual sea requerida por el controlador "controller.js" **/

switch($_GET['action']) {
case 'add_obra' :
add_obra();
break;
 
case 'get_obras' :
get_obras();
break;
 
case 'edit_obra' :
edit_obra();
break;
 
case 'delete_obra' : 
delete_obra();
break;
 
case 'update_obra' :
update_obra();
break;
}
 
/** Funcion para agregar un obra a la galeria en la base de datos**/
 
function add_obra() {

$sql = "INSERT INTO obras (nombre,autor,descripcion,anio) VALUES (:nombre, :autor, :descripcion, :anio)";
try {
	$db = getConnection();
	$stmt = $db->prepare($sql);
	$obra = json_decode(file_get_contents("php://input"));
	$stmt->bindParam("nombre", $obra->obra_nombre);
	$stmt->bindParam("autor", $obra->obra_autor);
	$stmt->bindParam("descripcion", $obra->obra_descripcion);
	$stmt->bindParam("anio", $obra->obra_anio);
	$stmt->execute();
	$db=null;
	echo json_encode($obra);
} 
	catch (PDOException $e) {
		echo '{"error": {"text":'. $e ->getMessage() .'}}';
	}
}
 
/** Funcion para obtener todas las obras de la galeria en la base de datos**/
 
	function get_obras() {
	$sql = "SELECT obra_id,nombre,autor,descripcion,anio FROM obras";
	try {
		$db = getConnection();
		$stmt = $db->query($sql);
		$obras = $stmt->fetchAll(PDO::FETCH_OBJ);
		$db = null;
		echo json_encode($obras);
		} 
	catch (PDOException $e) {
		echo '{"error": {"text":'. $e ->getMessage() .'}}';
		}
	}
 
/** Funcion para eliminar una obra de la galeria en la base de datos **/
 
function delete_obra() {
$obras = json_decode(file_get_contents("php://input")); 
$id = $obras->obra_index; 
$sql = "DELETE FROM obras WHERE obra_id=".$id;
	try {
		 $db = getConnection();
		 $stmt = $db->query($sql);
		 $obras = $stmt->fetchAll(PDO::FETCH_OBJ);
		 $db=null;
		 echo json_encode($obras);
	} 
	catch (PDOException $e) 
		{
		echo '{"error": {"text":'. $e ->getMessage() .'}}';
		}
	}
 
?>