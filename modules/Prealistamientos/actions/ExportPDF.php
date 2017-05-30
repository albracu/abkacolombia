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

class Prealistamientos_ExportPDF_Action extends Vtiger_Action_Controller {
	
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
		
		$contact_id = $recordModel->get('contact');
		if (!empty($contact_id)) {
			$Modulecontact = $request->getModule('Contacts');
			$recordContact = Vtiger_Record_Model::getInstanceById($contact_id);
		
			$viewer->assign('MAILING_STREET', $recordContact->get('mailingstreet'));
			$viewer->assign('MAILING_STATE', $recordContact->get('mailingstate'));
			$viewer->assign('OTHER_STREET', $recordContact->get('otherstreet'));
			$viewer->assign('OTHER_STATE', $recordContact->get('otherstate'));
			$viewer->assign('HOME_PHONE', $recordContact->get('homephone'));
			$viewer->assign('PHONE', $recordContact->get('phone'));
			$viewer->assign('OTHER_PHONE', $recordContact->get('otherphone'));
			$viewer->assign('MOBILE', $recordContact->get('mobile'));
			$viewer->assign('EMAIL', $recordContact->get('email'));
		}
		$account_id = $recordModel->get('account');
		if (!empty($account_id)) {
			$Moduleaccount = $request->getModule('Contacts');
			$recordAccount = Vtiger_Record_Model::getInstanceById($account_id);

			$viewer->assign('DIRECCION_FACTURA', $recordAccount->get('bill_street'));
			
			$viewer->assign('NIT', $recordAccount->get('siccode'));
		
		}
				
		$viewer->assign('USER_MODEL', Users_Record_Model::getCurrentUserModel());
		
		$viewer->assign('DAY', date('d'));
		$viewer->assign('MON', date('m'));
		$viewer->assign('YEAR', date('Y'));
		$viewer->assign('NO_CONTRATO', $recordModel->get('no_contrato'));
		$viewer->assign('NO_PEDIDO', $recordModel->get('prealistamiento_code'));
		$viewer->assign('FECHA_ENTREGA', $recordModel->get('start_date'));
		$viewer->assign('MODELO_PEDIDO', $recordModel->get('modelo_equipo'));
		$viewer->assign('NO_SERIE', $recordModel->get('no_serie'));
		$viewer->assign('CONTACTO2', $recordModel->get('cf_872'));

		$viewer->assign('DESPACHO', $recordModel->get('cf_866'));
		$viewer->assign('FACTURACION', $recordModel->get('cf_864'));
		
		$check = 'X';
		
		if ($recordModel->get('reemplazo') == 1) {
			$viewer->assign('REEMPLAZO', $check );
		}
		if ($recordModel->get('adicion') == 1) {
			$viewer->assign('ADICION', $check);
		}
		if ($recordModel->get('cf_868') == 1) {
			$viewer->assign('OUTSOURCING', $check);
		}
		if ($recordModel->get('cf_912') == 1) {
			$viewer->assign('VENTA', $check);
		}
		if ($recordModel->get('cliente_nuevo') == 1) {
			$viewer->assign('CLIENTE_NUEVO', $check);
		}
		if ($recordModel->get('prestamo') == 1) {
			$viewer->assign('PRESTAMO', $check);
		}
		if ($recordModel->get('otro') == 1) {
			$viewer->assign('OTRO', $check);
		}
		if ($recordModel->get('periferico') == 1) {
			$viewer->assign('PERIFERICO', $check);
		}
		if ($recordModel->get('adf') == 1) {
			$viewer->assign('ADF', $check);
		}
		if ($recordModel->get('conectividad') == 1) {
			$viewer->assign('CONECTIVIDAD', $check);
		}
		if ($recordModel->get('impresion') == 1) {
			$viewer->assign('IMPRESION', $check);
		}
		if ($recordModel->get('impresion_scanner') == 1) {
			$viewer->assign('IMPRESION_SCANNER', $check);
		}
		if ($recordModel->get('fax') == 1) {
			$viewer->assign('FAX', $check);
		}
		if ($recordModel->get('banco_papel') == 1) {
			$viewer->assign('BANCO_PAPEL', $check);
		}
		if ($recordModel->get('cf_908') == 1) {
			$viewer->assign('CASSET_ADICIONAL', $check);
		}
		if ($recordModel->get('disco_duro') == 1) {
			$viewer->assign('DISCO_DURO', $check);
		}
		if ($recordModel->get('incluye_trasporte') == 1) {
			$viewer->assign('INCLUYE_TRASPORTE', $check);
		}
		
		$viewer->assign('CANON_MENSUAL', $recordModel->get('canon_mensual'));
		$viewer->assign('VOLUMEN_NEGRO', $recordModel->get('volumen_negro'));
		$viewer->assign('VOLUMEN_COLOR', $recordModel->get('volumen_color'));
		$viewer->assign('VOLUMEN_SCANN', $recordModel->get('volumen_scann'));
		$viewer->assign('ADICIONAL_NEGRO', $recordModel->get('adicional_negro'));
		$viewer->assign('ADICIONAL_COLOR', $recordModel->get('adicional_color'));
		$viewer->assign('ADICIONAL_SCANN', $recordModel->get('adicional_scann'));
		$viewer->assign('DURACION_CONTRATO', $recordModel->get('duracion_contrato'));
		$viewer->assign('INICIO_CONTRATO', $recordModel->get('inicio_contrato'));
		$viewer->assign('FORMA_PAGO', $recordModel->get('forma_pago'));
		$viewer->assign('NREEMPLAZO', $recordModel->get('cf_856'));
		$viewer->assign('OPERIFEFICOS', $recordModel->get('cf_906'));

