<?php 

require_once('data/Tracker.php');

require_once 'include/Webservices/Create.php';
require_once 'include/Webservices/Update.php';
require_once 'include/Webservices/Delete.php';
require_once 'include/Webservices/Revise.php';
require_once 'include/Webservices/Retrieve.php';
require_once 'include/Webservices/DataTransform.php';
require_once 'vtlib/Vtiger/Utils.php';
require_once 'data/CRMEntity.php';
require_once 'include/QueryGenerator/QueryGenerator.php';
require_once 'vtlib/Vtiger/Mailer.php';

class Actas extends CRMEntity {
	var $db, $log; // Se utiliza en las funciones de clase de CRMEntity

	var $table_name = 'vtiger_actas';
	var $table_index= 'actasid';
	var $column_fields = Array();

	/** Indicador si se trata de un módulo personalizado o estándar */
	var $IsCustomModule = true;

	/**
	* Tabla obligatoria para soportar campos personalizados.
	*/
	var $customFieldTable = Array('vtiger_actascf', 'actasid');

	/**
	* Obligatorio para guardar, Incluir tablas relacionadas con este módulo.
	*/
	var $tab_name = Array('vtiger_crmentity','vtiger_actas','vtiger_actascf');

	/**
	* Obligatorio para guardar, Incluya el nombre de la tabla y el nombre de la columna de la clave de la tabla aquí.
	*/
	var $tab_name_index = Array(
	'vtiger_crmentity'=>'crmid',
	'vtiger_actas'=>'actasid',
	'vtiger_actascf'=>'actasid');

	/**
	* Obligatorio para el Listado (Listado relacionado)
	*/
	var $list_fields = Array(
		/* Format: Field Label => Array(tablename, columnname) */
		// tablename should not have prefix 'vtiger_'
		'Referencia' => Array('actas' => 'acta_title'),
		'Assigned To' => Array('crmentity','smownerid')
	);
	var $list_fields_name = Array(
		/* Format: Field Label => fieldname */
		'Referencia' => 'acta_title',
		'Assigned to' => 'assigned_user_id'
	);

	// Hacer el enlace de campo a la vista de detalle
	var $list_link_field= 'acta_title';

	// Para la compatibilidad de listView y tipo de interfaz emergente
	var $search_fields = Array(
		/* Format: Field Label => Array(tablename, columnname) */
		// tablename should not have prefix 'vtiger_'
		'Referencia' => Array('actas' => 'acta_title'),
		'Assigned To' => Array('crmentity','smownerid')
	);

	var $search_fields_name = Array(
		/* Format: Field Label => fieldname */
		'Referencia' => 'acta_title',
		'Assigned to' => 'assigned_user_id'
	);

	// Para la selección de registros de ventanas emergentes
	var $popup_fields = Array ('acta_title');

	// Marcador de posición para los campos de clasificación - Todos los campos se inicializarán para la clasificación a través de initSortFields
	var $sortby_fields = Array();

	// Para la búsqueda alfabética
	var $def_basicsearch_col = 'acta_title';

	// Información necesaria para habilitar la función Importar
	var $required_fields = Array('acta_title' => 1);

	// Se utiliza cuando se habilitan / deshabilitan los campos obligatorios para el módulo.
	// Se refiere a valores de vtiger_field.fieldname.
	var $mandatory_fields = Array('acta_title');

	// Lista de funciones de devolución de llamada durante la importación
	var $special_functions = Array('set_import_assigned_user');

	var $default_order_by = 'acta_title';
	var $default_sort_order='ASC';

	var $unit_price;

	function __construct() {
		global $log;
		$this->column_fields = getColumnFields(get_class($this));
		$this->db = PearDatabase::getInstance();
		$this->log = $log;
	}

	function save_module($module){
		//module specific save
	}
}

?>