<html>
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
										<td> {$NO_CONTRATO} </td>
									</tr>
								</table>
							</td>
							<td rowspan="2" style="overflow: wrap;border:1px solid;width:20%;">
								<table style="overflow: wrap;width: 100%;" cellpadding="0" cellspacing="0">
									<tr>
										<td style="overflow: wrap;text-align:left;">FECHA DE ENTREGA</td>
									</tr>
									<tr>
										<td> {$FECHA_ENTREGA} </td>
									</tr>
								</table>
							</td>
							<td rowspan="2" style="overflow: wrap;border:1px solid;width:18%;">
								<table style="overflow: wrap;width: 100%;" cellpadding="0" cellspacing="0">
									<tr>
										<td style="overflow: wrap;text-align:left;">PEDIDO N°</td>
									</tr>
									<tr>
										<td> {$NO_PEDIDO} </td>
									</tr>
								</table>
							</td>
							<td rowspan="2" style="overflow: wrap;border:1px solid;width:12%;">
								<table style="overflow: wrap;width: 100%;" cellpadding="0" cellspacing="0">
									<tr>
										<td style="overflow: wrap;text-align:left;">OUTSOURCING</td>
									</tr>
									<tr>
										<td> {$OUTSOURCING} </td>
									</tr>
								</table>
							</td>
							<td rowspan="2" style="overflow: wrap;border:1px solid;width:10%;">	
								<table style="overflow: wrap;width: 100%;" cellpadding="0" cellspacing="0">
									<tr>
										<td style="overflow: wrap;text-align:left;">VENTA</td>
									</tr>
									<tr>
										<td> {$VENTA} </td>
									</tr>
								</table>		
							</td>	
						</tr>
						<tr> 
							<td style="overflow: wrap;border:1px solid;width:10%;">			
								{$DAY}
							</td>
							<td style="overflow: wrap;border:1px solid;width:10%;">		
								{$MON}
							</td>
							<td style="overflow: wrap;border:1px solid;width:10%;">			
								{$YEAR}
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
										<td style="overflow: wrap;width:35%;"> {$ACCOUNT_NAME} </td>
									</tr>
								</table>
							</td>
							<td style="overflow: wrap;border:1px solid;">
								<table style="overflow: wrap;width: 100%;" cellpadding="0" cellspacing="0">
									<tr>
										<td style="overflow: wrap;text-align:left;width:15%;">NIT ó CC:</td>
									</tr>
									<tr>
										<td style="overflow: wrap;width:15%;"> {$NIT} </td>
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
										<td style="overflow: wrap;width:35%;"> {$DIRECCION_FACTURA} </td>
									</tr>
								</table>
							</td>
							<td style="overflow: wrap;border:1px solid;">
								<table style="overflow: wrap;width: 100%;" cellpadding="0" cellspacing="0">
									<tr>
										<td style="overflow: wrap;text-align:left;width:15%;">CONTACTO 1</td>
									</tr>
									<tr>
										<td style="overflow: wrap;width:15%;"> {$CONTACT_NAME} </td>
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
										<td style="overflow: wrap;width:35%;"> {$DESPACHO} </td>
									</tr>
								</table>
							</td>
							<td style="overflow: wrap;border:1px solid;">
								<table style="overflow: wrap;width: 100%;" cellpadding="0" cellspacing="0">
									<tr>
										<td style="overflow: wrap;text-align:left;width:15%;">CONTACTO 2</td>
									</tr>
									<tr>
										<td style="overflow: wrap;width:15%;"> {$CONTACTO2} </td>
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
										<td>{$HOME_PHONE}</td>
									</tr>
								</table>
							</td>
							<td style="overflow: wrap;border:1px solid;" colspan="2">
								<table style="overflow: wrap;width: 100%;" cellpadding="0" cellspacing="0">
									<tr>
										<td style="overflow: wrap;text-align:left;">CELULAR CONT 1</td>
									</tr>
									<tr>
										<td>{$MOBILE}</td>
									</tr>
								</table>
							</td>
							<td style="overflow: wrap;border:1px solid;" colspan="2">
								<table style="overflow: wrap;width: 100%;" cellpadding="0" cellspacing="0">
									<tr>
										<td style="overflow: wrap;text-align:left;">CELULAR CONT 2</td>
									</tr>
									<tr>
										<td>{$PHONE}</td>
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
										<td>{$OTHER_PHONE}</td>
									</tr>
								</table>
							</td>
							<td style="overflow: wrap;border:1px solid;" colspan="4">
								<table style="overflow: wrap;width: 100%;" cellpadding="0" cellspacing="0">
									<tr>
										<td style="overflow: wrap;text-align:left;">E-MAIL</td>
									</tr>
									<tr>
										<td>{$EMAIL}</td>
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
										<td>{$MODELO_PEDIDO}</td>
									</tr>
								</table>
							</td>
							<td style="overflow: wrap;border:1px solid;width:15%;">
								<table style="overflow: wrap;width: 90%;" cellpadding="0" cellspacing="0">
									<tr>
										<td style="overflow: wrap;width:90%;text-align:left;">REEMPLAZO:</td>
										<td>{$REEMPLAZO}</td>
									</tr>
								</table>
							</td>
							<td style="overflow: wrap;border:1px solid;width:15%;">
								<table style="overflow: wrap;width: 90%;" cellpadding="0" cellspacing="0">
									<tr>
										<td style="overflow: wrap;width:60%;text-align:left;">Nº REEMP.</td>
										<td>{$NREEMPLAZO}</td>
									</tr>
								</table>
							</td>
							<td style="overflow: wrap;border:1px solid;width:15%;">
								<table style="overflow: wrap;width: 90%;" cellpadding="0" cellspacing="0">
									<tr>
										<td style="overflow: wrap;width:90%;text-align:left;">ADICION</td>
										<td>{$ADICION}</td>
									</tr>
								</table>
							</td>
							<td style="overflow: wrap;border:1px solid;width:15%;">
								<table style="overflow: wrap;width: 90%;" cellpadding="0" cellspacing="0">
									<tr>
										<td style="overflow: wrap;width:90%;text-align:left;">CLIENTE NUEVO</td>
										<td>{$CLIENTE_NUEVO}</td>
									</tr>
								</table>
							</td>
							<td style="overflow: wrap;border:1px solid;width:15%;">
								<table style="overflow: wrap;width: 90%;" cellpadding="0" cellspacing="0">
									<tr>
										<td style="overflow: wrap;width:90%;text-align:left;">PRESTAMO</td>
										<td>{$PRESTAMO}</td>
									</tr>
								</table>
							</td>
							<td style="overflow: wrap;border:1px solid;width:15%;">
								<table style="overflow: wrap;width: 90%;" cellpadding="0" cellspacing="0">
									<tr>
										<td style="overflow: wrap;width:90%;text-align:left;">OTRO</td>
										<td>{$OTRO}</td>
									</tr>
								</table>
								
							</td>
						</tr>
						<tr>
							<td style="overflow: wrap;border:1px solid;width:15%;">
								<table style="overflow: wrap;width: 90%;" cellpadding="0" cellspacing="0">
									<tr>
										<td style="overflow: wrap;width:90%;text-align:left;">PERIFERICO</td>
										<td>{$PERIFERICO}</td>
									</tr>
								</table>
							</td>
							<td style="overflow: wrap;border:1px solid;width:15%;">
								<table style="overflow: wrap;width: 90%;" cellpadding="0" cellspacing="0">
									<tr>
										<td style="overflow: wrap;width:90%;text-align:left;">ADF</td>
										<td>{$ADF}</td>
									</tr>
								</table>
							</td>
							<td style="overflow: wrap;border:1px solid;width:15%;">
								<table style="overflow: wrap;width: 90%;" cellpadding="0" cellspacing="0">
									<tr>
										<td style="overflow: wrap;width:90%;text-align:left;">CONECTIVIDAD</td>
										<td>{$CONECTIVIDAD}</td>
									</tr>
								</table>
							</td>
							<td style="overflow: wrap;border:1px solid;width:15%;">
								<table style="overflow: wrap;width: 90%;" cellpadding="0" cellspacing="0">
									<tr>
										<td style="overflow: wrap;width:90%;text-align:left;">IMPRESION</td>
										<td>{$IMPRESION}</td>
									</tr>
								</table>
							</td>
							<td style="overflow: wrap;border:1px solid;width:15%;">
								<table style="overflow: wrap;width: 90%;" cellpadding="0" cellspacing="0">
									<tr>
										<td style="overflow: wrap;width:70%;text-align:left;">IMPRESION SCANNER</td>
										<td>{$IMPRESION_SCANNER}</td>
									</tr>
								</table>
							</td>
							<td style="overflow: wrap;border:1px solid;width:15%;">
								<table style="overflow: wrap;width: 90%;" cellpadding="0" cellspacing="0">
									<tr>
										<td style="overflow: wrap;width:70%;text-align:left;">FAX</td>
										<td>{$FAX}</td>
									</tr>
								</table>
							</td>
							<td style="overflow: wrap;border:1px solid;width:15%;">
								<table style="overflow: wrap;width: 90%;" cellpadding="0" cellspacing="0">
									<tr>
										<td style="overflow: wrap;width:70%;text-align:left;">DISCO DURO</td>
										<td>{$DISCO_DURO}</td>
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
										<td> {$BANCO_PAPEL} </td>
									</tr>
								</table>
							</td>
							<td style="overflow: wrap;border:1px solid;">
								<table style="overflow: wrap;width: 100%;" cellpadding="0" cellspacing="0">
									<tr>
										<td style="overflow: wrap;text-align:left;">CASSETERAS ADICIONALES</td>
									</tr>
									<tr>
										<td> {$CASSET_ADICIONAL} </td>
									</tr>
								</table>
							</td>
							<td style="overflow: wrap;border:1px solid;" colspan="6">
								<table style="overflow: wrap;width: 100%;" cellpadding="0" cellspacing="0">
									<tr>
										<td style="overflow: wrap;text-align:left;">OTROS PERIFERICOS</td>
									</tr>
									<tr>
										<td> {$OPERIFEFICOS} </td>
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
										<td> {$INCLUYE_TRASPORTE}<!-- {$OBSERVACIONES} --> </td>
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
								{$OBSERVACIONES_GLOB}
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
								{$CANON_MENSUAL}
							</td>
							
							<td style="overflow: wrap;width:15%;border:1px solid;" colspan="2">
								VALOR
							</td>
							<td style="overflow: wrap;width:15%;border:1px solid;" colspan="2">
								{$VALOR}
							</td>
						</tr>
						<tr>
							<td style="overflow: wrap;width:15%;border:1px solid;" colspan="2">
								VOLUMEN INCLUIDO COPIAS NEGRO
							</td>
							<td style="overflow: wrap;width:15%;border:1px solid;" colspan="2">
								{$VOLUMEN_NEGRO}
							</td>
							<td style="overflow: wrap;width:15%;border:1px solid;" colspan="2">
								GARANTIA
							</td>
							<td style="overflow: wrap;width:15%;border:1px solid;" colspan="2">
								{$GARANTIA}
							</td>
						</tr>
						<tr>
							<td style="overflow: wrap;width:15%;border:1px solid;" colspan="2">
								VOLUMEN INCLUIDO COPIAS COLOR
							</td>
							<td style="overflow: wrap;width:15%;border:1px solid;" colspan="2">
								{$VOLUMEN_COLOR}
							</td>
							<td style="overflow: wrap;width:15%;border:1px solid;" colspan="2">
								FORMA DE PAGO
							</td>
							<td style="overflow: wrap;width:15%;border:1px solid;" colspan="2">
								{$FORMA_PAGO_VENTA}
							</td>
						</tr>
						<tr>
							<td style="overflow: wrap;width:15%;border:1px solid;" colspan="2">
								VOLUMEN SCANN INCLUIDO	
							</td>
							<td style="overflow: wrap;width:15%;border:1px solid;" colspan="2">
								{$ADICIONAL_NEGRO}
							</td>
							<td style="overflow: wrap;width:15%;border:1px solid;" colspan="2">
								ABONO
							</td>
							<td style="overflow: wrap;width:15%;border:1px solid;" colspan="2">
								{$ABONO}
							</td>
						</tr>
						<tr>
							<td style="overflow: wrap;width:15%;border:1px solid;" colspan="2">
								COSTO COPIA B/N
							</td>
							<td style="overflow: wrap;width:15%;border:1px solid;" colspan="2">
								{$COSTO_BN}
							</td>
							<td style="overflow: wrap;border:1px solid;" colspan="2">
								PAGO TOTAL
							</td>
							<td style="overflow: wrap;border:1px solid;" colspan="2">
								{$PAGO_TOTAL}
							</td>
						</tr>
						<tr>
							<td style="overflow: wrap;width:15%;border:1px solid;" colspan="2">
								COSTO POR COPIA COLOR	
							</td>
							<td style="overflow: wrap;width:15%;border:1px solid;" colspan="2">
								{$COSTO_COLOR}
							</td>
							<td style="overflow: wrap;width:15%;border:1px solid;" colspan="2">
								SE RECIBE EQUIPO POR PARTE DE PAGO
							</td>
							<td style="overflow: wrap;width:15%;border:1px solid;" colspan="2">
								{$EQUIPO_PAGO}
							</td>
							
						</tr>
							<tr>
							<td style="overflow: wrap;width:15%;border:1px solid;" colspan="2">
								COSTO POR COPIA SCANER	
							</td>
							<td style="overflow: wrap;width:15%;border:1px solid;" colspan="2">
								{$COSTO_SCAN}
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
								{$ADICIONAL_NEGRO}
							</td>
							<td style="overflow: wrap;width:15%;border:1px solid;" colspan="4" rowspan="6">
								{$OBSERV_NATURAL}
							</td>	
						</tr>
						<tr>
							<td style="overflow: wrap;width:15%;border:1px solid;" colspan="2">
								COSTO ADICIONAL COPIA COLOR
							</td>
							<td style="overflow: wrap;width:15%;border:1px solid;" colspan="2">
								{$ADICIONAL_COLOR}
							</td>
						</tr>
						<tr>
							<td style="overflow: wrap;width:15%;border:1px solid;" colspan="2">
								COSTO ADICIONAL SCANN
							</td>
							<td style="overflow: wrap;width:15%;border:1px solid;" colspan="2">
								{$ADICIONAL_SCANN}
							</td>
						</tr>	
						<tr>
							<td style="overflow: wrap;width:15%;border:1px solid;" colspan="2">
								DURACION CONTRATO
							</td>
							<td style="overflow: wrap;width:15%;border:1px solid;" colspan="2">
								{$DURACION_CONTRATO}
							</td>
						</tr>
						<tr>
							<td style="overflow: wrap;width:15%;border:1px solid;" colspan="2">
								FECHA DE INICIO CONTRATO
							</td>
							<td style="overflow: wrap;width:15%;border:1px solid;" colspan="2">
								{$INICIO_CONTRATO}
							</td>	
						</tr>
						<tr>
							<td style="overflow: wrap;width:15%;border:1px solid;" colspan="2">
								FORMA DE PAGO
							</td>
							<td style="overflow: wrap;width:15%;border:1px solid;" colspan="2">
								{$FORMA_PAGO}
							</td>
						</tr>
					</table>

			<tr>
			
			<tr>
				<td style="overflow: wrap;border:1px solid;" colspan="8">
					<left><!-- NOTA: {$NOTA} --></left>
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
</html>