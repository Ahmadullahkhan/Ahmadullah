
<?PHP
include('../connection.php');
include('../functions.php');
include('session_ordinary.php');
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><title>REPORTS</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<style type="text/css">
body {
	background-image: url(image/BG_Img_1.png);
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
</style>
<link href="main.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
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
</head>

<body onload="MM_preloadImages('image/educaton1.png','image/ftraining1.png','image/leave1.png','image/publication1.png','image/researches1.png','image/scholar1.png','image/memberships1.png','image/visited1.png','image/personal1.png','image/child1.png','image/searchemp2.png')">
<form id="form1" name="form1" method="post" action="">
  <table width="1014" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td align="center"><table width="1000" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td colspan="3"><img src="image/blue_color_01.gif" width="1014" height="10" /></td>
          </tr>
        <tr>
          <td width="8"><img src="image/blue_color_02.gif" width="8" height="170" /></td>
          <td width="988" align="center"><img src="image/Capture.jpg" width="996" height="170" /></td>
          <td width="10"><img src="image/blue_color_04.gif" width="10" height="170" /></td>
        </tr>
        <tr>
          <td colspan="3"><img src="image/blue_color_05.gif" width="1014" height="10" /></td>
          </tr>
      </table></td>
    </tr>
    <tr>
      <td align="center"><table width="1015" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
	      <td width="10" align="center" valign="top"><img src="image/blue_color_02.gif" width="9" height="530" align="middle" /></td>
	      <td width="996" align="center"><h1>&nbsp;</h1>
	        <table width="100%" border="0" align="center">
	          <tr>
	            <td width="5%" align="right"><a href="../logout.php"></a></td>
	            <td width="10%" align="right">&nbsp;</td>
	            <td width="74%" align="right">&nbsp;</td>
	            <td width="11%" align="center"><a href="../logout.php">LOG OUT</a></td>
	            </tr>
	          </table>
	        <h1>EMPLOYEE REPORTS</h1>
	        <table width="581" border="0" cellpadding="4" cellspacing="0">
	          <tr>
	          <td width="147" align="center"><a href="childs.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image21','','image/child1.png',1)"><img src="image/childs2.png" name="Image21" width="147" height="63" border="0" id="Image21" /></a></td>
	          <td width="263" align="center"><a href="publication.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image14','','image/publication1.png',1)"><img src="image/publication2.png" alt="" name="Image14" width="147" height="63" border="0" id="Image14" /></a></td>
	          <td width="147" align="center"><a href="emp_education.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image10','','image/educaton1.png',1)"><img src="image/educaton2.png" name="Image10" width="147" height="63" border="0" id="Image10" /></a></td>
	          </tr>
	        <tr>
	          <td height="71" align="center"><a href="formal_traning.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image11','','image/ftraining1.png',1)"><img src="image/ftraining2.png" name="Image11" width="147" height="63" border="0" id="Image11" /></a></td>
	          <td align="center"><a href="memberships.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image17','','image/memberships1.png',1)"><img src="image/memberships2.png" alt="" name="Image17" width="147" height="63" border="0" id="Image17" /></a><a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image14','','image/publication1.png',1)"></a></td>
	          <td align="center"><a href="leaves.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image12','','image/leave1.png',1)"><img src="image/leave2.png" name="Image12" width="147" height="63" border="0" id="Image12" /></a></td>
	          </tr>
	        <tr>
	          <td height="71" align="center"><a href="emp_researches.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image15','','image/researches1.png',1)"><img src="image/researches2.png" name="Image15" width="147" height="63" border="0" id="Image15" /></a></td>
	          <td align="center"><a href="country_visited.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image18','','image/visited1.png',1)"><img src="image/visited2.png" alt="" name="Image18" width="147" height="63" border="0" id="Image18" /></a><a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image17','','image/memberships1.png',1)"></a></td>
	          <td align="center"><a href="Scholarships.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image16','','image/scholar1.png',1)"><img src="image/scholar2.png" name="Image16" width="147" height="63" border="0" id="Image16" /></a></td>
	          </tr>
	        <tr>
	          <td align="center" bgcolor="#99FFFF"><a href="emp_pers.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image19','','image/personal1.png',1)"><img src="image/personal2.png" name="Image19" width="147" height="63" border="0" id="Image19" /></a></td>
	          <td align="center" bgcolor="#99FFFF"></td>
	          <td align="center" bgcolor="#99FFFF"><p><a href="search_emp.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image22','','image/searchemp2.png',1)"><img src="image/searchemp1.png" alt="" name="Image22" width="147" height="63" border="0" id="Image22" /></a></p></td>
	          </tr>
	        </table></td>
	      <td width="9" align="center"><img src="image/blue_color_04.gif" width="9" height="530" /></td>
	      </tr>
	    <tr>
	      <td colspan="3" align="center" valign="top"><img src="image/blue_color_05.gif" width="1014" height="14" /></td>
	      </tr>
	    </table>

	</td>
    </tr>
    
  </table>
  <?php require_once("footer2.php");?>
  <br />
</form>
<script type="text/javascript">;
</script>
</body>
</html>