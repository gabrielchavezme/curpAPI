
<?php
$url ="https://consultas.curp.gob.mx/CurpSP/";
$urlcaptcha ="https://consultas.curp.gob.mx/CurpSP/captchac_u_r_pa";
?>


<img id="capt" name="capt"  src="<?php echo $urlcaptcha; ?>">
<form name="ejemploForma" method="post" action="<?php echo $url;?>datossxcurp.do">
<input type="hidden" name="strtipo" value="A">   
<input type="text" name="codigo" maxlength="5" size="25" value="" placeholder="Captura el Captcha"><br>


<?php //capturese en mayusculas
$strPrimerApellido = "PEDRAZA";
$strSegundoAplido = "PERALES";
$strNombre = "JUAN JOSE";
$strSexo = "H"; // H =hombre M=mujer
$strdia = '13';
$strmes = '02';
$stranio = '1981';
$strEntidadNacimiento ='TS'; //vease la tabla de entidades federaticas abajo
?>
<input type="hidden" name="strPrimerApellido" maxlength="50" size="51" value="<?php echo $strPrimerApellido; ?>" >
<input type="hidden" name="strSegundoAplido" maxlength="50" size="51" value="<?php echo $strSegundoAplido; ?>" >
<input type="hidden" name="strNombre" maxlength="50" size="51" value="<?php echo $strNombre; ?>">

<input type="hidden" name="strSexo" value="<?php echo $strSexo; ?>"> 
<!-- <input type="hidden" name="strSexo" value="M" title=""> -->
<input name="strdia" value='<?php echo $strdia; ?>' type='hidden'>
<input name="strmes" value='<?php echo $strmes; ?>' type='hidden'>
<input name="stranio" value='<?php echo $stranio; ?>' type='hidden'>
<input name="strEntidadNacimiento" value='<?php echo $strEntidadNacimiento; ?>' type='hidden'>
<input type='submit' value='Consultar'>
</form>

<!-- 
DIGITOS USADOS EN EL CURP DE LAS ENTIDADES FEDERATIVAS:

AGUASCALIENTES AS 
BAJA CALIFORNIA BC
BAJA CALIF. SUR BS
CAMPECHE CC
CHIAPAS CS
CHIHUAHUA CH
COAHUILA CL 
COLIMA CM
DISTRITO FEDERAL DF
DURANGO DG
GUANAJUATO GT
GUERRERO GR
HILDALGO HG
JALISCO JC
MEXICO MC 
MICHOACAN MN
MORELOS MS
NAYARIT NT
NUEVO LEON NL
OAXACA OC
PUEBLA PL
QUERETARO QT
QUINTANA ROO QR
SAN LUIS POTOSI SP
SINALOA SL
SONORA SR
TABASCO TC
TAMAULIPAS TS
TLAXCALA TL
VERACRUZ VZ
YUCATAN YN
ZACATECAS ZS -->

