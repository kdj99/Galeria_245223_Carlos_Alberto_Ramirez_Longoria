
/** funcion para obtener todas las obras de la base de datos de la ruta que indica que se use la funcion get_obras **/
function index_ctrl($scope, $http){
	/*Impresion en consola para saber que entra al controlador*/
	console.log("En controlador");

	$scope.get_obras = function() {
		$http.get("db.php?action=get_obras").success(function(data)
		{
			$scope.pagedItems = data;
		 	$scope.contador_obras = data.length;
		});
	}
 
/** funcion para ingresar una obra a la galeria haciendo referencia a php **/
 
$scope.obra_submit = function() {
	$http.post('db.php?action=add_obra', 
		{
			'obra_nombre' : $scope.obra_nombre, 
			'obra_autor' : $scope.obra_autor, 
			'obra_descripcion' : $scope.obra_descripcion,
			'obra_anio' : $scope.obra_anio
		}
	)
	.success(function (data, status, headers, config) {
		alert("Obra ingresada correctamente a la galeria :) !");
		$scope.get_obras();
	})
 
	.error(function(data, status, headers, config){
 
	});
}

/** funcion para eliminar una obra de la galeria haciendo refenecia a php **/
 
$scope.obra_delete = function(index) { 
	var decision = window.confirm('Estas seguro de eliminar esta obra de la galeria ?');
	if(decision==true){
	$http.post('db.php?action=delete_obra', 
	{
	'obra_index' : index
	}
		)	 
	.success(function (data, status, headers, config) { 
		
	})
	 
		.error(function(data, status, headers, config){
	 
	});
		window.alert("Obra eliminada correctamente a la galeria :) !");
		$scope.get_obras();
	}
	else{
		return false;
	}	
}


  
}