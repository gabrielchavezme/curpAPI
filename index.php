<!DOCTYPE html>
<?php
$url ="https://consultas.curp.gob.mx/CurpSP/";
$urlcaptcha ="https://consultas.curp.gob.mx/CurpSP/captchac_u_r_pa";

?>
<head>
	<meta charset="utf-8">
	<meta http-equiv="expires" content="0">
	<meta http-equiv="Cache-Control" content="no-cache">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Consulta curp</title>
	<link rel="stylesheet" type="text/css" href="curp.css">  
	<!-- <script language="JavaScript" src="<?php //echo $url;?>bibliotecaJS/Fechas.js"></script>
	<script language="JavaScript" src="<?//php echo $url;?>bibliotecaJS/Curp.js"></script>
	<script language="JavaScript" src="<?//php echo $url;?>bibliotecaJS/Trim.js"></script>
     -->
    <script language="JavaScript" src="Fechas.js"></script>
	<script language="JavaScript" src="Curp.js"></script>
	<script language="JavaScript" src="Trim.js"></script>


	<script language="JavaScript1.3">

	function enviar()
	{
		var intDia;
		var intMes;
		var intAnio;
		var strAnio;
		var dtmHoy = new Date(2018,1,26);
	
		document.ejemploForma.strPrimerApellido.value  = trim(document.ejemploForma.strPrimerApellido.value).toUpperCase();
		document.ejemploForma.strSegundoAplido.value = trim(document.ejemploForma.strSegundoAplido.value).toUpperCase();
		document.ejemploForma.strNombre.value  = trim(document.ejemploForma.strNombre.value).toUpperCase();
	
	   	if(document.ejemploForma.strPrimerApellido.value == "" || document.ejemploForma.strPrimerApellido.value.length < 1)
		{
			alert("Verificar, es necesario proporcionar completo el Primer Apellido");
			document.ejemploForma.strPrimerApellido.focus();
			return false;
		}
		
		if(trim(document.ejemploForma.strPrimerApellido.value).length==1)
		{	
			var strPrimer = document.ejemploForma.strPrimerApellido.value;
			var regP      = "[A-ZÑÜ.']";
			if(strPrimer.search(regP) != 0)
			{	
				alert("Verificar, el primer Apellido no valido\n caracteres validos: A-Z (incluso Ñ)");
				document.ejemploForma.strPrimerApellido.focus();
				return false;	
			}
		}
		else
		{	
			var strPrimer = document.ejemploForma.strPrimerApellido.value;
			if(strPrimer.length==2)
			{
				var regP      = "[A-ZÑÜ]{1}[A-ZÑÜ.']{1}";
				if(strPrimer.search(regP) != 0){	
					alert("Verificar, el primer Apellido no valido, caracteres invalidos");
					document.ejemploForma.strPrimerApellido.focus();
					return false;	
				}
			}
			else
			{
				var intLongP  = strPrimer.length - 2;
				var regP      = "[A-ZÑÜ]" + "[A-ZÑÜ'/.\\- ]{" + intLongP + "}" + "[A-ZÑÜ.]";
				if(strPrimer.search(regP) != 0){	
					alert("Verificar que el primer Apellido "+strPrimer+" sea correcto. Caracteres permitidos: A-Z (incluso Ñ), diagonal  (/), guión  (-), punto (.) o apóstrofo ('), Diéresis ( ¨ ) y espacio (excepto al inicio y al final).");
					document.ejemploForma.strPrimerApellido.focus();
					return false;	
				}
			}	
		}		
		
		if(document.ejemploForma.strSegundoAplido.value != ""){
			if(trim(document.ejemploForma.strSegundoAplido.value).length==1)
			{
				var strSegundo = document.ejemploForma.strSegundoAplido.value;
		   		var regS       = "[A-ZÑÜ.']";
				if(strSegundo.search(regS) != 0){	
					alert("Verificar, el segundo Apellido no valido\n caracteres validos: A-Z (incluso Ñ)");
					document.ejemploForma.strSegundoAplido.focus();
					return false;	
				}	
			}
			else
			{
				var segundoAplido = document.ejemploForma.strSegundoAplido.value;
				if(segundoAplido.length==2)
				{
					var regP      = "[A-ZÑÜ]{1}[A-ZÑÜ.']{1}";
					if(segundoAplido.search(regP) != 0){	
						alert("Verificar, el segundo Apellido no valido, caracteres invalidos");
						document.ejemploForma.strSegundoAplido.focus();
						return false;	
					}
				}
				else
				{		
					if(document.ejemploForma.strSegundoAplido.value.length < 2){
						alert("Verificar, es necesario proporcionar completo el Segundo Apellido");
						document.ejemploForma.strSegundoAplido.focus();
						return false;
					}
					var strSegundo = document.ejemploForma.strSegundoAplido.value;
					var intLongS   = strSegundo.length - 2;
			   		var regS       = "[A-ZÑÜ]" + "[A-ZÑÜ'/.\\- ]{" + intLongS + "}" + "[A-ZÑÜ.]";
					if(strSegundo.search(regS) != 0){	
						alert("Verificar que el Segundo Apellido "+strSegundo+" sea correcto. Caracteres permitidos: A-Z (incluso Ñ), diagonal  (/), guión  (-), punto (.) o apóstrofo ('), Diéresis ( ¨ ) y espacio (excepto al inicio y al final).");
						document.ejemploForma.strSegundoAplido.focus();
						return false;	
					}
				}
			}	
		}
	
		if(document.ejemploForma.strNombre.value == "" || document.ejemploForma.strNombre.value.length < 1)
		{
			alert("Verificar, es necesario proporcionar completo el Nombre");
			document.ejemploForma.strNombre.focus();
			return false;
		}
		if(trim(document.ejemploForma.strNombre.value).length==1)
		{
			var strNombre = document.ejemploForma.strNombre.value;
		   	var regN      = "[A-ZÑÜ.']";
			if(strNombre.search(regN) != 0){	
				alert("Verificar, el nombre invalido, \n Caracteres validos: \n A-Z (incluso Ñ)");
				document.ejemploForma.strNombre.focus();
				return false;	
			}
		}
		else
		{
			var strNombre = document.ejemploForma.strNombre.value;
			var intLongN  = strNombre.length - 2;
		   	var regN      = "[A-ZÑÜ]" + "[A-ZÑÜ'/.\\- ]{" + intLongN + "}" + "[A-Z.ÑÜ]";
			if(strNombre.search(regN) != 0){	
				alert("Verificar que el Nombre "+strNombre+" sea correcto. Caracteres permitidos: A-Z (incluso Ñ), diagonal  (/), guión  (-), punto (.) o apóstrofo ('), Diéresis ( ¨ ) y espacio (excepto al inicio y al final).");
				document.ejemploForma.strNombre.focus();
				return false;	
			}
		}

		strAnio = document.ejemploForma.stranio.value;
		if(strAnio == "" || strAnio.length < 4 || strAnio.search(/\d{4}/) != 0)
		{
			alert("Es necesario proporcionar el año de la Fecha de Nacimiento, con 4 digitos")
			document.ejemploForma.stranio.focus()
			return false;
		}   
	
		intAnio = parseInt(strAnio)
		if(intAnio < (dtmHoy.getFullYear() - 120) || intAnio > dtmHoy.getFullYear())
		{
			alert("Es necesario que el año de la Fecha de Nacimiento, se encuentre entre " + (dtmHoy.getFullYear() - 120)+ " y " + dtmHoy.getFullYear())
			document.ejemploForma.stranio.focus()
			return false;
		}   
	
	
	
		intMes  = parseInt(document.ejemploForma.strmes.options[document.ejemploForma.strmes.selectedIndex].value) - 1
		intDia  = parseInt(document.ejemploForma.strdia.options[document.ejemploForma.strdia.selectedIndex].value)
		
		// *********************** Muy importante no borrar
		
		if(document.ejemploForma.strdia.options[document.ejemploForma.strdia.selectedIndex].value == '08')
		{
			intDia = parseInt('8');
		}
		
		if(document.ejemploForma.strdia.options[document.ejemploForma.strdia.selectedIndex].value == '09')
		{
			intDia = parseInt('9');
		}
		
		if(document.ejemploForma.strmes.options[document.ejemploForma.strmes.selectedIndex].value == '08')
		{
			intMes = parseInt('7');
		}
		
		if(document.ejemploForma.strmes.options[document.ejemploForma.strmes.selectedIndex].value == '09')
		{
			intMes = parseInt('8');
		}
		
		// *********************** Muy importante no borrar
		if(!(ValidaFecha(intDia, intMes, intAnio, "La Fecha de Nacimiento no es Válida"))){ 
			return false;
		}
		
		if(ComparaFechas(intDia, intMes, intAnio, dtmHoy.getDate(), dtmHoy.getMonth(), dtmHoy.getFullYear()) == 1){
			alert("La Fecha de Nacimiento no Puede ser Mayor a la Fecha Actual")
			return false;
		}
		
		var captcha = document.ejemploForma.codigo.value;
	    if( (captcha=="") ||(captcha.length<5) || (captcha.length>5) )
		{
			alert("Es necesario la captura del codigo de validacion")
			document.ejemploForma.codigo.focus()
			return false;
		}
	
		var sSexo = "";
	
		if(document.ejemploForma.strSexo[0].checked)
	   	{
	       sSexo = "&strSexo=" + document.ejemploForma.strSexo[0].value;
		   sSexoA=document.ejemploForma.strSexo[0].value;
	   	}
	   	else if(document.ejemploForma.strSexo[1].checked)
	   	{
	       sSexo = "&strSexo=" + document.ejemploForma.strSexo[1].value;
		   sSexoA=document.ejemploForma.strSexo[1].value;
	   	}
		else
		{
		   alert ("Seleccione el sexo de los datos a buscar");
		   return false;
		   //sSexo = "&strSexo="
		}
	    if (document.ejemploForma.strEntidadNacimiento.selectedIndex==0) 
		{
	       alert ("seleecione una entidad");
		   document.ejemploForma.strEntidadNacimiento.focus();
		   return false;
		 }   	
		 document.ejemploForma.submit();	
			
	} 
	/***************************************************************/
	
	function enviarforma()
	{
		if (window.event.keyCode==13) {
	    	enviar2();
		}
	}
	
	function enviar2() 
	{

		var bandera=0;
		document.ejemploForma2.strCurp.value = trim(document.ejemploForma2.strCurp.value).toUpperCase();
		var curp= document.ejemploForma2.strCurp.value;
		if(document.ejemploForma2.strCurp.value == "" || 
		   (document.ejemploForma2.strCurp.value.length<18) || (document.ejemploForma2.strCurp.value.length>18))
		{
			alert("Es necesario proporcionar los 18 caracteres que componen la CURP")
			document.ejemploForma2.strCurp.focus();
			bandera=1;
			return false;
		}
		if(!validaCURP(document.ejemploForma2.strCurp.value))
		{
			document.ejemploForma2.strCurp.focus();
			bandera=1;
			return false;
		}
		document.ejemploForma2.submit();
	}

	function Refresca()
	{
		document.ejemploForma2.strCurp.value="";
		document.ejemploForma.strPrimerApellido.value=""; 
		document.ejemploForma.strSegundoAplido.value="";
		document.ejemploForma.strNombre.value="";
		document.ejemploForma.strdia.selectedIndex=0;
		document.ejemploForma.strmes.selectedIndex=0;
		document.ejemploForma.stranio.value="";
		document.ejemploForma.strSexo.value="H"; 	
		document.ejemploForma.strEntidadNacimiento.selectedIndex=0;	
		document.ejemploForma2.codigo.value="";
		document.ejemploForma.codigo.value="";
	}	
	
	function Refresca2()
	{
		document.ejemploForma2.strCurp.value="";
		document.ejemploForma2.codigo.value="";
	}	
	function Refresca3()
	{
		document.ejemploForma.strPrimerApellido.value=""; 
		document.ejemploForma.strSegundoAplido.value="";
		document.ejemploForma.strNombre.value="";
		document.ejemploForma.strdia.selectedIndex=0;
		document.ejemploForma.strmes.selectedIndex=0;
		document.ejemploForma.stranio.value=""; 		
		document.ejemploForma.strSexo.value="H"; 	
		document.ejemploForma.strEntidadNacimiento.selectedIndex=0;	
		document.ejemploForma.codigo.value="";
	}
	
	function checkKey(evt) {
		if (event.altKey)
		{ 
			alert("botón deshabilitado");
		}
		if (event.shiftKey)
		{ 
			alert("botón deshabilitado");
		}
	}
	

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

