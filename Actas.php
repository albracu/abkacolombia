<?php
$Vtiger_Utils_Log = true;

$MODULENAME = 'Actas';

include_once('vtlib/Vtiger/Menu.php');
include_once('vtlib/Vtiger/Module.php');

$moduleInstance = Vtiger_Module::getInstance($MODULENAME);
if ($moduleInstance || file_exists('modules/'.$MODULENAME)) {
    echo "Module already present - choose a different name.";
} else {


// Crea modulo
$module = new Vtiger_Module();
$module->name = $MODULENAME;   // Indica el nombre del nuevo módulo (debe coincidir con el nombre de la carpeta que coloques en modules/
$module->parent = "Inventory"; // Pestaña de la que 'colgará' la opción de menú del nuevo módulo (sirve para organizar los menus superiores || posibles valores: "My Home Page", "Marketing", "Sales", "Support", "Analytics", "Inventory", "Tools", "Settings"
$module->version = 1.0;        // versión del módulo
$module->save();
$module->initWebservice();     // Initialize Webservice aqui porque si lo haces al final NO vale para nada
$module->initTables();         // creamos la tabla.


// Creacion de Bloques
$block1 = new Vtiger_Block();
$block1->label = 'LBL_ACTAS_INFORMATION';
$module->addBlock($block1);

$block2 = new Vtiger_Block();
$block2->label = 'LBL_EQUIPO_INFORMATION';
$module->addBlock($block2);

//Creación de campos

// Código del actas
$field1 = new Vtiger_Field();
$field1->name = 'actas_code'; //Sequencial
$field1->label = 'Codigo del actas';
$field1->table = $module->basetable;    //$module->basetable;
$field1->column = 'actas_code';
$field1->columntype = 'VARCHAR(100)';
$field1->uitype = 4;
$field1->typeofdata = 'V~M';
$block1->addField($field1);

// following for auto gen on save
$entity_tmp = new CRMEntity();
$entity_tmp->setModuleSeqNumber("configure",$module->name,"ACT",1);


// Titulo del actas
$field2 = new Vtiger_Field();
$field2->name = 'actas_title';
$field2->label = 'Referencia';
$field2->table = $module->basetable;
$field2->column = 'actas_title';
$field2->columntype = 'VARCHAR(50)';
$field2->uitype = 1;
$field2->typeofdata = 'V~O';
$block1->addField($field2);

// Setear como identificador del Modulo
$module->setEntityIdentifier($field1);

// Contacto
$field3 = new Vtiger_Field();
$field3->name = 'contact';
$field3->label= 'Contacto';
$field3->table = $module->basetable;
$field3->column = 'contact';
$field3->columntype = 'VARCHAR(255)';
$field3->uitype = 10;
$field3->typeofdata = 'V~O';
$field3->helpinfo = 'Relacionado a Contactos';
$block1->addField($field3);
$field3->setRelatedModules(Array('Contacts'));

// Fecha de Entrega
$field4 = new Vtiger_Field();
$field4->name = 'acta_date';
$field4->label= 'Fecha de Entrega';
$field4->table = $module->basetable;
$field4->column = 'acta_date';
$field4->columntype = 'DATE';
$field4->uitype = 5;
$field4->typeofdata = 'D~O';
$block1->addField($field4);

// Prealistamiento
$field5 = new Vtiger_Field();
$field5->name = 'prealistamiento';
$field5->label= 'Prealistamiento';
$field5->table = $module->basetable;
$field5->column = 'prealistamiento';
$field5->columntype = 'VARCHAR(255)';
$field5->uitype = 10;
$field5->typeofdata = 'V~O';
$field5->helpinfo = 'Relacionado a Prealistamiento';
$block1->addField($field5);
$field5->setRelatedModules(Array('Prealistamientos'));


// No Pedido
$field6 = new Vtiger_Field();
$field6->name = 'no_pedido';
$field6->label = 'No Pedido';
$field6->table = $module->basetable;
$field6->column = 'no_pedido';
$field6->columntype = 'VARCHAR(20)';
$field6->uitype = 1;
$field6->typeofdata = 'V~O';
$block1->addField($field6);

// No Equipo
$field7 = new Vtiger_Field();
$field7->name = 'no_equipo';
$field7->label = 'No Equipo';
$field7->table = $module->basetable;
$field7->column = 'no_equipo';
$field7->columntype = 'VARCHAR(20)';
$field7->uitype = 1;
$field7->typeofdata = 'V~O';
$block2->addField($field7);

// Serie
$field8 = new Vtiger_Field();
$field8->name = 'no_serie';
$field8->label = 'No Serie';
$field8->table = $module->basetable;
$field8->column = 'no_serie';
$field8->columntype = 'VARCHAR(20)';
$field8->uitype = 1;
$field8->typeofdata = 'V~O';
$block2->addField($field8);

// Reemplazo
$field9 = new Vtiger_Field();
$field9->name = 'reemplazo';
$field9->label = 'Reemplazo';
$field9->table = $module->basetable;
$field9->column = 'reemplazo';
$field9->columntype = 'VARCHAR(3)';
$field9->uitype = 56;
$field9->typeofdata = 'C~O';
$block1->addField($field9);

// Venta
$field10 = new Vtiger_Field();
$field10->name = 'venta';
$field10->label = 'Venta';
$field10->table = $module->basetable;
$field10->column = 'venta';
$field10->columntype = 'VARCHAR(3)';
$field10->uitype = 56;
$field10->typeofdata = 'C~O';
$block1->addField($field10);

// Cliente Nuevo
$field11 = new Vtiger_Field();
$field11->name = 'cliente_nuevo';
$field11->label = 'Cliente Nuevo';
$field11->table = $module->basetable;
$field11->column = 'cliente_nuevo';
$field11->columntype = 'VARCHAR(3)';
$field11->uitype = 56;
$field11->typeofdata = 'C~O';
$block1->addField($field11);

// Prestamo
$field12 = new Vtiger_Field();
$field12->name = 'prestamo';
$field12->label = 'Prestamo';
$field12->table = $module->basetable;
$field12->column = 'prestamo';
$field12->columntype = 'VARCHAR(3)';
$field12->uitype = 56;
$field12->typeofdata = 'C~O';
$block1->addField($field12);

// Revision Tecnica
$field13 = new Vtiger_Field();
$field13->name = 'revision_tecnica';
$field13->label = 'Revision Tecnica';
$field13->table = $module->basetable;
$field13->column = 'revision_tecnica';
$field13->columntype = 'VARCHAR(3)';
$field13->uitype = 56;
$field13->typeofdata = 'C~O';
$block1->addField($field13);

// Contador Inicial
$field14 = new Vtiger_Field();
$field14->name = 'contador_inicial';
$field14->label = 'Contador Inicial';
$field14->table = $module->basetable;
$field14->column = 'contador_inicial';
$field14->columntype = 'VARCHAR(20)';
$field14->uitype = 1;
$field14->typeofdata = 'V~O';
$block2->addField($field14);

// Numero
$field15 = new Vtiger_Field();
$field15->name = 'numero';
$field15->label = 'Numero';
$field15->table = $module->basetable;
$field15->column = 'numero';
$field15->columntype = 'VARCHAR(20)';
$field15->uitype = 1;
$field15->typeofdata = 'V~O';
$block2->addField($field15);


// Contador Inicial Color
$field16 = new Vtiger_Field();
$field16->name = 'contador_inicial_color';
$field16->label = 'Contador Inicial Color';
$field16->table = $module->basetable;
$field16->column = 'contador_inicial_color';
$field16->columntype = 'VARCHAR(20)';
$field16->uitype = 1;
$field16->typeofdata = 'V~O';
$block2->addField($field16);

// Contador Inicial Otros
$field17 = new Vtiger_Field();
$field17->name = 'contador_inicial_otros';
$field17->label = 'Contador Inicial Otros';
$field17->table = $module->basetable;
$field17->column = 'contador_inicial_otros';
$field17->columntype = 'VARCHAR(20)';
$field17->uitype = 1;
$field17->typeofdata = 'V~O';
$block2->addField($field17);


// ADF
$field18 = new Vtiger_Field();
$field18->name = 'adf';
$field18->label = 'ADF';
$field18->table = $module->basetable;
$field18->column = 'adf';
$field18->columntype = 'VARCHAR(3)';
$field18->uitype = 56;
$field18->typeofdata = 'C~O';
$block2->addField($field18);

// Duplex
$field19 = new Vtiger_Field();
$field19->name = 'duplex';
$field19->label = 'Duplex';
$field19->table = $module->basetable;
$field19->column = 'duplex';
$field19->columntype = 'VARCHAR(3)';
$field19->uitype = 56;
$field19->typeofdata = 'C~O';
$block2->addField($field19);

// Printer
$field20 = new Vtiger_Field();
$field20->name = 'printer';
$field20->label = 'Printer';
$field20->table = $module->basetable;
$field20->column = 'printer';
$field20->columntype = 'VARCHAR(3)';
$field20->uitype = 56;
$field20->typeofdata = 'C~O';
$block2->addField($field20);

// Document Server
$field21 = new Vtiger_Field();
$field21->name = 'document_server';
$field21->label = 'Document Server';
$field21->table = $module->basetable;
$field21->column = 'document_server';
$field21->columntype = 'VARCHAR(3)';
$field21->uitype = 56;
$field21->typeofdata = 'C~O';
$block2->addField($field21);

// Scanner
$field22 = new Vtiger_Field();
$field22->name = 'scanner';
$field22->label = 'Scanner';
$field22->table = $module->basetable;
$field22->column = 'scanner';
$field22->columntype = 'VARCHAR(3)';
$field22->uitype = 56;
$field22->typeofdata = 'C~O';
$block2->addField($field22);

// FAX
$field23 = new Vtiger_Field();
$field23->name = 'fax';
$field23->label = 'FAX';
$field23->table = $module->basetable;
$field23->column = 'fax';
$field23->columntype = 'VARCHAR(3)';
$field23->uitype = 56;
$field23->typeofdata = 'C~O';
$block2->addField($field23);

// Bypass
$field24 = new Vtiger_Field();
$field24->name = 'bypass';
$field24->label = 'Bypass';
$field24->table = $module->basetable;
$field24->column = 'bypass';
$field24->columntype = 'VARCHAR(3)';
$field24->uitype = 56;
$field24->typeofdata = 'C~O';
$block2->addField($field24);

// Cable Pader
$field25 = new Vtiger_Field();
$field25->name = 'cable_pader';
$field25->label = 'Cable Pader';
$field25->table = $module->basetable;
$field25->column = 'cable_pader';
$field25->columntype = 'VARCHAR(3)';
$field25->uitype = 56;
$field25->typeofdata = 'C~O';
$block2->addField($field25);

// Mesa
$field26 = new Vtiger_Field();
$field26->name = 'mesa';
$field26->label = 'Mesa';
$field26->table = $module->basetable;
$field26->column = 'mesa';
$field26->columntype = 'VARCHAR(3)';
$field26->uitype = 56;
$field26->typeofdata = 'C~O';
$block2->addField($field26);

// Banco Papel
$field27 = new Vtiger_Field();
$field27->name = 'banco_papel';
$field27->label = 'Banco Papel';
$field27->table = $module->basetable;
$field27->column = 'banco_papel';
$field27->columntype = 'VARCHAR(3)';
$field27->uitype = 56;
$field27->typeofdata = 'C~O';
$block2->addField($field27);

// Bandejas
$field28 = new Vtiger_Field();
$field28->name = 'bandejas';
$field28->label = 'Bandejas';
$field28->table = $module->basetable;
$field28->column = 'bandejas';
$field28->columntype = 'VARCHAR(20)';
$field28->uitype = 1;
$field28->typeofdata = 'V~O';
$block2->addField($field28);

// Regulador de Energia
$field29 = new Vtiger_Field();
$field29->name = 'regulado';
$field29->label = 'Regulador de Energia';
$field29->table = $module->basetable;
$field29->column = 'regulado';
$field29->columntype = 'VARCHAR(20)';
$field29->uitype = 1;
$field29->typeofdata = 'V~O';
$block2->addField($field29);

// Observaciones Adicionales
$field30 = new Vtiger_Field();
$field30->name = 'observaciones_adicionales';
$field30->label= 'Observaciones Adicionales';
$field30->table = $module->basetable;
$field30->column = 'observaciones_adicionales';
$field30->columntype = 'TEXT';
$field30->uitype = 19;
$field30->typeofdata = 'V~O';
$block2->addField($field30);

// // Cuenta / Empresa
$field31 = new Vtiger_Field();
$field31->name = 'account';
$field31->label= 'Empresa';
$field31->table = $module->basetable;
$field31->column = 'account';
$field31->columntype = 'VARCHAR(255)';
$field31->uitype = 10;
$field31->typeofdata = 'V~O';
$field31->helpinfo = 'Relacionado a Empresas';
$block1->addField($field31);
$field31->setRelatedModules(Array('Accounts'));

//Búsqueda genérica de creación de filtros
$filter1 = new Vtiger_Filter();
$filter1->name = 'All';
$filter1->isdefault = true;
$module->addFilter($filter1);

$filter1->addField($field1)
->addField($field2, 2)
->addField($field3, 3)
->addField($field4, 4)
->addField($field5, 5)
->addField($field6, 6)
->addField($field7, 7)
->addField($field8, 8)
->addField($field9, 9)
->addField($field10, 10);

//Adición de contactos como una lista de RELACIONADOS
$accounts = Vtiger_Module::getInstance('Accounts');
$accounts->setRelatedList(Vtiger_Module::getInstance('Actas'), 'Actas', Array('ADD'),'get_dependents_list');

// Adición de contactos como una lista de RELACIONADOS
$contacts = Vtiger_Module::getInstance('Contacts');
$contacts->setRelatedList(Vtiger_Module::getInstance('Actas'), 'Actas', Array('ADD'),'get_dependents_list');

//Adición de contactos como una lista de RELACIONADOS
$prealistamientos = Vtiger_Module::getInstance('Prealistamientos');
$prealistamientos->setRelatedList(Vtiger_Module::getInstance('Actas'), 'Actas', Array('ADD'),'get_dependents_list');

// Adición de forma para la creación de los comentarios sobre el alcance del modulo
// $commentsModule = Vtiger_Module::getInstance('ModComments');
// $fieldInstance = Vtiger_Field::getInstance('related_to', $commentsModule);
// $fieldInstance->setRelatedModules(array("Actas"));
// $detailviewblock = ModComments::addWidgetTo('Actas');


$module->setDefaultSharing('Private');
$module->enableTools(Array('Import', 'Export'));
$module->disableTools('Merge');
$moduleInstance = Vtiger_Module::getInstance('Actas');
$moduleInstance->initWebservice();


// Acceso Compartiendo Configuración
$moduleInstance->setDefaultSharing();

// servicio web de configuración
$moduleInstance->initWebservice();

mkdir('modules/'.$MODULENAME);

echo 'addEntityMethod complete!';
}

?>



