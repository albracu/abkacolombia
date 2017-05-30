<?php
/*+***********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 *************************************************************************************/

require_once('libraries/mpdf/mpdf.php');

class Actas_ExportPDF_Action extends Vtiger_Action_Controller {
	
	public function checkPermission(Vtiger_Request $request) {
		$moduleName = $request->getModule();
		$recordId = $request->get('record');

		if(!Users_Privileges_Model::isPermitted($moduleName, 'DetailView', $recordId)) {
			throw new AppException(vtranslate('LBL_PERMISSION_DENIED', $moduleName));
		}
	}
	
	public function process(Vtiger_Request $request) {
		$viewer = new Vtiger_Viewer;
		
		$moduleName = $request->getModule();
		$record = $request->get('record');
		
		$recordModel = Vtiger_Record_Model::getInstanceById($record);
		$recordStrucure = Vtiger_RecordStructure_Model::getInstanceFromRecordModel($recordModel, Vtiger_RecordStructure_Model::RECORD_STRUCTURE_MODE_DETAIL);
		$structuredValues = $recordStrucure->getStructure();
		
		$account_id = $recordModel->get('account');
		if (!empty($account_id)) {
			$ModuleAccounts = $request->getModule('Accounts');
			$recordAccounts = Vtiger_Record_Model::getInstanceById($account_id );
		
		}

		$viewer->assign('ACTA_DATE', $recordModel->get('acta_date'));
		$viewer->assign('ACTA_CODE', $recordModel->get('actas_code'));
		$viewer->assign('ACCOUNT_NAME', getAccountName($recordModel->get('account')));

		$viewer->assign('ACCOUNT_PHONE',$recordAccounts->get('phone'));
		$viewer->assign('ACCOUNT_DIR',$recordAccounts->get('bill_street'));
		$viewer->assign('ACCOUNT_CITY',$recordAccounts->get('bill_city'));
		
		
		$viewer->assign('CONTACT_NAME', getContactName($recordModel->get('contact')));
	
		$check = 'X'; //valor para los check
		
		if ($recordModel->get('reemplazo') == 1) {
			$viewer->assign('REEMPLAZO', $check);
		}
		if ($recordModel->get('cliente_nuevo') == 1) {
			$viewer->assign('CLIENTE_NUEVO', $check);
		}
		if ($recordModel->get('venta') == 1) {
			$viewer->assign('VENTA', $check);
		}
		if ($recordModel->get('prestamo') == 1) {
			$viewer->assign('PRESTAMO', $check);
		}
		if ($recordModel->get('revision_tecnica') == 1) {
			$viewer->assign('REVISION_TECNICA', $check);
		}
		
		$viewer->assign('NO_EQUIPO', $recordModel->get('no_equipo'));
		$viewer->assign('NO_SERIE', $recordModel->get('no_serie'));
		$viewer->assign('NUMERO', $recordModel->get('numero'));
		$viewer->assign('CONTADOR_INICIAL', $recordModel->get('contador_inicial'));
		$viewer->assign('CONTADOR_INICIAL_COLOR', $recordModel->get('contador_inicial_color'));
		$viewer->assign('CONTADOR_INICIAL_OTROS', $recordModel->get('contador_inicial_otros'));
		$viewer->assign('ENCARGADO', $recordModel->get('cf_936'));
		$viewer->assign('CARGO_ENCARGADO', $recordModel->get('cf_938'));
		$viewer->assign('CIUDAD_DESPACHO', $recordModel->get('cf_940'));
		
		if ($recordModel->get('adf') == 1) {
			$viewer->assign('ADF', $check);
		}
		if ($recordModel->get('duplex') == 1) {
			$viewer->assign('DUPLEX', $check);
		}
		if ($recordModel->get('printer') == 1) {
			$viewer->assign('PRINTER', $check);
		}
		if ($recordModel->get('document_server') == 1) {
			$viewer->assign('DOC_SERVER', $check);
		}
		if ($recordModel->get('scanner') == 1) {
			$viewer->assign('SCANNER', $check);
		}
		if ($recordModel->get('fax') == 1) {
			$viewer->assign('FAX', $check);
		}
		if ($recordModel->get('bypass') == 1) {
			$viewer->assign('BYPASS', $check);
		}
		if ($recordModel->get('cable_pader') == 1) {
			$viewer->assign('CABLE_PADER', $check);
		}
		if ($recordModel->get('mesa') == 1) {
			$viewer->assign('MESA', $check);
		}
		if ($recordModel->get('banco_papel') == 1) {
			$viewer->assign('BANCO_PAPEL', $check);
		}
		
		$viewer->assign('BANDEJAS', $recordModel->get('bandejas'));
		$viewer->assign('REGULADO', $recordModel->get('regulado'));
			
		$buffer = $viewer->view('ExportPDF.tpl', $moduleName,true);
		$header = '';
						
		$footer = '';//'<div style="text-align:right;width:100%;border-top:1px solid #000000;">Impreso el: '.date('d-m-Y').'</div>';
	
		
		$mpdf=new mPDF('','', 0, '', 10, 10, 10, 10, 9, 9);
		$mpdf->useSubstitutions = true; // optional - just as an example
		$mpdf->setAutoTopMargin = 'stretch'; 
		$mpdf->setAutoBottomMargin = 'stretch'; 
		$mpdf->SetHTMLHeader ($header);  // optional - just as an example
		$mpdf->SetHTMLFooter ($footer);
		$mpdf->setBasePath($url);
		$mpdf->WriteHTML($buffer);
		$mpdf->Output();
		exit;
	}
}

