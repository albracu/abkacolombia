<?php /* Smarty version Smarty-3.1.7, created on 2017-04-08 00:19:20
         compiled from "/var/www/abkacolombia/includes/runtime/../../layouts/vlayout/modules/Actas/ExportPDF.tpl" */ ?>
<?php /*%%SmartyHeaderCode:77682590158e6450bba8158-00830564%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eeb7f0f2e658a061ebafa85e4d7542ba0667b714' => 
    array (
      0 => '/var/www/abkacolombia/includes/runtime/../../layouts/vlayout/modules/Actas/ExportPDF.tpl',
      1 => 1491607157,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '77682590158e6450bba8158-00830564',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_58e6450bbdb49',
  'variables' => 
  array (
    'ACTA_DATE' => 0,
    'ACTA_CODE' => 0,
    'ACCOUNT_NAME' => 0,
    'ACCOUNT_DIR' => 0,
    'ACCOUNT_CITY' => 0,
    'ACCOUNT_PHONE' => 0,
    'CONTACT_NAME' => 0,
    'REEMPLAZO' => 0,
    'CLIENTE_NUEVO' => 0,
    'VENTA' => 0,
    'PRESTAMO' => 0,
    'REVISION_TECNICA' => 0,
    'NO_EQUIPO' => 0,
    'NUMERO' => 0,
    'NO_SERIE' => 0,
    'CONTADOR_INICIAL_COLOR' => 0,
    'CONTADOR_INICIAL' => 0,
    'CONTADOR_INICIAL_OTROS' => 0,
    'ADF' => 0,
    'SCANNER' => 0,
    'MESA' => 0,
    'DUPLEX' => 0,
    'FAX' => 0,
    'BANCO_PAPEL' => 0,
    'PRINTER' => 0,
    'BYPASS' => 0,
    'BANDEJAS' => 0,
    'DOC_SERVER' => 0,
    'CABLE_PADER' => 0,
    'REGULADO' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58e6450bbdb49')) {function content_58e6450bbdb49($_smarty_tpl) {?><html>
<head>
	<title></title>
</head>
<body class="scayt-enabled">

<p style="font-family:tahoma,geneva,sans-serif;text-align:justify;">

<table style="width: 100%;">
	<tr>
	<td width="35%">
		<img src="test/logo/IconoAbkaReporte.png" width="140"/>
	</td>
	<td>
		<img src="test/logo/abka-logo.png" width="300"/>
	</td>
	</tr>
</table>

<h5 style="border-top:1px solid;border-left:1px solid; border-right:1px solid; border-bottom:1px solid; text-align:center;">ACTA DE ENTREGA EQUIPO SOLICITADO</h5> 

<table style="border:1px solid;width: 100%;cellpadding=5;">
	<tbody>
		<tr>
			<td width="10%" height="50px"><span style="font-family:tahoma,geneva,sans-serif;font-size: 12px">
				<p>Fecha </p>
			</td>
			<td width="40%"><span style="font-family:tahoma,geneva,sans-serif;font-size: 12px">
				<p><?php echo $_smarty_tpl->tpl_vars['ACTA_DATE']->value;?>
</p>
			</td>
			<td width="10%"><span style="font-family:tahoma,geneva,sans-serif;font-size: 12px">
			</td>
			<td width="40%"  align="center"><span style="font-family:tahoma,geneva,sans-serif;font-size: 12px">
				<p>Nº <?php echo $_smarty_tpl->tpl_vars['ACTA_CODE']->value;?>
</p>
			</td>
		</tr>
		<tr>
			<td width="10%"><span style="font-family:tahoma,geneva,sans-serif;font-size: 12px">
				<p>Señores </p>
			</td>
			<td colspan="2" width="30%"><span style="font-family:tahoma,geneva,sans-serif;font-size: 12px">
				<p><?php echo $_smarty_tpl->tpl_vars['ACCOUNT_NAME']->value;?>
</p>
			</td>
		</tr>
		<tr>
			<td width="10%"><span style="font-family:tahoma,geneva,sans-serif;font-size: 12px">
				<p>Dirección </p>
			</td>
			<td colspan="2" width="30%"><span style="font-family:tahoma,geneva,sans-serif;font-size: 12px">
				<p><?php echo $_smarty_tpl->tpl_vars['ACCOUNT_DIR']->value;?>
</p>
			</td>
		</tr>
		<tr>
			<td width="10%"><span style="font-family:tahoma,geneva,sans-serif;font-size: 12px">
				<p>Ciudad </p>
			</td>
			<td width="30%"><span style="font-family:tahoma,geneva,sans-serif;font-size: 12px">
				<p><?php echo $_smarty_tpl->tpl_vars['ACCOUNT_CITY']->value;?>
</p>
			</td>
			<td width="10%"><span style="font-family:tahoma,geneva,sans-serif;font-size: 12px">
				<p>Telefono </p>
			</td>
			<td width="30%"><span style="font-family:tahoma,geneva,sans-serif;font-size: 12px">
				<p><?php echo $_smarty_tpl->tpl_vars['ACCOUNT_PHONE']->value;?>
</p>
			</td>
		</tr>
		<tr>
			<td width="10%"><span style="font-family:tahoma,geneva,sans-serif;font-size: 12px">
				<p>Contacto </p>
			</td>
			<td colspan="2" width="30%"><span style="font-family:tahoma,geneva,sans-serif;font-size: 12px">
				<p><?php echo $_smarty_tpl->tpl_vars['CONTACT_NAME']->value;?>
</p>
			</td>
		</tr>
		<tr>
			<td height="10%" colspan="4">
				<span style="font-family:tahoma,geneva,sans-serif;font-size: 12px">Cordial saludo <br>Estación Total Cygnus KS-102 S/N HV3476, Calibrado el 06-05-2015 Nivel Automático: Automatic level DSC432 S/N: B1301999, Calibrado el 07-05-2015</span>
			</td>
		
		</tr>
		<tr>
			<td colspan="4">
				<table style="width: 100%;">
					<tr>
						<td width="20%"><span style="font-family:tahoma,geneva,sans-serif;font-size: 12px">
							Remplazo
						</td>
						<td width="5%" style="border:1px solid;text-align:center;">
							<?php echo $_smarty_tpl->tpl_vars['REEMPLAZO']->value;?>

						</td>
						<td width="20%"><span style="font-family:tahoma,geneva,sans-serif;font-size: 12px">
							Equipo Adicional
						</td>
						<td width="5%" style="border:1px solid;text-align:center;">
							
						</td>
						<td width="20%"><span style="font-family:tahoma,geneva,sans-serif;font-size: 12px">
							Cliente Nuevo
						</td>
						<td width="5%" style="border:1px solid;text-align:center;">
							<?php echo $_smarty_tpl->tpl_vars['CLIENTE_NUEVO']->value;?>

						</td>
					</tr>
					<tr>
						<td width="20%"><span style="font-family:tahoma,geneva,sans-serif;font-size: 12px">
							Venta
						</td>
						<td width="5%" style="border:1px solid;text-align:center;">
							<?php echo $_smarty_tpl->tpl_vars['VENTA']->value;?>

						</td>
						<td width="20%"><span style="font-family:tahoma,geneva,sans-serif;font-size: 12px">
							Préstamo
						</td>
						<td width="5%" style="border:1px solid;text-align:center;">
							<?php echo $_smarty_tpl->tpl_vars['PRESTAMO']->value;?>

						</td>
						<td width="20%"><span style="font-family:tahoma,geneva,sans-serif;font-size: 12px">
							Revisión Técnica
						</td>
						<td width="5%" style="border:1px solid;text-align:center;">
							<?php echo $_smarty_tpl->tpl_vars['REVISION_TECNICA']->value;?>

						</td>
					</tr>
				</table>
			 </td>	
		</tr>
	</tbody>
</table>

<br />
<table style="border:1px solid;width: 100%;cellpadding:5;">
	<tbody>
	<tr>
		<td width="10%" height="50px" colspan="4"><span style="font-family:tahoma,geneva,sans-serif;font-size: 12px">
			Información del Equipo
		</td>
	<tr>
	<tr>
		<td width="10%" height="20px"><span style="font-family:tahoma,geneva,sans-serif;font-size: 12px">
			<p>N° Equipo: </p>
		</td>
		<td width="20%"><span style="font-family:tahoma,geneva,sans-serif;font-size: 12px">
			<p><?php echo $_smarty_tpl->tpl_vars['NO_EQUIPO']->value;?>
</p>
		</td>
		<td width="10%"><span style="font-family:tahoma,geneva,sans-serif;font-size: 12px">
		</td>
		<td width="20%"  align="center"><span style="font-family:tahoma,geneva,sans-serif;font-size: 12px">
			<p><?php echo $_smarty_tpl->tpl_vars['NUMERO']->value;?>
</p>
		</td>
	</tr>
	<tr>
		<td width="10%" height="20px"><span style="font-family:tahoma,geneva,sans-serif;font-size: 12px">
				<p>Serial: </p>
		</td>
		<td width="20%"><span style="font-family:tahoma,geneva,sans-serif;font-size: 12px">
			<p><?php echo $_smarty_tpl->tpl_vars['NO_SERIE']->value;?>
</p>
		</td>
		<td width="10%"><span style="font-family:tahoma,geneva,sans-serif;font-size: 12px">
			<p>Contador Inicial Color: </p>
		</td>
		<td width="20%"  align="center"><span style="font-family:tahoma,geneva,sans-serif;font-size: 12px">
			<p><?php echo $_smarty_tpl->tpl_vars['CONTADOR_INICIAL_COLOR']->value;?>
</p>
		</td>
	</tr>
	<tr>
		<td width="10%" height="20px"><span style="font-family:tahoma,geneva,sans-serif;font-size: 12px">
				<p>Contador Inicial: </p>
		</td>
		<td width="20%"><span style="font-family:tahoma,geneva,sans-serif;font-size: 12px">
			<p><?php echo $_smarty_tpl->tpl_vars['CONTADOR_INICIAL']->value;?>
</p>
		</td>
		<td width="10%"><span style="font-family:tahoma,geneva,sans-serif;font-size: 12px">
			<p>Contador Others: </p>
		</td>
		<td width="20%"  align="center"><span style="font-family:tahoma,geneva,sans-serif;font-size: 12px">
			<p><?php echo $_smarty_tpl->tpl_vars['CONTADOR_INICIAL_OTROS']->value;?>
</p>
		</td>
	</tr>
	<tr>
		<td width="10%" height="20px" colspan="4"><span style="font-family:tahoma,geneva,sans-serif;font-size: 12px">
			Fuciones del Equipo
		</td>
	</tr>
	<tr>
		<td colspan="4">
			<table style="width: 100%;">
				<tr>
					<td width="20%"><span style="font-family:tahoma,geneva,sans-serif;font-size: 12px">
						<p>ADF</p>
					</td>
					<td width="5%" style="border:1px solid;text-align:center;">
						<p><?php echo $_smarty_tpl->tpl_vars['ADF']->value;?>
</p>
					</td>
					<td width="20%"><span style="font-family:tahoma,geneva,sans-serif;font-size: 12px">
						<p>Scanner</p>
					</td>
					<td width="5%" style="border:1px solid;text-align:center;">
						<p><?php echo $_smarty_tpl->tpl_vars['SCANNER']->value;?>
</p>
					</td>
					<td width="20%"><span style="font-family:tahoma,geneva,sans-serif;font-size: 12px">
						<p>Mesa</p>
					</td>
					<td width="5%" style="border:1px solid;text-align:center;">
						<p><?php echo $_smarty_tpl->tpl_vars['MESA']->value;?>
</p>
					</td>
				</tr>
				<tr>
					<td width="20%"><span style="font-family:tahoma,geneva,sans-serif;font-size: 12px">
						<p>Duplex</p>
					</td>
					<td width="5%" style="border:1px solid;text-align:center;">
						<p><?php echo $_smarty_tpl->tpl_vars['DUPLEX']->value;?>
</p>
					</td>
					<td width="20%"><span style="font-family:tahoma,geneva,sans-serif;font-size: 12px">
						<p>Fax</p>
					</td>
					<td width="5%" style="border:1px solid;text-align:center;">
						<p><?php echo $_smarty_tpl->tpl_vars['FAX']->value;?>
</p>
					</td>
					<td width="20%"><span style="font-family:tahoma,geneva,sans-serif;font-size: 12px">
						<p>Banco de Papel</p>
					</td>
					<td width="5%" style="border:1px solid;text-align:center;">
						<p><?php echo $_smarty_tpl->tpl_vars['BANCO_PAPEL']->value;?>
</p>
					</td>
				</tr>
				<tr>
					<td width="20%"><span style="font-family:tahoma,geneva,sans-serif;font-size: 12px">
						<p>Printer</p>
					</td>
					<td width="5%" style="border:1px solid;text-align:center;">
						<p><?php echo $_smarty_tpl->tpl_vars['PRINTER']->value;?>
</p>
					</td>
					<td width="20%"><span style="font-family:tahoma,geneva,sans-serif;font-size: 12px">
						<p>Bypass</p>
					</td>
					<td width="5%" style="border:1px solid;text-align:center;">
						<p><?php echo $_smarty_tpl->tpl_vars['BYPASS']->value;?>
</p>
					</td>
					<td width="20%"><span style="font-family:tahoma,geneva,sans-serif;font-size: 12px">
						<p>Bandejas</p>
					</td>
					<td width="5%" style="border:1px solid;text-align:center;">
						<p><?php echo $_smarty_tpl->tpl_vars['BANDEJAS']->value;?>
</p>
					</td>
				</tr>
				<tr>
					<td width="20%"><span style="font-family:tahoma,geneva,sans-serif;font-size: 12px">
						<p>Document Server</p>
					</td>
					<td width="5%" style="border:1px solid;text-align:center;">
						<p><?php echo $_smarty_tpl->tpl_vars['DOC_SERVER']->value;?>
</p>
					</td>
					<td width="20%"><span style="font-family:tahoma,geneva,sans-serif;font-size: 12px">
						<p>Cable de Pader</p>
					</td>
					<td width="5%" style="border:1px solid;text-align:center;">
						<p><?php echo $_smarty_tpl->tpl_vars['CABLE_PADER']->value;?>
</p>
					</td>
					<td width="20%"><span style="font-family:tahoma,geneva,sans-serif;font-size: 12px">
						<p>Regulador de Energía</p>
					</td>
					<td width="5%" style="border:1px solid;text-align:center;">
						<p><?php echo $_smarty_tpl->tpl_vars['REGULADO']->value;?>
</p>
					</td>
				</tr>
			</table>
		 </td>
	</tr>
	</tbody>
</table>
<br />



<table style="border:1px solid;width: 100%;cellpadding:5;">
	<tbody>
		<tr>	
			<td colspan="4">
				<span style="font-family:tahoma,geneva,sans-serif;font-size: 12px">Informó que Únicamente se hace retiro de equipos con autorización escrita y con papeleria de ABKA COLOMBIA S.A.S, solo el personal autorizado podrá retirar equipos; Tener en cuenta que nuestro personal está plenamente uniformado e identificado, si tiene alguna duda no se abstenga estamos para atenderle. <br>
				Comuniquese con LUZ ELENA VIEDMAN ZAMORA o ANGELICA MARIA CAICEDO a los telefonos: 5247002 - para su confirmación. </span><br>
				<CENTER><strong>Por otra parte se informa que el equipo se entrega con el regulador de energia, con el fin de proteger la unidad de cualquier alteracion electrica, sin embargo y para que el regulador cumpla su funcion, se hace necesario que la conexion cuente con polo a tierra, de lo contrario no se asumiran daños causados por este tema.</strong></CENTER>
			</td>
		</tr>
		<tr>
			<td>
				<br />
				<p>Entregado por:</p>
			</td>
			<td>
				<br />
				<p>Recibido por:</p>
			</td>
		</tr>
		<tr>	
			<td width="50%"><span style="font-family:tahoma,geneva,sans-serif;font-size: 12px">		
				<br />
				_______________________________<br />
				<STRONG>LUZ ADRIANA HERRERA</STRONG><br />

				<p>AUXILIAR DE DESPACHOS</p>

			</td>
			<td width="50%">
				<table style="width: 100%;">
					<tr>
						<td width="70%" height="120px"><span style="text-align:left;font-family:tahoma,geneva,sans-serif;font-size: 12px">
							Fecha y sello de aceptación: _____________<br />
							Nombre: _________________________________<br />
							Cedula: __________________________________<br />
						</td>
						<td style="border:1px solid;">
						</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>	
			<td colspan="4">
				<span style="text-align:left;font-family:tahoma,geneva,sans-serif;font-size: 12px">
				La firma de este documento confirma que ha leído y entendido las observaciones.
		</tr>

	</tbody>
</table>
</body>
</html><?php }} ?>