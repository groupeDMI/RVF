<?php
if ((isset($_POST['accord']))&&($_POST['accord']=="ok"))
{
$nom=htmlspecialchars($_POST['nom']);
$mail=htmlspecialchars($_POST['mail']);
$societe=htmlspecialchars($_POST['societe']);
$demande=htmlspecialchars($_POST['demande']);

$entete1="From :\"$nom\" <".$mail.">\r\n";
$entete1.="Reply-To: \"$nom\" <".$mail.">\r\n";
$entete1.="X-Priority:1\r\n\r\n";
$bloc="Nouvelle demande : \n";
$demande=str_replace("\\", "'",$demande);
$demande=str_replace("\"", "'",$demande);
$demande=str_replace("''", "'",$demande);
$bloc.=$demande;
$bloc.="\n\n";
$bloc.="Mail : ".$mail."\n\n";
$bloc.="Société : ".$societe."\n\n";
$okenvoi=mail("vgentot@rvf.com","Demande d'information",$bloc,$entete1);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Contactez l'équipe commerciale de RVF</title>
<meta http-equiv="imagetoolbar" content="no" /> 
<meta http-equiv="MSThemeCompatible" content="no" /> 
<meta name="MSSmartTagsPreventParsing" content="TRUE" />
<meta name="description" content="Contactez l'équipe commerciale de RVF" />
<link href="ressort.css" rel="stylesheet" type="text/css" media="screen" />
<link href="ressorts.css" rel="stylesheet" type="text/css" media="print" />
<script language="javascript" type="text/javascript" src="scripts/swfobject.js"></script>
<script language="javascript" type="text/javascript" src="scripts/ie.js"></script>
<?php include("favicon.inc.php");?>
<script language="javascript" type="text/javascript">
var motif="";
function verif()	{
if (document.formu.nom.value==""){motif="Indiquez votre nom SVP...\n";}
if (document.formu.nom.value!="")
	{
var str=document.formu.nom.value;
var filter=/[0-9]/;
if ((filter.test(str)) || (str.length < 3)){motif+="Saisie du nom incorrecte.\n";}
	}
if (document.formu.mail.value==""){motif+="Saisissez votre email SVP !\n";}
if (document.formu.mail.value!="")
	{
var str=document.formu.mail.value;
var filter=/^.+@.+\..{2,3}$/;
if ((!filter.test(str))||(str.indexOf(";")!=-1)){motif+="Saisie du mail incorrecte.\n";}
	}
if (document.formu.societe.value==""){motif+="Indiquez votre société svp !\n";}
if (document.formu.demande.value==""){motif+="Vous n'avez pas saisi de message !\n";}
if (motif!=''){alert(""+motif);} 
else {document.formu.accord.value='ok';document.formu.submit();}
motif='';
			}
</script>

</head>
<body>
<div id="rvf">
	<div id="top">
		<div><script language="javascript">run_flash("./flash/monde.swf","314","133");</script></div>
		<div><img name="ressorts_r1_c4" src="ressorts/ressorts_r1_c4.jpg" width="220" height="133" border="0" id="ressorts_r1_c4" alt="" /></div>
		<div><script language="javascript">run_flash("./flash/rvf.swf","318","133");</script></div>
	</div>
	<div id="top2"> </div>
	<ul id="nav">
		<li id="nos-ressorts"><div>Visualisez la gamme<br />de nos ressorts<br /><span class="ressort"><a href="fabrication-ressorts.php" title="Voir toute la gamme des ressorts RVF"></a></span></div></li>
		<li id="ressorts-industriels"><div>Fabrication de ressorts<br />pour appareillage électrique<br /><span class="ressort"><a href="ressorts-industriels.php" title="Ressorts pour appareils électroménagers et électriques"></a></span></div></li>
		<li id="ressorts-automobile"><div>Conception de ressorts<br />pour l'industrie automobile<br /><span class="ressort"><a href="ressorts-automobile.php" title="Ressorts destinés à l'industrie automobile"></a></span></div></li>
		<li id="ressorts-sur-mesure"><div>Création sur mesure<br />de ressorts spécifiques<br /><span class="ressort"><a href="ressorts-sur-mesure.php" title="Ressorts sur mesure"></a></span></div></li>
	</ul>
	<ul id="snav">
		<li id="snav1"></li>
		<li id="snav2"><a href="springs/<?php echo basename($_SERVER['PHP_SELF']);?>"></a></li>
		<li id="snav3"></li>
		<li id="snav4"></li>
		<li id="snav5"><a href="./" title="Accueil RVF"></a></li>
		<li id="snav6"><a href="http://www.rvf.com/" title="Ressorts RVF" rel="sidebar" onClick="addToFavorites(this);return(false);" title="Ajoutez RVF à vos favoris"></a></li>
		<li id="snav7"><a href="javascript:window.print();" title="Imprimez cette page"></a></li>
	</ul>
	<div id="fabricant-ressorts">
		<div id="menu">
			<ul>
				<li id="rvf-1"><a href="./" title="Site RVF"></a></li>
				<li id="rvf-2"><a href="rvf.php" title="L'expérience de RVF"></a></li>
				<li id="rvf-3"><a href="ressorts.php" title="Les ressorts de RVF"></a></li>
				<li id="rvf-5b"><a href="contact.php" title="Contactez RVF"></a></li>
			</ul>
			<br /><br /><img src="ressorts/image-ressort.jpg" alt="Images ressort" id="image-ressort" />
		</div>
		<div id="contenu">

<h1>Contactez RVF pour vos ressorts...</h1>

<?php
if (isset($okenvoi))
{
echo '<br /><br /><span class="gras">Votre demande a été envoyée. <br />Elle sera traitée dans les plus brefs délais.<br />Nous vous remercions de votre confiance.<br /></span>';
}
else
{
?>
<br /><br />
<form name="formu" action="contact.php" method="post"><input type="hidden" name="accord">
<table cellpadding="0" cellpadding="0" border="0">
<tr><td colspan="3"> </td></tr>
<tr><td width="130">&nbsp;</td><td>Votre nom :</td><td><input type="text" name="nom" style="width:200px;" /></td></tr>
<tr><td width="130">&nbsp;</td><td>Votre société :</td><td><input type="text" name="societe" style="width:200px;" /></td></tr>
<tr><td width="130">&nbsp;</td><td>Votre email :</td><td><input type="text" name="mail" style="width:200px;" /></td></tr>
<tr><td width="130">&nbsp;</td><td>Votre demande :</td><td><textarea name="demande" style="width:200px;height:120px;"></textarea></td></tr>
<tr><td width="130">&nbsp;</td><td>&nbsp;</td><td><input type="button" onclick="verif()" name="envoi" value="Envoyer" style="width:200px;" /></td></tr>
</table>
</form>

<?php
}
?>

<br /><br /><br />
<img src="ressorts/hr.jpg" align="right" /><br />
<h2 style="padding-top:0px;">Les coordonnées de RVF...</h2>
<p style="text-align:center;">
<strong>RVF SPRINGS SOLUTIONS Ressorts & Visseries des Flandres</strong><br />
Zac du Beck _12 Rue des Lainiers<br />
59150 WATTRELOS<br />
France<br /><br />
Tel.: (33) 03 20 70 08 47<br />
Fax.: (33) 03 20 70 80 42<br />
E-mail : <a href="mailto:vgentot@rvf.com">vgentot@rvf.com</a>
</p>

<div id="map" style="width:600px;height:400px;"></div>

<p>
<a href="http://www.webrankinfo.com/annuaire/cat-68-produits-et-services-industriels.htm" title="Annuaire Commerce et Economie"><img src="http://www.webrankinfo.com/images/wri/webrankinfo-80-15.png" border="0" alt="Annuaire Commerce et Economie" /></a>
</p>

		</div>
	</div>
<?php include("bas.inc.php");?>
</div>
</body>
</html>