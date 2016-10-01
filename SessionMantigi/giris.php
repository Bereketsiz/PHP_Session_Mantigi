<?php
if(empty($_SESSION["kullanici"])){
	/*Üye Giriþ Formu - Ýsmail Fedakar*/
?>

  <tr>
    <td >&nbsp;</td>
    <td align="center" valign="middle" ><form name="girisformu" action="?sayfa=2" method="post"><table border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="117" height="30" align="left" valign="middle"><font color="#990000"><b>Üye Giriþi</b></font></td>
        <td width="10" height="30" align="left" valign="middle">&nbsp;</td>
        <td width="187" height="30" align="left" valign="middle">&nbsp;</td>
      </tr>
      <tr>
        <td height="30" align="left" valign="middle"><b>Üye Adý</b></td>
        <td height="30" align="left" valign="middle"><b>:</b></td>
        <td height="30" align="left" valign="middle"><input type="text" name="gkullaniciadi" class="yoneticigiristextalani" /></td>
      </tr>
      <tr>
        <td height="30" align="left" valign="middle"><b>Üye Þifresi</b></td>
        <td height="30" align="left" valign="middle"><b>:</b></td>
        <td height="30" align="left" valign="middle"><input type="password" name="gkullanicisifre" class="yoneticigiristextalani" /></td>
      </tr>
      <tr>
        <td height="30" align="left" valign="middle">&nbsp;</td>
        <td height="30" align="left" valign="middle">&nbsp;</td>
        <td height="30" align="left" valign="middle"><input type="submit" value="Giriþ Yap" /></td>
      </tr>
    </table></form></td>
    <td >&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;</td>
  </tr>
</table>
<?php
}else{
	@header("location:?sayfa=4");
}
?>