		$viewer->assign('COSTO_BN', $recordModel->get('cf_914'));
		$viewer->assign('COSTO_COLOR', $recordModel->get('cf_916'));
		$viewer->assign('COSTO_SCAN', $recordModel->get('cf_918'));
		
		if ($recordModel->get('forma_cliente_juridico') == 1) {
			$viewer->assign('CLIENTE_JURIDICO', $check);
		}
		if ($recordModel->get('camara_comercio') == 1) {
			$viewer->assign('CAMARA_COMERCIO', $check);
		}
		if ($recordModel->get('rut_juridico') == 1) {
			$viewer->assign('RUT_JURIDICO', $check);
		}
		if ($recordModel->get('cedula_juridico') == 1) {
			$viewer->assign('CEDULA_JURIDICO', $check);
		}
		if ($recordModel->get('contrato_juridico') == 1) {
			$viewer->assign('CONTRATO_JURIDICO', $check);
		}
		if ($recordModel->get('otrosi_juridico') == 1) {
			$viewer->assign('OTRO_SI_JURIDICO', $check);
		}
		if ($recordModel->get('habdata_juridico') == 1) {
			$viewer->assign('HABDATA_JURIDICO', $check);
		}
		if ($recordModel->get('ofondo_juridico') == 1) {
			$viewer->assign('OFONDOS_JURIDICO', $check);
		}
		
		$viewer->assign('OBSERV_JURIDICO', $recordModel->get('observaciones_jur'));
		
		
		if ($recordModel->get('forma_cliente_natural') == 1) {
			$viewer->assign('CLIENTE_NATURAL', $check);
		}
		if ($recordModel->get('rut_natural') == 1) {
			$viewer->assign('RUT_NATURAL', $check);
		}
		if ($recordModel->get('cedula_natural') == 1) {
			$viewer->assign('CEDULA_NATURAL', $check);
		}
		if ($recordModel->get('contrato_natural') == 1) {
			$viewer->assign('CONTRATO_NATURAL', $check);
		}
		if ($recordModel->get('otrosi_natural') == 1) {
			$viewer->assign('OTRO_SI_NATURAL', $check);
		}
		if ($recordModel->get('habdata_natural') == 1) {
			$viewer->assign('HABDATA_NATURAL', $check);
		}
		if ($recordModel->get('ofondo_natural') == 1) {
			$viewer->assign('OFONDOS_NATURAL', $check);
		}
		if ($recordModel->get('compago_natural') == 1) {
			$viewer->assign('COMPAGO_NATURAL', $check);
		}
		
		$viewer->assign('OBSERV_NATURAL', $recordModel->get('observaciones_nat'));
		
		if ($recordModel->get('forma_cliente_codeudor') == 1) {
			$viewer->assign('CLIENTE_COD', $check);
		}
		if ($recordModel->get('compago_codeudor') == 1) {
			$viewer->assign('COMPAGO_COD', $check);
		}
		if ($recordModel->get('ofondo_codeudor') == 1) {
			$viewer->assign('OFONDOS_COD', $check);
		}
		if ($recordModel->get('contrato_codeudor') == 1) {
			$viewer->assign('CONTRATO_COD', $check);
		}
		if ($recordModel->get('otrosi_codeudor') == 1) {
			$viewer->assign('OTRO_SI_COD', $check);
		}
		if ($recordModel->get('habdata_codeudor') == 1) {
			$viewer->assign('HABDATA_COD', $check);
		}
		if ($recordModel->get('ofondo_codeudor') == 1) {
			$viewer->assign('OFONDOS_COD', $check);
		}
		if ($recordModel->get('compago_codeudor') == 1) {
			$viewer->assign('COMPAGO_COD', $check);
		}
		
		$viewer->assign('OBSERV_COD', $recordModel->get('observaciones_cod'));
		
		$viewer->assign('OBSERV_ADI', $recordModel->get('observaciones_adicionales'));
		
		$viewer->assign('VALOR', $recordModel->get('valor'));
		$viewer->assign('GARANTIA', $recordModel->get('garantia'));
		$viewer->assign('FORMA_PAGO_VENTA', $recordModel->get('forma_pago_venta'));
		$viewer->assign('ABONO', $recordModel->get('abono'));
		$viewer->assign('PAGO_TOTAL', $recordModel->get('pago_total'));
		$viewer->assign('EQUIPO_PAGO', $recordModel->get('equipo_pago'));
		
		if ($recordModel->get('rut_venta') == 1) {
			$viewer->assign('RUT_VENTAS', $check);
		}
		if ($recordModel->get('otros_juridica') == 1) {
			$viewer->assign('OTROS_JURIDICA', $check );
		}
		if ($recordModel->get('cedula_venta') == 1) {
			$viewer->assign('CEDULA_VENTAS', $check);
		}
		if ($recordModel->get('otros_natural')== 1) {
			$viewer->assign('OTROS_NATURAL', $check);
		}
		$viewer->assign('NOTA', $recordModel->get('nota')); 

		$viewer->assign('OBSERVACIONES_GLOB', $recordModel->get('observaciones')); 
		
		// $viewer->assign('OBSERVACIONES', $recordModel->get('observaciones'));
		
		$viewer->assign('CONTACT_NAME', getContactName($recordModel->get('contact')));
		$viewer->assign('ACCOUNT_NAME', getAccountName($recordModel->get('account')));
			
		
				
		$buffer = $viewer->view('ExportPDF.tpl', $moduleName,true);
		
		$org = getCompanyDetails();
		
		$header = '';
		$footer = '';
		
		$mpdf=new mPDF('','A4',0,'', 10, 10, 10, 10, 9, 9);
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