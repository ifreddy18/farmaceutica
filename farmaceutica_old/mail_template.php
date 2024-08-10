<?php
ob_start();
?>
<html>
  <head>
  </head>
  <body>
  	<table width="100%" cellpadding="10" cellspacing="0" style="color: #000000; background-color: #fcfcfc;">
      <tr>
        <td align="center" style="height:70px; padding: 10px; font-size:13px; font-family:Arial, Helvetica, sans-serif; background:#f4f4f4;"><img src="images/logo-mail.png" height="90"></td>
      </tr>
      <tr >
        <td align="left" style="font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#666; padding:40px;">
          <br/>
           <span style="font-size:17px;"><b>Nuevo contacto</b></span><br/>
          <br>
          Estos son los datos enviados desde el formulario de contacto de la página web <strong><?php echo $webSite; ?></strong>.
          <br>
          <br/>
          <b>Nombre</b>: <?php echo $nameClean; ?><br>
          <b>E-mail</b>: <?php echo $emailClean; ?><br>
          <b>Teléfono</b>: <?php echo $phoneClean; ?><br>
          <b>Comentario</b>: <?php echo  nl2br($commentsClean); ?><br>
          <br/>
        </td>
      </tr>
      <tr>
         <td style="background-color:#252536; font-family:Arial, Helvetica, sans-serif; font-size:13px;  text-align: center; padding:10px; color:#d8ecee;">
         <strong><a href="http://<?php echo $webSite; ?>" target="_blank" style="color:#FFF; text-decoration:none;"><?php echo $webSite; ?></a></strong>
         <br>
         <span style="font-size:10px;">
         Este es un correo automático enviado a <a href="mailto:<?php echo $emailClean; ?>" target="_blank" style="color:#CCC; "><?php echo $emailClean; ?></a>, por favor no responda este correo. <br>
         </span>
         </td>
      </tr>
    </table>
  </body>
</html>
<?php
$content = ob_get_contents();
ob_end_clean();
return($content);
?>