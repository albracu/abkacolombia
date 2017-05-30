<?php /* Smarty version Smarty-3.1.7, created on 2017-05-23 23:09:56
         compiled from "/var/www/abkacolombia/includes/runtime/../../layouts/vlayout/modules/Prealistamientos/ExportPDF.tpl" */ ?>
<?php /*%%SmartyHeaderCode:90600781258e852103dba78-44956915%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '31505994ba2bb59cc8018bee14d7a8d48aaf3ab4' => 
    array (
      0 => '/var/www/abkacolombia/includes/runtime/../../layouts/vlayout/modules/Prealistamientos/ExportPDF.tpl',
      1 => 1495577392,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '90600781258e852103dba78-44956915',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_58e8521048aca',
  'variables' => 
  array (
    'NO_CONTRATO' => 0,
    'FECHA_ENTREGA' => 0,
    'NO_PEDIDO' => 0,
    'OUTSOURCING' => 0,
    'VENTA' => 0,
    'DAY' => 0,
    'MON' => 0,
    'YEAR' => 0,
    'ACCOUNT_NAME' => 0,
    'NIT' => 0,
    'DIRECCION_FACTURA' => 0,
    'CONTACT_NAME' => 0,
    'DESPACHO' => 0,
    'CONTACTO2' => 0,
    'HOME_PHONE' => 0,
    'MOBILE' => 0,
    'PHONE' => 0,
    'OTHER_PHONE' => 0,
    'EMAIL' => 0,
    'MODELO_PEDIDO' => 0,
    'REEMPLAZO' => 0,
    'NREEMPLAZO' => 0,
    'ADICION' => 0,
    'CLIENTE_NUEVO' => 0,
    'PRESTAMO' => 0,
    'OTRO' => 0,
    'PERIFERICO' => 0,
    'ADF' => 0,
    'CONECTIVIDAD' => 0,
    'IMPRESION' => 0,
    'IMPRESION_SCANNER' => 0,
    'FAX' => 0,
    'DISCO_DURO' => 0,
    'BANCO_PAPEL' => 0,
    'CASSET_ADICIONAL' => 0,
    'OPERIFEFICOS' => 0,
    'INCLUYE_TRASPORTE' => 0,
    'OBSERVACIONES' => 0,
    'OBSERVACIONES_GLOB' => 0,
    'CANON_MENSUAL' => 0,
    'VALOR' => 0,
    'VOLUMEN_NEGRO' => 0,
    'GARANTIA' => 0,
    'VOLUMEN_COLOR' => 0,
    'FORMA_PAGO_VENTA' => 0,
    'ADICIONAL_NEGRO' => 0,
    'ABONO' => 0,
    'COSTO_BN' => 0,
    'PAGO_TOTAL' => 0,
    'COSTO_COLOR' => 0,
    'EQUIPO_PAGO' => 0,
    'COSTO_SCAN' => 0,
    'OBSERV_NATURAL' => 0,
    'ADICIONAL_COLOR' => 0,
    'ADICIONAL_SCANN' => 0,
    'DURACION_CONTRATO' => 0,
    'INICIO_CONTRATO' => 0,
    'FORMA_PAGO' => 0,
    'NOTA' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58e8521048aca')) {function content_58e8521048aca($_smarty_tpl) {?><html>
<head>
	<title></title>
	<style type="text/css">
			table{
			   width: 100%;
		    
			}
			td{

			   font-size:15pt;
			   text-align: center;

			}
		</style>
</head>
<body >
	<table style="overflow: wrap;border:1px solid;width: 100%;" cellpadding="0" cellspacing="0">
		<tbody>
			<tr>
				<td colspan="8">
					<table style="overflow: wrap;width: 100%;" cellpadding="0" cellspacing="0">
						<tr>
							<td colspan="4" align="center" valign="middle" style="overflow: wrap;border:1px solid;width:25%;">
								<img src="test/logo/IconoAbkaReporte.png" width="50%"/>
							</td>
							<td colspan="4" style="overflow: wrap;border:1px solid;"><span style="overflow: wrap;height: 100px;">
								<br /><br />
								<center>FORMATO DE ORDEN PREALISTAMIENTO DE EQUIPOS</center><br />
								<center>Version 03</center><br /><br />
					
							</td>
						</tr>	
					</table>
				</td>		
			</tr>
			<tr>
				<td style="overflow: wrap;border:1px solid;" colspan="8">
					<br /><br /><center>INFORMACIÓN BASICA DEL CLIENTE</center><br /><br />
				</td>
			</tr>
			<tr>
				<td colspan="8">
					<table style="overflow: wrap;width: 100%;" cellpadding="0" cellspacing="0">
						<tr>	
							<td style="overflow: wrap;border:1px solid;" colspan="3">
								<left> FECHA</left>
							</td>
							<td rowspan="2" style="overflow: wrap;border:1px solid;width:15%;">
								<table style="overflow: wrap;width: 100%;" cellpadding="0" cellspacing="0">
									<tr>
										<td style="overflow: wrap;text-align:left;">N° CONTRATO</td>
									</tr>
									<tr>
										<td> <?php echo $_smarty_tpl->tpl_vars['NO_CONTRATO']->value;?>
 </td>
									</tr>
								</table>
							</td>
							<td rowspan="2" style="overflow: wrap;border:1px solid;width:20%;">
								<table style="overflow: wrap;width: 100%;" cellpadding="0" cellspacing="0">
									<tr>
										<td style="overflow: wrap;text-align:left;">FECHA DE ENTREGA</td>
									</tr>
									<tr>
										<td> <?php echo $_smarty_tpl->tpl_vars['FECHA_ENTREGA']->value;?>
 </td>
									</tr>
								</table>
							</td>
							<td rowspan="2" style="overflow: wrap;border:1px solid;width:18%;">
								<table style="overflow: wrap;width: 100%;" cellpadding="0" cellspacing="0">
									<tr>
										<td style="overflow: wrap;text-align:left;">PEDIDO N°</td>
									</tr>
									<tr>
										<td> <?php echo $_smarty_tpl->tpl_vars['NO_PEDIDO']->value;?>
 </td>
									</tr>
								</table>
							</td>
							<td rowspan="2" style="overflow: wrap;border:1px solid;width:12%;">
								<table style="overflow: wrap;width: 100%;" cellpadding="0" cellspacing="0">
									<tr>
										<td style="overflow: wrap;text-align:left;">OUTSOURCING</td>
									</tr>
									<tr>
										<td> <?php echo $_smarty_tpl->tpl_vars['OUTSOURCING']->value;?>
 </td>
									</tr>
								</table>
							</td>
							<td rowspan="2" style="overflow: wrap;border:1px solid;width:10%;">	
								<table style="overflow: wrap;width: 100%;" cellpadding="0" cellspacing="0">
									<tr>
										<td style="overflow: wrap;text-align:left;">VENTA</td>
									</tr>
									<tr>
										<td> <?php echo $_smarty_tpl->tpl_vars['VENTA']->value;?>
 </td>
									</tr>
								</table>		
							</td>	
						</tr>
						<tr> 
							<td style="overflow: wrap;border:1px solid;width:10%;">			
								<?php echo $_smarty_tpl->tpl_vars['DAY']->value;?>

							</td>
							<td style="overflow: wrap;border:1px solid;width:10%;">		
								<?php echo $_smarty_tpl->tpl_vars['MON']->value;?>

							</td>
							<td style="overflow: wrap;border:1px solid;width:10%;">			
								<?php echo $_smarty_tpl->tpl_vars['YEAR']->value;?>

							</td>
						</tr>
					</table>
				</td>
			</tr>	
			<tr>
				<td colspan="8">
					<table style="overflow: wrap;width: 100%;" cellpadding="0" cellspacing="0">
						<tr>	
							<td style="overflow: wrap;border:1px solid;width:70%;">
								<table style="overflow: wrap;width: 100%;" cellpadding="0" cellspacing="0">
									<tr>
										<td style="overflow: wrap;text-align:left;width:35%;">NOMBRE Y/O RAZON SOCIAL: </td>
									</tr>
									<tr>
										<td style="overflow: wrap;width:35%;"> <?php echo $_smarty_tpl->tpl_vars['ACCOUNT_NAME']->value;?>
 </td>
									</tr>
								</table>
							</td>
							<td style="overflow: wrap;border:1px solid;">
								<table style="overflow: wrap;width: 100%;" cellpadding="0" cellspacing="0">
									<tr>
										<td style="overflow: wrap;text-align:left;width:15%;">NIT ó CC:</td>
									</tr>
									<tr>
										<td style="overflow: wrap;width:15%;"> <?php echo $_smarty_tpl->tpl_vars['NIT']->value;?>
 </td>
									</tr>
								</table>
							</td>
						</tr>
					</table>
				</td>					
			</tr>
			<tr>
				<td colspan="8">
					<table style="overflow: wrap;width: 100%;" cellpadding="0" cellspacing="0">
						<tr>
							<td style="overflow: wrap;border:1px solid;">
								<table style="overflow: wrap;width: 100%;" cellpadding="0" cellspacing="0">
									<tr>
										<td style="overflow: wrap;text-align:left;width:35%;">DIRECCIÓN Y CIUDAD PARA FACTURACIÓN: </td>
									</tr>
									<tr>
										<td style="overflow: wrap;width:35%;"> <?php echo $_smarty_tpl->tpl_vars['DIRECCION_FACTURA']->value;?>
 </td>
									</tr>
								</table>
							</td>
							<td style="overflow: wrap;border:1px solid;">
								<table style="overflow: wrap;width: 100%;" cellpadding="0" cellspacing="0">
									<tr>
										<td style="overflow: wrap;text-align:left;width:15%;">CONTACTO 1</td>
									</tr>
									<tr>
										<td style="overflow: wrap;width:15%;"> <?php echo $_smarty_tpl->tpl_vars['CONTACT_NAME']->value;?>
 </td>
									</tr>
								</table>
							</td>
						</tr>
					</table>
				</td>						
			</tr>
			<tr>
				<td colspan="8">
					<table style="overflow: wrap;width: 100%;" cellpadding="0" cellspacing="0">
						<tr>
							<td style="overflow: wrap;border:1px solid;">
								<table style="overflow: wrap;width: 100%;" cellpadding="0" cellspacing="0">
									<tr>
										<td style="overflow: wrap;text-align:left;width:35%;">DIRECCIÓN Y CIUDAD PARA DESPACHO</td>
									</tr>
									<tr>
										<td style="overflow: wrap;width:35%;"> <?php echo $_smarty_tpl->tpl_vars['DESPACHO']->value;?>
 </td>
									</tr>
								</table>
							</td>
							<td style="overflow: wrap;border:1px solid;">
								<table style="overflow: wrap;width: 100%;" cellpadding="0" cellspacing="0">
									<tr>
										<td style="overflow: wrap;text-align:left;width:15%;">CONTACTO 2</td>
									</tr>
									<tr>
										<td style="overflow: wrap;width:15%;"> <?php echo $_smarty_tpl->tpl_vars['CONTACTO2']->value;?>
 </td>
									</tr>
								</table>
							</td>
						</tr>
					</table>
				</td>				
			</tr>
			<tr>
				<td colspan="8">
					<table style="overflow: wrap;width: 100%;" cellpadding="0" cellspacing="0">
						<tr>
							<td style="overflow: wrap;border:1px solid;" colspan="4">
								<table style="overflow: wrap;width: 100%;" cellpadding="0" cellspacing="0">
									<tr>
										<td style="overflow: wrap;text-align:left;">TELEFONO 1</td>
									</tr>
									<tr>
										<td><?php echo $_smarty_tpl->tpl_vars['HOME_PHONE']->value;?>
</td>
									</tr>
								</table>
							</td>
							<td style="overflow: wrap;border:1px solid;" colspan="2">
								<table style="overflow: wrap;width: 100%;" cellpadding="0" cellspacing="0">
									<tr>
										<td style="overflow: wrap;text-align:left;">CELULAR CONT 1</td>
									</tr>
									<tr>
										<td><?php echo $_smarty_tpl->tpl_vars['MOBILE']->value;?>
</td>
									</tr>
								</table>
							</td>
							<td style="overflow: wrap;border:1px solid;" colspan="2">
								<table style="overflow: wrap;width: 100%;" cellpadding="0" cellspacing="0">
									<tr>
										<td style="overflow: wrap;text-align:left;">CELULAR CONT 2</td>
									</tr>
									<tr>
										<td><?php echo $_smarty_tpl->tpl_vars['PHONE']->value;?>
</td>
									</tr>
								</table>
							</td>
						</tr>
					</table>
				</td>			
			</tr>
			<tr>
				<td colspan="8">
					<table style="overflow: wrap;width: 100%;" cellpadding="0" cellspacing="0">
						<tr>
							<td style="overflow: wrap;border:1px solid;" colspan="4">
								<table style="overflow: wrap;width: 100%;" cellpadding="0" cellspacing="0">
									<tr>
										<td style="overflow: wrap;text-align:left;">TELEFONO 2</td>
									</tr>
									<tr>
										<td><?php echo $_smarty_tpl->tpl_vars['OTHER_PHONE']->value;?>
</td>
									</tr>
								</table>
							</td>
							<td style="overflow: wrap;border:1px solid;" colspan="4">
								<table style="overflow: wrap;width: 100%;" cellpadding="0" cellspacing="0">
									<tr>
										<td style="overflow: wrap;text-align:left;">E-MAIL</td>
									</tr>
									<tr>
										<td><?php echo $_smarty_tpl->tpl_vars['EMAIL']->value;?>
</td>
									</tr>
								</table>
							</td>
						</tr>
					</table>
				</td>		
			</tr>
			<tr>
				<td colspan="8">
					<table style="overflow: wrap;width: 100%;" cellpadding="0" cellspacing="0">
						<tr>
							<td style="overflow: wrap;border:1px solid;width:15%;">
								<table style="overflow: wrap;width: 90%;" cellpadding="0" cellspacing="0">
									<tr>
										<td style="overflow: wrap;width:60%;text-align:left;">MODELO EQUIPO:</td>
										<td><?php echo $_smarty_tpl->tpl_vars['MODELO_PEDIDO']->value;?>
</td>
									</tr>
								</table>
							</td>
							<td style="overflow: wrap;border:1px solid;width:15%;">
								<table style="overflow: wrap;width: 90%;" cellpadding="0" cellspacing="0">
									<tr>
										<td style="overflow: wrap;width:90%;text-align:left;">REEMPLAZO:</td>
										<td><?php echo $_smarty_tpl->tpl_vars['REEMPLAZO']->value;?>
</td>
									</tr>
								</table>
							</td>
							<td style="overflow: wrap;border:1px solid;width:15%;">
								<table style="overflow: wrap;width: 90%;" cellpadding="0" cellspacing="0">
									<tr>
										<td style="overflow: wrap;width:60%;text-align:left;">Nº REEMP.</td>
										<td><?php echo $_smarty_tpl->tpl_vars['NREEMPLAZO']->value;?>
</td>
									</tr>
								</table>
							</td>
							<td style="overflow: wrap;border:1px solid;width:15%;">
								<table style="overflow: wrap;width: 90%;" cellpadding="0" cellspacing="0">
									<tr>
										<td style="overflow: wrap;width:90%;text-align:left;">ADICION</td>
										<td><?php echo $_smarty_tpl->tpl_vars['ADICION']->value;?>
</td>
									</tr>
								</table>
							</td>
							<td style="overflow: wrap;border:1px solid;width:15%;">
								<table style="overflow: wrap;width: 90%;" cellpadding="0" cellspacing="0">
									<tr>
										<td style="overflow: wrap;width:90%;text-align:left;">CLIENTE NUEVO</td>
										<td><?php echo $_smarty_tpl->tpl_vars['CLIENTE_NUEVO']->value;?>
</td>
									</tr>
								</table>
							</td>
							<td style="overflow: wrap;border:1px solid;width:15%;">
								<table style="overflow: wrap;width: 90%;" cellpadding="0" cellspacing="0">
									<tr>
										<td style="overflow: wrap;width:90%;text-align:left;">PRESTAMO</td>
										<td><?php echo $_smarty_tpl->tpl_vars['PRESTAMO']->value;?>
</td>
									</tr>
								</table>
							</td>
							<td style="overflow: wrap;border:1px solid;width:15%;">
								<table style="overflow: wrap;width: 90%;" cellpadding="0" cellspacing="0">
									<tr>
										<td style="overflow: wrap;width:90%;text-align:left;">OTRO</td>
										<td><?php echo $_smarty_tpl->tpl_vars['OTRO']->value;?>
</td>
									</tr>
								</table>
								
							</td>
						</tr>
						<tr>
							<td style="overflow: wrap;border:1px solid;width:15%;">
								<table style="overflow: wrap;width: 90%;" cellpadding="0" cellspacing="0">
									<tr>
										<td style="overflow: wrap;width:90%;text-align:left;">PERIFERICO</td>
										<td><?php echo $_smarty_tpl->tpl_vars['PERIFERICO']->value;?>
</td>
									</tr>
								</table>
							</td>
							<td style="overflow: wrap;border:1px solid;width:15%;">
								<table style="overflow: wrap;width: 90%;" cellpadding="0" cellspacing="0">
									<tr>
										<td style="overflow: wrap;width:90%;text-align:left;">ADF</td>
										<td><?php echo $_smarty_tpl->tpl_vars['ADF']->value;?>
</td>
									</tr>
								</table>
							</td>
							<td style="overflow: wrap;border:1px solid;width:15%;">
								<table style="overflow: wrap;width: 90%;" cellpadding="0" cellspacing="0">
									<tr>
										<td style="overflow: wrap;width:90%;text-align:left;">CONECTIVIDAD</td>
										<td><?php echo $_smarty_tpl->tpl_vars['CONECTIVIDAD']->value;?>
</td>
									</tr>
								</table>
							</td>
							<td style="overflow: wrap;border:1px solid;width:15%;">
								<table style="overflow: wrap;width: 90%;" cellpadding="0" cellspacing="0">
									<tr>
										<td style="overflow: wrap;width:90%;text-align:left;">IMPRESION</td>
										<td><?php echo $_smarty_tpl->tpl_vars['IMPRESION']->value;?>
</td>
									</tr>
								</table>
							</td>
							<td style="overflow: wrap;border:1px solid;width:15%;">
								<table style="overflow: wrap;width: 90%;" cellpadding="0" cellspacing="0">
									<tr>
										<td style="overflow: wrap;width:70%;text-align:left;">IMPRESION SCANNER</td>
										<td><?php echo $_smarty_tpl->tpl_vars['IMPRESION_SCANNER']->value;?>
</td>
									</tr>
								</table>
							</td>
							<td style="overflow: wrap;border:1px solid;width:15%;">
								<table style="overflow: wrap;width: 90%;" cellpadding="0" cellspacing="0">
									<tr>
										<td style="overflow: wrap;width:70%;text-align:left;">FAX</td>
										<td><?php echo $_smarty_tpl->tpl_vars['FAX']->value;?>
</td>
									</tr>
								</table>
							</td>
							<td style="overflow: wrap;border:1px solid;width:15%;">
								<table style="overflow: wrap;width: 90%;" cellpadding="0" cellspacing="0">
									<tr>
										<td style="overflow: wrap;width:70%;text-align:left;">DISCO DURO</td>
										<td><?php echo $_smarty_tpl->tpl_vars['DISCO_DURO']->value;?>
</td>
									</tr>
								</table>
							</td>	
						</tr>
					</table>
				</td>
			</tr>
			<tr>			
				<td colspan="8">
					<table style="overflow: wrap;width: 100%;" cellpadding="0" cellspacing="0">					
						<tr>
							<td style="overflow: wrap;border:1px solid;">
								<table style="overflow: wrap;width: 100%;" cellpadding="0" cellspacing="0">
									<tr>
										<td style="overflow: wrap;text-align:left;">BANCO PAPEL</td>
									</tr>
									<tr>
										<td> <?php echo $_smarty_tpl->tpl_vars['BANCO_PAPEL']->value;?>
 </td>
									</tr>
								</table>
							</td>
							<td style="overflow: wrap;border:1px solid;">
								<table style="overflow: wrap;width: 100%;" cellpadding="0" cellspacing="0">
									<tr>
										<td style="overflow: wrap;text-align:left;">CASSETERAS ADICIONALES</td>
									</tr>
									<tr>
										<td> <?php echo $_smarty_tpl->tpl_vars['CASSET_ADICIONAL']->value;?>
 </td>
									</tr>
								</table>
							</td>
							<td style="overflow: wrap;border:1px solid;" colspan="6">
								<table style="overflow: wrap;width: 100%;" cellpadding="0" cellspacing="0">
									<tr>
										<td style="overflow: wrap;text-align:left;">OTROS PERIFERICOS</td>
									</tr>
									<tr>
										<td> <?php echo $_smarty_tpl->tpl_vars['OPERIFEFICOS']->value;?>
 </td>
									</tr>
								</table>
							</td>
						</tr>
						<tr>
							<td style="overflow: wrap;border:1px solid;" colspan="4">
								<table style="overflow: wrap;width: 100%;" cellpadding="0" cellspacing="0">
									<tr>
										<td style="overflow: wrap;text-align:left;">INCLUYE TRANPORTE<!-- OBSERVACIONES --></td>
									</tr>
									<tr>
										<td> <?php echo $_smarty_tpl->tpl_vars['INCLUYE_TRASPORTE']->value;?>
<!-- <?php echo $_smarty_tpl->tpl_vars['OBSERVACIONES']->value;?>
 --> </td>
									</tr>
								</table>
							</td>
							<td style="overflow: wrap;border:1px solid;" colspan="4">
								<table style="overflow: wrap;width: 100%;" cellpadding="0" cellspacing="0">
									<tr>
										<td style="overflow: wrap;text-align:left;"></td>
									</tr>
									<tr>
										<td>  </td>
									</tr>
								</table>
							</td>
						</tr>
					</table>
				</td>		
			</tr>
			<tr>
				<td colspan="8">
					<table style="overflow: wrap;width: 100%;" cellpadding="0" cellspacing="0">
						<tr>
							<td style="overflow: wrap;width: 30%;border:1px solid;" colspan="4">
								<br /><br /><center>SERVICIOS OUTSOURCING</center><br /><br />
							</td>
							<td style="overflow: wrap;width: 40%;border:1px solid;" colspan="4">
								<br /><br /><center>OBSERVACIONES GENERALES</center><br /><br />
							</td>
							<td style="overflow: wrap;width: 30%;border:1px solid;" colspan="4">
								<br /><br /><center>VENTA DE EQUIPOS</center><br /><br />
							</td>
						</tr>
						<tr>
							<td style="overflow: wrap;width: 30%;border:1px solid;" colspan="4">
								<center>CONDICIONES</center>
							</td>
							<td style="overflow: wrap;width: 40%;border:1px solid;" colspan="4" rowspan="15">
								<?php echo $_smarty_tpl->tpl_vars['OBSERVACIONES_GLOB']->value;?>

							</td>
							<td style="overflow: wrap;width: 30%;border:1px solid;" colspan="4">
								<center>CONDICIONES</center>
							</td>
						</tr>
						<tr>
							<td style="overflow: wrap;width:20%;border:1px solid;" colspan="2">
								DESCRIPCIÓN
							</td>
							<td style="overflow: wrap;width:15%;border:1px solid;" colspan="2">
								PLAN OTORGADO
							</td>
							
							<td style="overflow: wrap;width:15%;border:1px solid;" colspan="2">
								DESCRIPCIÓN
							</td>
							<td style="overflow: wrap;width:15%;border:1px solid;" colspan="2">
								OTORGADO
							</td>
						</tr>
						<tr>
							<td style="overflow: wrap;width:15%;border:1px solid;" colspan="2">
								CANON FIJO MENSUAL (ANTES DE IVA)
							</td>
							<td style="overflow: wrap;width:15%;border:1px solid;" colspan="2">
								<?php echo $_smarty_tpl->tpl_vars['CANON_MENSUAL']->value;?>

							</td>
							
							<td style="overflow: wrap;width:15%;border:1px solid;" colspan="2">
								VALOR
							</td>
							<td style="overflow: wrap;width:15%;border:1px solid;" colspan="2">
								<?php echo $_smarty_tpl->tpl_vars['VALOR']->value;?>

							</td>
						</tr>
						<tr>
							<td style="overflow: wrap;width:15%;border:1px solid;" colspan="2">
								VOLUMEN INCLUIDO COPIAS NEGRO
							</td>
							<td style="overflow: wrap;width:15%;border:1px solid;" colspan="2">
								<?php echo $_smarty_tpl->tpl_vars['VOLUMEN_NEGRO']->value;?>

							</td>
							<td style="overflow: wrap;width:15%;border:1px solid;" colspan="2">
								GARANTIA
							</td>
							<td style="overflow: wrap;width:15%;border:1px solid;" colspan="2">
								<?php echo $_smarty_tpl->tpl_vars['GARANTIA']->value;?>

							</td>
						</tr>
						<tr>
							<td style="overflow: wrap;width:15%;border:1px solid;" colspan="2">
								VOLUMEN INCLUIDO COPIAS COLOR
							</td>
							<td style="overflow: wrap;width:15%;border:1px solid;" colspan="2">
								<?php echo $_smarty_tpl->tpl_vars['VOLUMEN_COLOR']->value;?>

							</td>
							<td style="overflow: wrap;width:15%;border:1px solid;" colspan="2">
								FORMA DE PAGO
							</td>
							<td style="overflow: wrap;width:15%;border:1px solid;" colspan="2">
								<?php echo $_smarty_tpl->tpl_vars['FORMA_PAGO_VENTA']->value;?>

							</td>
						</tr>
						<tr>
							<td style="overflow: wrap;width:15%;border:1px solid;" colspan="2">
								VOLUMEN SCANN INCLUIDO	
							</td>
							<td style="overflow: wrap;width:15%;border:1px solid;" colspan="2">
								<?php echo $_smarty_tpl->tpl_vars['ADICIONAL_NEGRO']->value;?>

							</td>
							<td style="overflow: wrap;width:15%;border:1px solid;" colspan="2">
								ABONO
							</td>
							<td style="overflow: wrap;width:15%;border:1px solid;" colspan="2">
								<?php echo $_smarty_tpl->tpl_vars['ABONO']->value;?>

							</td>
						</tr>
						<tr>
							<td style="overflow: wrap;width:15%;border:1px solid;" colspan="2">
								COSTO COPIA B/N
							</td>
							<td style="overflow: wrap;width:15%;border:1px solid;" colspan="2">
								<?php echo $_smarty_tpl->tpl_vars['COSTO_BN']->value;?>

							</td>
							<td style="overflow: wrap;border:1px solid;" colspan="2">
								PAGO TOTAL
							</td>
							<td style="overflow: wrap;border:1px solid;" colspan="2">
								<?php echo $_smarty_tpl->tpl_vars['PAGO_TOTAL']->value;?>

							</td>
						</tr>
						<tr>
							<td style="overflow: wrap;width:15%;border:1px solid;" colspan="2">
								COSTO POR COPIA COLOR	
							</td>
							<td style="overflow: wrap;width:15%;border:1px solid;" colspan="2">
								<?php echo $_smarty_tpl->tpl_vars['COSTO_COLOR']->value;?>

							</td>
							<td style="overflow: wrap;width:15%;border:1px solid;" colspan="2">
								SE RECIBE EQUIPO POR PARTE DE PAGO
							</td>
							<td style="overflow: wrap;width:15%;border:1px solid;" colspan="2">
								<?php echo $_smarty_tpl->tpl_vars['EQUIPO_PAGO']->value;?>

							</td>
							
						</tr>
							<tr>
							<td style="overflow: wrap;width:15%;border:1px solid;" colspan="2">
								COSTO POR COPIA SCANER	
							</td>
							<td style="overflow: wrap;width:15%;border:1px solid;" colspan="2">
								<?php echo $_smarty_tpl->tpl_vars['COSTO_SCAN']->value;?>

							</td>
							<td style="overflow: wrap;width:15%;border:1px solid;" colspan="4">
								<!-- OBSERVACIONES -->
							</td>
						</tr>
						<tr>
							<td style="overflow: wrap;width:15%;border:1px solid;" colspan="2">
								COSTO ADICIONAL COPIA NEGRO
							</td>
							<td style="overflow: wrap;width:15%;border:1px solid;" colspan="2">
								<?php echo $_smarty_tpl->tpl_vars['ADICIONAL_NEGRO']->value;?>

							</td>
							<td style="overflow: wrap;width:15%;border:1px solid;" colspan="4" rowspan="6">
								<?php echo $_smarty_tpl->tpl_vars['OBSERV_NATURAL']->value;?>

							</td>	
						</tr>
						<tr>
							<td style="overflow: wrap;width:15%;border:1px solid;" colspan="2">
								COSTO ADICIONAL COPIA COLOR
							</td>
							<td style="overflow: wrap;width:15%;border:1px solid;" colspan="2">
								<?php echo $_smarty_tpl->tpl_vars['ADICIONAL_COLOR']->value;?>

							</td>
						</tr>
						<tr>
							<td style="overflow: wrap;width:15%;border:1px solid;" colspan="2">
								COSTO ADICIONAL SCANN
							</td>
							<td style="overflow: wrap;width:15%;border:1px solid;" colspan="2">
								<?php echo $_smarty_tpl->tpl_vars['ADICIONAL_SCANN']->value;?>

							</td>
						</tr>	
						<tr>
							<td style="overflow: wrap;width:15%;border:1px solid;" colspan="2">
								DURACION CONTRATO
							</td>
							<td style="overflow: wrap;width:15%;border:1px solid;" colspan="2">
								<?php echo $_smarty_tpl->tpl_vars['DURACION_CONTRATO']->value;?>

							</td>
						</tr>
						<tr>
							<td style="overflow: wrap;width:15%;border:1px solid;" colspan="2">
								FECHA DE INICIO CONTRATO
							</td>
							<td style="overflow: wrap;width:15%;border:1px solid;" colspan="2">
								<?php echo $_smarty_tpl->tpl_vars['INICIO_CONTRATO']->value;?>

							</td>	
						</tr>
						<tr>
							<td style="overflow: wrap;width:15%;border:1px solid;" colspan="2">
								FORMA DE PAGO
							</td>
							<td style="overflow: wrap;width:15%;border:1px solid;" colspan="2">
								<?php echo $_smarty_tpl->tpl_vars['FORMA_PAGO']->value;?>

							</td>
						</tr>
					</table>

			<tr>
			
			<tr>
				<td style="overflow: wrap;border:1px solid;" colspan="8">
					<left><!-- NOTA: <?php echo $_smarty_tpl->tpl_vars['NOTA']->value;?>
 --></left>
				</td>
			</tr>
			<tr>
				<td style="overflow: wrap;border:1px solid;" colspan="8">
				<table style="overflow: wrap;width: 100%;" cellpadding="0" cellspacing="0">
					<tr>
						<td style="overflow: wrap;border:1px solid;width:25%;" colspan="2">
							<center>NOMBRE DEL EJECUTIVO DE CUENTA</center>
						</td>
						<td style="overflow: wrap;border:1px solid;width:25%;" colspan="2">
							<center>APROBADO GERENCIA COMERCIAL</center>
						</td>
						<td style="overflow: wrap;border:1px solid;width:25%;" colspan="2">
							<center>APROBADO REQUISITOS</center>
						</td>
						<td style="overflow: wrap;border:1px solid;width:25%;">
							<center>APROBADO EXISTENCIA</center>
						</td>
						<td style="overflow: wrap;border:1px solid;width:25%;">
							<center>APROBADO ENTREGA</center>
						</td>
					</tr>
					<tr>
						<td style="overflow: wrap;border:1px solid;height:120px;" colspan="2">
							<center><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />______________________<br />
								EJECUTIVO DE CUENTA
							</center>
						</td>
						<td style="overflow: wrap;border:1px solid;height:120px;" colspan="2">
							<center><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />______________________<br />
								GERENCIA COMERCIAL
							</center>
						</td>
						<td style="overflow: wrap;border:1px solid;height:120px;" colspan="2">
							<center><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />______________________<br />
								COORD OUTSOURCING
							</center>
						</td>
						<td style="overflow: wrap;border:1px solid;height:120px;">
							<center><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />______________________<br />
								BODEGA
							</center>
						</td>
						<td style="overflow: wrap;border:1px solid;height:120px;">
							<center><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />______________________<br />
								SERVICIO TECNICO
							</center>
						</td>
					</tr>
					</table>
				</td>		
			</tr>
		
			
			
		</tbody>
	</table>
</body>
</html><?php }} ?>