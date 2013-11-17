<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
</script>
			<link rel="shortcut icon" href="http://www.colourbox.com/preview/2731142-747840-.jpg">
			<SCRIPT language=JavaScript>
			var txt= " ..::Proyecto::.. ";
			var espera=100;
			var refresco=null;
			function rotulo_title() {
		 	document.title=txt;
		 	txt=txt.substring(1,txt.length)+txt.charAt(0);
		 	refresco=setTi</td>
        </tr>meout("rotulo_title()" ,espera);}
			rotulo_title();
		</SCRIPT>
        <script src="js/jquery-1.7.2.min.js"></script>
		<script src="js/lightbox.js"></script>
		<link href="css/lightbox.css" rel="stylesheet">
</head>

<body style background="fondo de pagina.jpg" text="FFFFFF">

<center><table border="2" bordercolor="#FFFF00">

<TR>
    			<TD><a href="Pagina principal.html"><center><img src="Home.jpg" WIDTH="180" HEIGTH="200"></center></a></TD>
                
            	<TD><a href="perfil usuario.php"><center><img src="Perfil.jpg" WIDTH="187" HEIGTH="200"></center></a></TD>
                
    			<TD><a href="galeria.html"><center><img src="proyectos.jpg" WIDTH="195" HEIGTH="200"></center></a></TD>
                
    			<TD><a href="juegos.html"><center><img src="Donadores.jpg" WIDTH="190" HEIGTH="210"></center></a></TD>
                
</TR>
                
		</table></center>
        
        <center><table width="1135" height="621" border="6" bordercolor="#FFFF00" >
<tr>

	<td> <table width="200" height="200"border="6" align="center" bordercolor="#FFFF00">
    
  
<tr>
   <td>
    <h3> Bienvenido a tu Perfil </h3>
    
    
	<table>
    	<tr>
          <td>
   				Usuario:
          </td>
         <td>
  <?php
session_start();
if($_SESSION['logged'] == 'yes')
{
	echo ''.$_SESSION['first_name'].' ';
	
}	else{
		echo'No has iniciado sesión';	
}
?>
          </td>
            </tr>
            
             
     	</table>
          
     

</td>
  </tr>  
</table> </td>
           		
</table></center>



</body>

</html>