</script>
    
<script language="JavaScript" src="bibliotecaJS/headers.js"></script>
<script language="JavaScript1.3">
conteopage();

function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
</script>  

<script type="text/javascript" language="Javascript">
		document.oncontextmenu = function(){return false}
	</script>
	
	
	

<script type="text/javascript" language="Javascript">
		//Actualizar una vez al cargar página
		window.onunload = recargar;
		var valor;
		if(document.cookie){
			cargar = unescape(document.cookie)
			cargar = cargar.split(';')
			for(m=0; m<cargar.length; m++){
				if(cargar[m].split('=')[0].trim() == "recarga"){
					valor = cargar[m].split('=')[1];
					break;
				}
			}
			if(valor == "si"){
				document.cookie = "recarga=no"; 
				window.onunload = function(){};
				document.location.reload(true);
			}
			else{
			window.onunload=recargar
			}

		}
		function recargar(){
			document.cookie ="recarga=si"
		}
	</script>  	
	

</head>
<html>    
  <body onLoad="Refresca();MM_preloadImages('<?php echo $url;?>imagenes/ayuda5.jpg')" oncontextmenu="return false" onKeyDown="checkKey(event)"> 
   <table width="100%" border="0">
    <tr><td height="30" align="right">
     	<H2>C&oacute;digo de verificaci&oacute;n:</H2>     
     </td>
     <td height="30" align="left">
        <img id="capt" name="capt"  src="<?php echo $urlcaptcha; ?>">
     </td>
     </tr>
   </table>
  <form name="ejemploForma" method="post" action="<?php echo $url;?>datossxcurp.do">
  <input type="hidden" name="strtipo" value="A">
   <table width="100%" border="0">
  <tr>
    <td colspan="3" class="TablaTitulo">Ingresa los datos para buscar tu CURP</td>
  </tr>
	<tr>
       <td width="329"><div align="right">Código de verificación:</div></td>
       <td colspan="2"><input type="text" name="codigo" maxlength="5" size="25" value="" onblur="this.value=trim(this.value).toUpperCase()" class="textbox" title="Ingresa el código"><span class="style1">Obligatorio</span></td>
     </tr>  
  <tr>
    <td width="329"><div align="right">Primer apellido:</div></td>
    <td colspan="2"><input type="text" name="strPrimerApellido" maxlength="50" size="51" value="" onblur="this.value=trim(this.value).toUpperCase()" class="textbox" title="Ingresa el primer apellido"><span class="style1">Obligatorio</span></td>
  </tr>
  <tr>
    <td><div align="right">Segundo Apellido:</div></td>
    <td colspan="2"><input type="text" name="strSegundoAplido" maxlength="50" size="51" value="" onblur="this.value=trim(this.value).toUpperCase()" class="textbox" title="Ingresa el segundo apellido"><span class="style3">Obligatorio en caso de existir</span></td>
  </tr>
  <tr>
    <td><div align="right">Nombre(s):</div></td>
    <td colspan="2"><input type="text" name="strNombre" maxlength="50" size="51" value="" onblur="this.value=trim(this.value).toUpperCase()" class="textbox" title="Ingresa el nombre"><span class="style1">Obligatorio</span></td>
  </tr>
  <tr>
    <td><div align="right">Sexo:</div></td>
    <td colspan="2">
	Hombre <input type="radio" name="strSexo" value="H" class="textbox" title=""> 
	Mujer <input type="radio" name="strSexo" value="M" title="">
	<span class="style3">altamente recomendado</span></td>
  </tr>
  <tr>
    <td><div align="right">Fecha de Nacimiento:</div></td>
    <td colspan="2">
    
    <select name="strdia" class="textbox"><option value="01">01</option> <option value="02">02</option> <option value="03">03</option> <option value="04">04</option> <option value="05">05</option> <option value="06">06</option> <option value="07">07</option> <option value="08">08</option> <option value="09">09</option> <option value="10">10</option> <option value="11">11</option> <option value="12">12</option> <option value="13">13</option> <option value="14">14</option> <option value="15">15</option> <option value="16">16</option> <option value="17">17</option> <option value="18">18</option> <option value="19">19</option> <option value="20">20</option> <option value="21">21</option> <option value="22">22</option> <option value="23">23</option> <option value="24">24</option> <option value="25">25</option> <option value="26">26</option> <option value="27">27</option> <option value="28">28</option> <option value="29">29</option> <option value="30">30</option> <option value="31">31</option></select> <select name="strmes" class="textbox"><option value="01">Ene</option> <option value="02">Feb</option> <option value="03">Mar</option> <option value="04">Abr</option> <option value="05">May</option> <option value="06">Jun</option> <option value="07">Jul</option> <option value="08">Ago</option> <option value="09">Sep</option> <option value="10">Oct</option> <option value="11">Nov</option> <option value="12">Dic</option></select> <input type="text" name="stranio" maxlength="4" size="5" value="" class="textbox" title="Ingresa el año AAAA">
	<span class="style1">Obligatorio</span></td>
  </tr>
  
  
  
  <tr>
    <td><div align="right">Entidad Federativa de nacimiento:</div></td>
    <td colspan="2">
    
    <select name="strEntidadNacimiento" class="textbox"><option value="">- Seleccione -</option> <option value="AS">AGUASCALIENTES</option> <option value="BC">BAJA CALIFORNIA</option> <option value="BS">BAJA CALIFORNIA SUR</option> <option value="CC">CAMPECHE</option> <option value="CL">COAHUILA DE ZARAGOZA</option> <option value="CM">COLIMA</option> <option value="CS">CHIAPAS</option> <option value="CH">CHIHUAHUA</option> <option value="DF">DISTRITO FEDERAL</option> <option value="DG">DURANGO</option> <option value="GT">GUANAJUATO</option> <option value="GR">GUERRERO</option> <option value="HG">HIDALGO</option> <option value="JC">JALISCO</option> <option value="MC">MEXICO</option> <option value="MN">MICHOACAN DE OCAMPO</option> <option value="MS">MORELOS</option> <option value="NT">NAYARIT</option> <option value="NL">NUEVO LEON</option> <option value="OC">OAXACA</option> <option value="PL">PUEBLA</option> <option value="QT">QUERETARO DE ARTEAGA</option> <option value="QR">QUINTANA ROO</option> <option value="SP">SAN LUIS POTOSI</option> <option value="SL">SINALOA</option> <option value="SR">SONORA</option> <option value="TC">TABASCO</option> <option value="TS">TAMAULIPAS</option> <option value="TL">TLAXCALA</option> <option value="VZ">VERACRUZ</option> <option value="YN">YUCATAN</option> <option value="ZS">ZACATECAS</option> <option value="NE">NACIDO EN EL EXTRANJERO</option></select>
    <span class="style1">Obligatorio</span>    
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td width="803">
	 <input type="button" class="boton0" value=" Limpiar " onclick="Refresca3()" name="Refresca"/>      <!--<input type="reset"  name="rstLimpiar" value=" Limpiar ">-->
	 <input type="button" class="boton2" value=" Buscar " onclick="enviar()"/>
	</td>
    <td width="99">&nbsp;</td>
  </tr>
  <tr>
    <td><br></td>
    <td><br></td>
  </tr>
  <tr>

  </tr>
  <tr>

  </tr>
  <tr>
    <td>
	
    </td>
    
    
  </tr>
</table>

</form>
</body>
</html>

